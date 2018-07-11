<?php
    require_once('handler.php');

    if (isset($_POST['patname'])) {

        $sql = $handler->prepare("INSERT INTO assessment(`pat_num`,`ass_desc`,`ass_indate`) VALUES(:pat_num,:assess,now())");
        $sql->execute(array(
                'pat_num' => isset($_POST['patname']) ? $_POST['patname'] : null,
                'assess' => isset($_POST['assess']) ? $_POST['assess'] : null
            )
        );

        echo 1;
    }elseif(isset($_POST['get_usr'])){
        $ass_num = $_POST['get_usr'];
 
        $sql = $handler->prepare("SELECT assessment.ass_num, assessment.pat_num, assessment.ass_desc, assessment.ass_desc, patient.pat_fname, patient.pat_mname, patient.pat_lname
         FROM assessment INNER JOIN patient ON assessment.pat_num = patient.pat_num WHERE ass_num = ?");
        $sql->execute(array($ass_num));

        while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
            if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
            $result[] = array(
                'ass_num' => $row->ass_num,
                'fullname' => $fullname,
                'desc' => $row->ass_desc
            );
        }

        echo json_encode($result);
    }elseif (isset($_POST['assid'])) {
        $sql = $handler->prepare("UPDATE assessment SET ass_desc=:assess WHERE ass_num=:ass_id");
        $sql->execute(array(
            'assess'=>isset($_POST['assess']) ? $_POST['assess'] : null,
            'ass_id'=>$_POST['assid']
            )
        );

        echo 1;
    }elseif (isset($_POST['recass'])) {
		$sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname,assessment.ass_num, assessment.ass_indate 
        FROM patient RIGHT JOIN assessment ON patient.pat_num = assessment.pat_num ORDER BY assessment.ass_indate DESC LIMIT 5");

		while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
			 if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
            }

            $fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
            $dateCre = date_create($row->ass_indate);

			$date = date_format($dateCre, 'M. d, Y');

            $result[] = array(
            	'pat_num' => $row->ass_num,
            	'fullname' => $fullname,
            	'img' => substr(ucfirst($row->pat_fname), 0, 1)."".substr(ucfirst($row->pat_lname), 0, 1),
            	'indate' => $date
            );
		}

		echo json_encode($result);

    }elseif (isset($_POST['del'])) {
        $ass_num = $_POST['usr'];
        //partner
		$del = $handler->prepare("DELETE FROM assessment WHERE ass_num=?");
		$del->execute(array($ass_num));   
    }else{
		$result = "";
		$sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname,assessment.ass_num,assessment.ass_desc, assessment.ass_indate FROM patient
			INNER JOIN assessment ON patient.pat_num = assessment.pat_num ORDER BY assessment.ass_indate DESC");

		while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
			if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
			$dateCre = date_create($row->ass_indate);
			$date = date_format($dateCre, 'M. d, Y | h:i a');

			 $result[] = array(
                'ass_num' => $row->ass_num,
                'pat_num' => $row->pat_num,
                'desc' => $row->ass_desc, 
				'fullname' => $fullname,
				'indate' => $date
			);
		}
		
		echo json_encode($result);
	}
?>