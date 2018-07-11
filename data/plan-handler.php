<?php
    require_once("handler.php");


    if (isset($_POST['patname'])) {
        $sql = $handler->prepare("INSERT INTO plan(`pat_num`,`plan_desc`,`plan_indate`) VALUES(:patname,:plan_desc,now())");

        $sql->execute(array(
            'patname' => isset($_POST['patname']) ? $_POST['patname'] : null,
            'plan_desc' => isset($_POST['plan_desc']) ? $_POST['plan_desc'] : null)
        );
        echo 1;
    }elseif (isset($_POST['recplan'])) {
        $sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname,plan.plan_num, plan.plan_indate 
        FROM patient RIGHT JOIN plan ON patient.pat_num = plan.pat_num ORDER BY plan.plan_indate DESC LIMIT 5");

		while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
			 if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
            }

            $fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
            $dateCre = date_create($row->plan_indate);

			$date = date_format($dateCre, 'M. d, Y');

            $result[] = array(
            	'pat_num' => $row->plan_num,
            	'fullname' => $fullname,
            	'img' => substr(ucfirst($row->pat_fname), 0, 1)."".substr(ucfirst($row->pat_lname), 0, 1),
            	'indate' => $date
            );
		}

        echo json_encode($result);
    }elseif(isset($_POST['get_usr'])){
        $plannum = $_POST['get_usr'];
 
        $sql = $handler->prepare("SELECT plan.plan_num, plan.pat_num, plan.plan_desc, patient.pat_fname, patient.pat_mname, patient.pat_lname
         FROM plan INNER JOIN patient ON plan.pat_num = patient.pat_num WHERE plan_num = ?");
        $sql->execute(array($plannum));

        while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
            if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
            $result[] = array(
                'plan_num' => $row->plan_num,
                'fullname' => $fullname,
                'desc' => $row->plan_desc
            );
        }

        echo json_encode($result);
    }elseif (isset($_POST['planid'])) {
            $sql = $handler->prepare("UPDATE plan SET plan_desc=:plan_desc WHERE plan_num=:planid");
            $sql->execute(array(
                'plan_desc'=>isset($_POST['plan_desc']) ? $_POST['plan_desc'] : null,
                'planid'=>$_POST['planid']
                )
            );

            echo 1;
    }elseif (isset($_POST['del'])) {
        $ass_num = $_POST['usr'];
        //partner
        $del = $handler->prepare("DELETE FROM plan WHERE plan_num=?");
        $del->execute(array($ass_num));   
    
    }else{
        $result = "";
		$sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname,plan.plan_num,plan.plan_desc, plan.plan_indate FROM patient
			INNER JOIN plan ON patient.pat_num = plan.pat_num ORDER BY plan.plan_indate DESC");

		while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
			if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
			$dateCre = date_create($row->plan_indate);
			$date = date_format($dateCre, 'M. d, Y | h:i a');

			 $result[] = array(
                'plan_num' => $row->plan_num,
                'pat_num' => $row->pat_num,
                'desc' => $row->plan_desc, 
				'fullname' => $fullname,
				'indate' => $date
			);
		}
		
		echo json_encode($result);
    }
?>