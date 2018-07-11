<?php

	require_once('handler.php');



	if(isset($_GET['term'])) {

		$term = $_GET['term'];

		$sql = $handler->prepare("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname 
        FROM patient left JOIN history ON patient.pat_num = history.pat_num WHERE history.pat_num IS NULL AND patient.pat_fname LIKE '%".$term."%'");

		$sql->execute();

	}else{

		$sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname 
        FROM patient left JOIN history ON patient.pat_num = history.pat_num WHERE history.pat_num IS NULL ORDER BY pat_indate DESC");

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