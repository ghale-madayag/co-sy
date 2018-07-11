<?php
	require_once('handler.php');

	if(isset($_GET['term'])) {
		$term = $_GET['term'];
		$sql = $handler->prepare("SELECT pat_num, pat_fname, pat_mname, pat_lname FROM patient WHERE pat_fname LIKE '%".$term."%'");
		$sql->execute();
	}else{
		$sql = $handler->query("SELECT pat_num, pat_fname, pat_mname, pat_lname FROM patient ORDER BY pat_indate DESC");
	}
	

	while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
		if ($row->pat_mname!="") {
			$lname = ucfirst($row->pat_mname).".";
		}else{
			$lname = "";
		}

		$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
		$result[] = array(
			'pat_num' => $row->pat_num ,
			'fullname' => $fullname 
		);
	}

	echo json_encode($result);
?>