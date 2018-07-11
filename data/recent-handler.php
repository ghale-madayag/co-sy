<?php
    require_once('handler.php');

    if(isset($_POST['recusr'])){
        $sql = $handler->prepare("SELECT usr_id, pat_fname, pat_mname, pat_lname, usr_indate  FROM patient RIGHT JOIN ultrasound ON patient.pat_num = ultrasound.pat_num ORDER BY usr_indate DESC LIMIT 10");
		$sql->execute();

		while ($r = $sql->fetch(PDO::FETCH_OBJ)) {
			if ($r->pat_mname!="") {
				$lname = ucfirst($r->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($r->pat_fname)." ".$lname." ".ucfirst($r->pat_lname);
			$dateCre = date_create($r->usr_indate);
			$date = date_format($dateCre, 'M. d, Y');

			$result[] = array(
				'num' => $r->usr_id,
				'fullname' => $fullname,
				'img' => substr(ucfirst($r->pat_fname), 0, 1)."".substr(ucfirst($r->pat_lname), 0, 1),
				'date' => $date
            );
        }
        
        echo json_encode($result);
    }elseif(isset($_POST['recesr'])){
        $sql = $handler->prepare("SELECT emb_id, pat_fname, pat_mname, pat_lname, emb_esdate  FROM patient RIGHT JOIN embryology ON patient.pat_num = embryology.pat_num ORDER BY emb_esdate DESC LIMIT 10");
		$sql->execute();

		while ($r = $sql->fetch(PDO::FETCH_OBJ)) {
			if ($r->pat_mname!="") {
				$lname = ucfirst($r->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($r->pat_fname)." ".$lname." ".ucfirst($r->pat_lname);
			$dateCre = date_create($r->emb_esdate);
			$date = date_format($dateCre, 'M. d, Y');

			$result[] = array(
				'num' => $r->emb_id,
				'fullname' => $fullname,
				'img' => substr(ucfirst($r->pat_fname), 0, 1)."".substr(ucfirst($r->pat_lname), 0, 1),
				'date' => $date
            );
        }
        
        echo json_encode($result);
    }elseif (isset($_POST['hisUsr'])) {
		$result = null;
		$pat_num = $_POST['hisUsr'];

		$sql = $handler->prepare("SELECT usr_id, usr_indate  FROM patient RIGHT JOIN ultrasound ON patient.pat_num = ultrasound.pat_num 
				WHERE patient.pat_num = ? ORDER BY usr_indate");
		$sql->execute(array($pat_num));

		while ($r = $sql->fetch(PDO::FETCH_OBJ)) {

			$dateCre = date_create($r->usr_indate);
			$date = date_format($dateCre, 'M. d, Y');
			$img = date_format($dateCre, 'M');

			$result[] = array(
				'num' => $r->usr_id,
				'date' => $date,
				'img' => $img
            );
        }
        
        echo json_encode($result);
	}elseif (isset($_POST['hisEsr'])) {
		$result = null;
		$pat_num = $_POST['hisEsr'];

		$sql = $handler->prepare("SELECT emb_id, emb_esdate  FROM patient RIGHT JOIN embryology ON patient.pat_num = embryology.pat_num 
				WHERE patient.pat_num = ? ORDER BY emb_esdate");
		$sql->execute(array($pat_num));

		while ($r = $sql->fetch(PDO::FETCH_OBJ)) {

			$dateCre = date_create($r->emb_esdate);
			$date = date_format($dateCre, 'M. d, Y');
			$img = date_format($dateCre, 'M');

			$result[] = array(
				'num' => $r->emb_id,
				'date' => $date,
				'img' => $img
            );
        }
        
        echo json_encode($result);
	}
?>