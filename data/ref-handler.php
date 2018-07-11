<?php
    require_once('handler.php');

    if(isset($_POST['patname'])){

        $sql = $handler->prepare("INSERT INTO referral(`pat_num`,`ref_desc`,`ref_indate`) VALUES(:patname,:ref_desc,now())");

        $sql->execute(array(
            'patname' => isset($_POST['patname']) ? $_POST['patname'] : null,
            'ref_desc' => isset($_POST['ref_desc']) ? $_POST['ref_desc'] : null)
        );
        echo 1;
    }elseif (isset($_POST['recref'])) {
        $sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname,referral.ref_num, referral.ref_indate 
        FROM patient RIGHT JOIN referral ON patient.pat_num = referral.pat_num ORDER BY referral.ref_indate DESC LIMIT 5");

		while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
			 if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
            }

            $fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
            $dateCre = date_create($row->ref_indate);

			$date = date_format($dateCre, 'M. d, Y');

            $result[] = array(
            	'pat_num' => $row->ref_num,
            	'fullname' => $fullname,
            	'img' => substr(ucfirst($row->pat_fname), 0, 1)."".substr(ucfirst($row->pat_lname), 0, 1),
            	'indate' => $date
            );
		}

        echo json_encode($result);
    }elseif(isset($_POST['get_usr'])){
        $refnum = $_POST['get_usr'];
 
        $sql = $handler->prepare("SELECT referral.ref_num, referral.pat_num, referral.ref_desc, patient.pat_fname, patient.pat_mname, patient.pat_lname
         FROM referral INNER JOIN patient ON referral.pat_num = patient.pat_num WHERE ref_num = ?");
        $sql->execute(array($refnum));

        while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
            if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
            $result[] = array(
                'ref_num' => $row->ref_num,
                'fullname' => $fullname,
                'desc' => $row->ref_desc
            );
        }

        echo json_encode($result);
    }elseif(isset($_POST['refprint'])){
        $refnum = $_POST['refprint'];
 
        $sql = $handler->prepare("SELECT referral.ref_num, referral.pat_num, referral.ref_desc,referral.ref_indate, patient.pat_fname, patient.pat_mname, patient.pat_lname
         FROM referral INNER JOIN patient ON referral.pat_num = patient.pat_num WHERE ref_num = ?");
        $sql->execute(array($refnum));

        while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
            if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}
            $dateCre = date_create($row->ref_indate);
			$date = date_format($dateCre, 'M. d, Y');

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
            $result[] = array(
                'ref_num' => $row->ref_num,
                'fullname' => $fullname,
                'desc' => $row->ref_desc,
                'date' => $date
            );
        }

        echo json_encode($result);
    }elseif (isset($_POST['refid'])) {
        $sql = $handler->prepare("UPDATE referral SET ref_desc=:ref_desc WHERE ref_num=:refid");
        $sql->execute(array(
            'ref_desc'=>isset($_POST['ref_desc']) ? $_POST['ref_desc'] : null,
            'refid'=>$_POST['refid']
            )
        );

        echo 1;
    }elseif (isset($_POST['del'])) {
        $ref_num = $_POST['usr'];
        //partner
        $del = $handler->prepare("DELETE FROM referral WHERE ref_num=?");
        $del->execute(array($ref_num));   
    

    }else{
        $result = "";
		$sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname,referral.ref_num,referral.ref_desc, referral.ref_indate FROM patient
			INNER JOIN referral ON patient.pat_num = referral.pat_num ORDER BY referral.ref_indate DESC");

		while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
			if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
			$dateCre = date_create($row->ref_indate);
			$date = date_format($dateCre, 'M. d, Y | h:i a');

			 $result[] = array(
                'ref_num' => $row->ref_num,
                'pat_num' => $row->pat_num,
                'desc' => $row->ref_desc, 
				'fullname' => $fullname,
				'indate' => $date
			);
		}
		
		echo json_encode($result);
    }
?>