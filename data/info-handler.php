<?php
	require_once('handler.php');

	if (isset($_POST['infoboxPat'])!="") {

		$sql = $handler->query("SELECT COUNT(patient.pat_num) as total FROM patient");
		$r = $sql->fetch(PDO::FETCH_OBJ);

		echo $r->total;
	}elseif (isset($_POST['infoboxUsr'])) {
		$sql = $handler->query("SELECT COUNT(ultrasound.usr_id) as totalUsr FROM ultrasound");
		$r = $sql->fetch(PDO::FETCH_OBJ);

		echo $r->totalUsr;
	}elseif (isset($_POST['infoboxEsr'])) {
		$sql = $handler->query("SELECT COUNT(embryology.emb_id) as totalEsr FROM embryology");
		$r = $sql->fetch(PDO::FETCH_OBJ);

		echo $r->totalEsr;
	}elseif (isset($_POST['infoboxUser'])) {
		$sql = $handler->query("SELECT COUNT(user.user_id) as totalUser FROM user");
		$r = $sql->fetch(PDO::FETCH_OBJ);

		echo $r->totalUser;
	}elseif (isset($_POST['infoboxRec'])) {
		$sql = $handler->prepare("SELECT pat_num, pat_fname, pat_mname, pat_lname, pat_indate FROM patient ORDER BY pat_indate DESC LIMIT 5");
		$sql->execute();

		while ($r = $sql->fetch(PDO::FETCH_OBJ)) {
			if ($r->pat_mname!="") {
				$lname = ucfirst($r->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($r->pat_fname)." ".$lname." ".ucfirst($r->pat_lname);
			$dateCre = date_create($r->pat_indate);
			$date = date_format($dateCre, 'M. d, Y | h:i:s a');

			$result[] = array(
				'num' => $r->pat_num,
				'fullname' => $fullname,
				'img' => substr(ucfirst($r->pat_fname), 0, 1)."".substr(ucfirst($r->pat_lname), 0, 1),
				'date' => $date
			);
		}

		echo json_encode($result);

	}elseif (isset($_POST['graph'])) {
		$date = date("Y");
		$sql = $handler->prepare("SELECT monthname(pat_indate) AS Closing_Month, COUNT(pat_num) AS TotalCount FROM patient WHERE year(pat_indate) = ? GROUP BY month(pat_indate)");
		$sql->execute(array($date));
		$result = NULL;
		
		if ($sql->rowCount()) {
			
			while ($r = $sql->fetch(PDO::FETCH_OBJ)) {
				$result[] = array(
					'month' => $r->Closing_Month,
					'total' => $r->TotalCount 
				);
			}
		}else{
			$result[] = array(
				'month' => 0,
				'total' => 0 
			);
		}
		

		echo json_encode($result);
	}elseif (isset($_POST['getGraTit'])) {
		$date = date("Y");
		//start month
		$start = $handler->prepare("SELECT monthname(pat_indate) AS Start_Month FROM patient WHERE year(pat_indate) = ? GROUP BY month(pat_indate) ORDER BY pat_indate ASC LIMIT 1");
		$start->execute(array($date));

		if ($start->rowCount()) {
			//end month
			$end = $handler->prepare("SELECT monthname(pat_indate) AS Closing_Month FROM patient WHERE year(pat_indate) = ? GROUP BY month(pat_indate) ORDER BY pat_indate DESC LIMIT 1");
			$end->execute(array($date));
			
			$rStr = $start->fetch(PDO::FETCH_OBJ);
			$rEnd = $end->fetch(PDO::FETCH_OBJ);

			$startDate = $rStr->Start_Month;
			$endDate = $rEnd->Closing_Month;

			echo $startDate." - ".$endDate." | ".$date;
		}else{
			echo "No Patient";
		}

		
	}
?>