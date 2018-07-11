<?php
	require_once('handler.php');

	if(isset($_POST['get_all_patient'])){
		$compcode = "PAT";

		$sql = $handler->query("SELECT pat_num FROM patient ORDER BY pat_indate DESC");

		if ($sql->rowCount()) {
			$r = $sql->fetch(PDO::FETCH_OBJ);
			$cus_con = substr($r->pat_num, 4);
			$convert = $cus_con + 1;
		}else{
			$convert = 1;
		}

		$pat_num =  $compcode.str_pad($convert, 4, "0", STR_PAD_LEFT);
		echo $pat_num;

	}elseif (isset($_POST['get_patinfo'])) {
		$id = $_POST['get_patinfo'];

		$sql = $handler->prepare("SELECT 
		patient.pat_num, 
		patient.pat_fname, 
		patient.pat_mname, 
		patient.pat_lname,
		patient.pat_nname, 
		patient.pat_indate, 
		patient.pat_bday, 
		patient.pat_email, 
		patient.pat_contact, 
		patient.pat_occu, 
		patient.pat_socstat,
		patient.pat_add1,
		patient.pat_add2, 
		patient_records.pr_wei, 
		patient_records.pr_hei, 
		patient_records.pr_bmi,
		patient_records.pr_bpsys,
		patient_records.pr_bpdia, 
		patient_records.pr_cc, 
		patient_records.pr_lm, 
		patient_records.pr_pm, 
		partners.par_fullname,
		partners.par_parbday,
		partners.par_parwei,
		partners.par_parhei,
		partners.par_noc,
		partners.par_paroccu,
		partners.par_eversmoke,
		partners.par_cursmoke,
		partners.par_stiperday, 
		partners.par_agesta,
		partners.par_stiperdaybef,
		partners.par_agestop,
		partners.par_everdra,
		partners.par_curdri,
		partners.par_morethan,
		partners.par_numdrink,
		partners.par_agestodri,
		partners.par_drugs,
		siemen.sie_color,
		siemen.sie_volume,
		siemen.sie_ph,
		siemen.sie_viscosity,
		siemen.sie_liquetime,
		siemen.sie_motility,
		siemen.sie_grading,
		siemen.sie_morphology,
		siemen.sie_spercnt,
		siemen.sie_puscell,
		siemen.sie_redcell,
		siemen.sie_bacteria,
		siemen.sie_daysabs,
		siemen.sie_wss
		FROM patient INNER JOIN patient_records ON patient.pat_num = patient_records.pat_num
		LEFT JOIN partners ON patient.pat_num = partners.pat_num
		LEFT JOIN siemen on patient.pat_num= siemen.pat_num
		WHERE patient.pat_num = ? ORDER BY patient.pat_indate DESC");

		$sql->execute(array($id));

		$row = $sql->fetch(PDO::FETCH_OBJ);

		$result[] = array(
			'pat_num' => $row->pat_num,
			'lname' => $row->pat_lname, 
			'fname' => $row->pat_fname,
			'mname' => $row->pat_mname,
			'nname' => $row->pat_nname,
			'bday' => $row->pat_bday,
			'email' => $row->pat_email,
			'occu' => $row->pat_occu,
			'socstat' => $row->pat_socstat,
			'contact' => $row->pat_contact,
			'addphil' => $row->pat_add1,
			'addabr' => $row->pat_add2,
			'wei' => $row->pr_wei,
			'hei' => $row->pr_hei,
			'bmi' => $row->pr_bmi,
			'sys' => $row->pr_bpsys,
			'dia' => $row->pr_bpdia,
			'chicomp' => $row->pr_cc,
			'lm' => $row->pr_lm,
			'pm' => $row->pr_pm,
			'fullname' =>$row->par_fullname,
			'parbday' =>$row->par_parbday,
			'parwei' =>$row->par_parwei,
			'parhei' =>$row->par_parhei,
			'noc' =>$row->par_noc,
			'paroccu' =>$row->par_paroccu,
			'eversmoke' =>$row->par_eversmoke,
			'cursmoke' =>$row->par_cursmoke,
			'stiperday' =>$row->par_stiperday,
			'agesta' =>$row->par_agesta,
			'stiperdaybef' =>$row->par_stiperdaybef,
			'agestop' =>$row->par_agestop,
			'everdra' =>$row->par_everdra,
			'curdri' =>$row->par_curdri,
			'morethan' =>$row->par_morethan,
			'numdrink' =>$row->par_numdrink,
			'agestodri' =>$row->par_agestodri,
			'drugs' =>$row->par_drugs,
			'color' => $row->sie_color,
			'volume' => $row->sie_volume,
			'ph' => $row->sie_ph,
			'viscosity' => $row->sie_viscosity,
			'liquetime' => $row->sie_liquetime,
			'motility' => $row->sie_motility,
			'grading' => $row->sie_grading,
			'morphology' => $row->sie_morphology,
			'spercnt' => $row->sie_spercnt,
			'puscell' => $row->sie_puscell,
			'redcell' => $row->sie_redcell,
			'bacteria' => $row->sie_bacteria,
			'daysabs' => $row->sie_daysabs,
			'wss' => $row->sie_wss

		);

		echo json_encode($result);

	}elseif (isset($_POST['pat-num'])) {
		$pat_num = $_POST['pat-num'];
		$lname = $_POST['lname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$nname = $_POST['nname'];
		$bday = $_POST['bday'];
		$email = $_POST['email'];
		$occu = $_POST['occu'];
		$socstat = $_POST['socstat'];
		$contact = $_POST['contact'];
		$addphi = $_POST['addphi'];
		$addabr = $_POST['addabr'];

		//record data
		$wei = $_POST['wei'];
		$hei = $_POST['hei'];
		$bmi = $_POST['bmi'];
		$bpsys = $_POST['sys'];
		$bpdia = $_POST['dia'];
		$complaint = $_POST['complaint'];
		$lmp = $_POST['lmp'];
		$pmp = $_POST['pmp'];

	
		$sqlCheck = $handler->prepare("SELECT pat_email, pat_contact FROM patient WHERE pat_email= ? OR pat_contact= ?");
		$sqlCheck->execute(array($email,$contact));

		if ($sqlCheck->rowCount()) {
			echo 0;
		}else{
			$tz  = new DateTimeZone('Asia/Taipei');
			$age = DateTime::createFromFormat('m/d/Y', $bday , $tz)
		     ->diff(new DateTime('now', $tz))
		     ->y;

		    if ($age<1) {
		    	echo 2;
		    }else{
				//patient
		    	$sql = $handler->prepare("INSERT INTO
					patient(
					`pat_num`,
					`pat_lname`,
					`pat_fname`,
					`pat_mname`,
					`pat_nname`,
					`pat_bday`,
					`pat_email`,
					`pat_occu`,
					`pat_socstat`,
					`pat_contact`,
					`pat_add1`,
					`pat_add2`,
					`pat_indate`
					) 
					VALUES(
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					now())
					");

				$sql->execute(array(
					$pat_num,
					$lname,
					$fname,
					$mname,
					$nname,
					$bday,
					$email,
					$occu,
					$socstat,
					$contact,
					$addphi,
					$addabr
				));
				//records
				$sqlRec = $handler->prepare("INSERT INTO patient_records(
					`pat_num`,
					`pr_wei`,
					`pr_hei`,
					`pr_bmi`,
					`pr_bpsys`,
					`pr_bpdia`,
					`pr_cc`,
					`pr_lm`,
					`pr_pm`,
					`pr_indate`
					) VALUES(
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					now()
				)");

				$sqlRec->execute(array(
					$pat_num,
					$wei,
					$hei,
					$bmi,
					$bpsys,
					$bpdia,
					$complaint,
					$lmp,
					$pmp
				));

				//partner
				$sql = $handler->prepare("INSERT INTO partners(
						`pat_num`,
						`par_fullname`,
						`par_parbday`,
						`par_parwei`,
						`par_parhei`,
						`par_noc`,
						`par_paroccu`,
						`par_eversmoke`,
						`par_cursmoke`,
						`par_stiperday`,
						`par_agesta`,
						`par_stiperdaybef`,
						`par_agestop`,
						`par_everdra`,
						`par_curdri`,
						`par_morethan`,
						`par_numdrink`,
						`par_agestodri`,
						`par_drugs`
						)

						VALUES(
							:pat_num,
							:fullname,
							:parbday,
							:parwei,
							:parhei,
							:noc,
							:paroccu,
							:eversmoke,
							:cursmoke,
							:stiperday,
							:agesta,
							:stiperdaybef,
							:agestop,
							:everdra,
							:curdri,
							:morethan,
							:numdrink,
							:agestodri,
							:drugs

						)
					");
				
				$sql->execute(array(
					'pat_num' => isset($_POST['pat-num']) ? $_POST['pat-num'] : null,
					'fullname' => isset($_POST['fullname']) ? $_POST['fullname'] : null,
					'parbday' => isset($_POST['parbday']) ? $_POST['parbday'] : null,
					'parwei' => isset($_POST['parwei']) ? $_POST['parwei'] : null,
					'parhei' => isset($_POST['parhei']) ? $_POST['parhei'] : null,
					'noc' => isset($_POST['noc']) ? $_POST['noc'] : null,
					'paroccu' => isset($_POST['paroccu']) ? $_POST['paroccu'] : null,
					'eversmoke' => isset($_POST['eversmoke']) ? $_POST['eversmoke'] : null,
					'cursmoke' => isset($_POST['cursmoke']) ? $_POST['cursmoke'] : null,
					'stiperday' => isset($_POST['stiperday']) ? $_POST['stiperday'] : null,
					'agesta' => isset($_POST['agesta']) ? $_POST['agesta'] : null,
					'stiperdaybef' => isset($_POST['stiperdaybef']) ? $_POST['stiperdaybef'] : null,
					'agestop' => isset($_POST['agestop']) ? $_POST['agestop'] : null,
					'everdra' => isset($_POST['everdra']) ? $_POST['everdra'] : null,
					'curdri' => isset($_POST['curdri']) ? $_POST['curdri'] : null,
					'morethan' => isset($_POST['morethan']) ? $_POST['morethan'] : null,
					'numdrink' => isset($_POST['numdrink']) ? $_POST['numdrink'] : null,
					'agestodri' => isset($_POST['agestodri']) ? $_POST['agestodri'] : null,
					'drugs' => isset($_POST['drugs']) ? $_POST['drugs'] : null
					)
				);

				//siemen
				$sql = $handler->prepare("INSERT INTO siemen(
					`pat_num`,
					`sie_color`,
					`sie_volume`,
					`sie_ph`,
					`sie_viscosity`,
					`sie_liquetime`,
					`sie_motility`,
					`sie_grading`,
					`sie_morphology`,
					`sie_spercnt`,
					`sie_puscell`,
					`sie_redcell`,
					`sie_bacteria`,
					`sie_daysabs`,
					`sie_wss`
				)
					VALUES(
						:pat_num,
						:color,
						:volume,
						:ph,
						:viscosity,
						:liquetime,
						:motility,
						:grading,
						:morphology,
						:spercnt,
						:puscell,
						:redcell,
						:bacteria,
						:daysabs,
						:wss
					)
				");
				

				$sql->execute(array(
					'pat_num' => isset($_POST['pat-num']) ? $_POST['pat-num'] : null,
					'color' => isset($_POST['color']) ? $_POST['color'] : null,
					'volume' => isset($_POST['volume']) ? $_POST['volume'] : null,
					'ph' => isset($_POST['ph']) ? $_POST['ph'] : null,
					'viscosity' => isset($_POST['viscosity']) ? $_POST['viscosity'] : null,
					'liquetime' => isset($_POST['liquetime']) ? $_POST['liquetime'] : null,
					'motility' => isset($_POST['motility']) ? $_POST['motility'] : null,
					'grading' => isset($_POST['grading']) ? $_POST['grading'] : null,
					'morphology' => isset($_POST['morphology']) ? $_POST['morphology'] : null,
					'spercnt' => isset($_POST['spercnt']) ? $_POST['spercnt'] : null,
					'puscell' => isset($_POST['puscell']) ? $_POST['puscell'] : null,
					'redcell' => isset($_POST['redcell']) ? $_POST['redcell'] : null,
					'bacteria' => isset($_POST['bacteria']) ? $_POST['bacteria'] : null,
					'daysabs' => isset($_POST['daysabs']) ? $_POST['daysabs'] : null,
					'wss' => isset($_POST['wss']) ? $_POST['wss'] : null
					)
			)	;

				echo 1;
		    }

		}

	}elseif (isset($_POST['pat-num-edit'])) {

		$pat_num = $_POST['pat-num-edit'];
		$lname = $_POST['lname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$nname = $_POST['nname'];
		$bday = $_POST['bday'];
		$email = $_POST['email'];
		$occu = $_POST['occu'];
		$socstat = $_POST['socstat'];
		$contact = $_POST['contact'];
		$addphi = $_POST['addphi'];
		$addabr = $_POST['addabr'];

		//record data
		$wei = $_POST['wei'];
		$hei = $_POST['hei'];
		$bmi = $_POST['bmi'];
		$bpsys = $_POST['sys'];
		$bpdia = $_POST['dia'];
		$complaint = $_POST['complaint'];
		$lmp = $_POST['lmp'];
		$pmp = $_POST['pmp'];

		$sqlCheck = $handler->prepare("SELECT pat_email, pat_contact FROM patient WHERE (pat_email= ? OR pat_contact= ?) AND pat_num!=?");
		$sqlCheck->execute(array($email,$contact,$pat_num));

		if ($sqlCheck->rowCount()) {
			echo 1;
		}else{
			
			$sql = $handler->prepare("UPDATE patient SET 
				pat_lname=?,
				pat_fname=?,
				pat_mname=?,
				pat_nname=?,
				pat_bday=?,
				pat_email=?,
				pat_occu=?,
				pat_socstat=?,
				pat_contact=?,
				pat_add1=?,
				pat_add2=?
				WHERE pat_num=?
			");

			$sql->execute(array(
				$lname,
				$fname,
				$mname,
				$nname,
				$bday,
				$email,
				$occu,
				$socstat,
				$contact,
				$addphi,
				$addabr,
				$pat_num
			));

			//record data
			$query = $handler->prepare("UPDATE patient_records SET
				pr_wei=?,
				pr_hei=?,
				pr_bmi=?,
				pr_bpsys=?,
				pr_bpdia=?,
				pr_cc=?,
				pr_lm=?,
				pr_pm=?
				WHERE pat_num=?
			");

			$query->execute(array(
				$wei,
				$hei,
				$bmi,
				$bpsys,
				$bpdia,
				$complaint,
				$lmp,
				$pmp,
				$pat_num
			));

			//partner
			$sql = $handler->prepare("UPDATE partners SET
					par_fullname=:fullname,
					par_parbday=:parbday,
					par_parwei=:parwei,
					par_parhei=:parhei,
					par_noc=:noc,
					par_paroccu=:paroccu,
					par_eversmoke=:eversmoke,
					par_cursmoke=:cursmoke,
					par_stiperday=:stiperday,
					par_agesta=:agesta,
					par_stiperdaybef=:stiperdaybef,
					par_agestop=:agestop,
					par_everdra=:everdra,
					par_curdri=:curdri,
					par_morethan=:morethan,
					par_numdrink=:numdrink,
					par_agestodri=:agestodri,
					par_drugs=:drugs
					WHERE pat_num = :pat_num
			");

			$sql->execute(array(
					'pat_num' => isset($_POST['pat-num-edit']) ? $_POST['pat-num-edit'] : null,
					'fullname' => isset($_POST['fullname']) ? $_POST['fullname'] : null,
					'parbday' => isset($_POST['parbday']) ? $_POST['parbday'] : null,
					'parwei' => isset($_POST['parwei']) ? $_POST['parwei'] : null,
					'parhei' => isset($_POST['parhei']) ? $_POST['parhei'] : null,
					'noc' => isset($_POST['noc']) ? $_POST['noc'] : null,
					'paroccu' => isset($_POST['paroccu']) ? $_POST['paroccu'] : null,
					'eversmoke' => isset($_POST['eversmoke']) ? $_POST['eversmoke'] : null,
					'cursmoke' => isset($_POST['cursmoke']) ? $_POST['cursmoke'] : null,
					'stiperday' => isset($_POST['stiperday']) ? $_POST['stiperday'] : null,
					'agesta' => isset($_POST['agesta']) ? $_POST['agesta'] : null,
					'stiperdaybef' => isset($_POST['stiperdaybef']) ? $_POST['stiperdaybef'] : null,
					'agestop' => isset($_POST['agestop']) ? $_POST['agestop'] : null,
					'everdra' => isset($_POST['everdra']) ? $_POST['everdra'] : null,
					'curdri' => isset($_POST['curdri']) ? $_POST['curdri'] : null,
					'morethan' => isset($_POST['morethan']) ? $_POST['morethan'] : null,
					'numdrink' => isset($_POST['numdrink']) ? $_POST['numdrink'] : null,
					'agestodri' => isset($_POST['agestodri']) ? $_POST['agestodri'] : null,
					'drugs' => isset($_POST['drugs']) ? $_POST['drugs'] : null
				)
			);

			//siemen
			$sql = $handler->prepare("UPDATE siemen SET 
					sie_color=:color,
					sie_volume=:volume,
					sie_ph=:ph,
					sie_viscosity=:viscosity,
					sie_liquetime=:liquetime,
					sie_motility=:motility,
					sie_grading=:grading,
					sie_morphology=:morphology,
					sie_spercnt=:spercnt,
					sie_puscell=:puscell,
					sie_redcell=:redcell,
					sie_bacteria=:bacteria,
					sie_daysabs=:daysabs,
					sie_wss=:wss
					WHERE pat_num = :pat_num"
			);

			$sql->execute(array(
				'color' => isset($_POST['color']) ? $_POST['color'] : null,
				'volume' => isset($_POST['volume']) ? $_POST['volume'] : null,
				'ph' => isset($_POST['ph']) ? $_POST['ph'] : null,
				'viscosity' => isset($_POST['viscosity']) ? $_POST['viscosity'] : null,
				'liquetime' => isset($_POST['liquetime']) ? $_POST['liquetime'] : null,
				'motility' => isset($_POST['motility']) ? $_POST['motility'] : null,
				'grading' => isset($_POST['grading']) ? $_POST['grading'] : null,
				'morphology' => isset($_POST['morphology']) ? $_POST['morphology'] : null,
				'spercnt' => isset($_POST['spercnt']) ? $_POST['spercnt'] : null,
				'puscell' => isset($_POST['puscell']) ? $_POST['puscell'] : null,
				'redcell' => isset($_POST['redcell']) ? $_POST['redcell'] : null,
				'bacteria' => isset($_POST['bacteria']) ? $_POST['bacteria'] : null,
				'daysabs' => isset($_POST['daysabs']) ? $_POST['daysabs'] : null,
				'wss' => isset($_POST['wss']) ? $_POST['wss'] : null,
				'pat_num' => isset($_POST['pat-num-edit']) ? $_POST['pat-num-edit'] : null
			));


		}

	}else if(isset($_POST['info']) && isset($_POST['patient'])){
		$tz  = new DateTimeZone('Asia/Taipei');

		$patient = $_POST['patient'];

		$sql = $handler->prepare("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname,patient.pat_nname, patient.pat_indate, patient.pat_bday, patient.pat_email, patient.pat_contact, patient.pat_occu, patient.pat_socstat, patient.pat_add1,patient.pat_add2, patient_records.pr_wei, patient_records.pr_hei, patient_records.pr_bmi, patient_records.pr_bpsys, patient_records.pr_bpdia, patient_records.pr_cc FROM patient INNER JOIN patient_records ON patient.pat_num = patient_records.pat_num WHERE patient.pat_num = ? ORDER BY patient.pat_indate DESC");

		$sql->execute(array($patient));

		while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
			if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
			$dateCre = date_create($row->pat_indate);
			$date = date_format($dateCre, 'M. d, Y | h:i:s a');
			$age = DateTime::createFromFormat('m/d/Y', $row->pat_bday , $tz)
		     ->diff(new DateTime('now', $tz))
		     ->y;
		    $bdayCre = date_create($row->pat_bday);
		    $bday = date_format($bdayCre, 'M. d, Y');

		     $result[] = array(
				'pat_num' => $row->pat_num, 
				'fullname' => $fullname,
				'nname' => $row->pat_nname,
				'bday' => $bday,
				'age' => $age,
				'email' => $row->pat_email,
				'occu' => $row->pat_occu,
				'socstat' => $row->pat_socstat,
				'contact' => $row->pat_contact,
				'addphil' => $row->pat_add1,
				'addabr' => $row->pat_add2,
				'wei' => $row->pr_wei,
				'hei' => $row->pr_hei,
				'bmi' => $row->pr_bmi,
				'sys' => $row->pr_bpsys,
				'dia' => $row->pr_bpdia,
				'chicomp' => $row->pr_cc,
				'indate' => $date
			);
		    
		}

		echo json_encode($result);
	}else if(isset($_POST['partners']) && isset($_POST['partner'])){
		$pat_num = $_POST['partner'];

		$sql = $handler->prepare("SELECT * FROM partners WHERE pat_num=:patnum");
		$sql->execute(array('patnum'=>$pat_num));

		while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
			$eversmoke = $row->par_eversmoke;
			$cursmoke = $row->par_cursmoke;
			$everdra = $row->par_everdra;
			$curdri = $row->par_curdri;
			$morethan = $row->par_morethan;

			if($eversmoke=="on"){
				$eversmoke = "Yes";
			}else{
				$eversmoke = "No";
			}

			if($cursmoke=="on"){
				$cursmoke = "Yes";
			}else{
				$cursmoke = "No";
			}

			if($everdra=="on"){
				$everdra = "Yes";
			}else{
				$everdra = "No";
			}
			
			if($curdri=="on"){
				$curdri = "Yes";
			}else{
				$curdri = "No";
			}

			if($morethan=="on"){
				$morethan = "Yes";
			}else{
				$morethan = "No";
			}


			$result[] = array(
				'fullname' => $row->par_fullname,
				'parbday' => $row->par_parbday,
				'parwei' => $row->par_parwei,  
				'parhei' => $row->par_parhei,
				'noc' => $row->par_noc,
				'paroccu' => $row->par_paroccu,
				'eversmoke' => $eversmoke,
				'cursmoke' => $cursmoke,
				'stiperday' => $row->par_stiperday,
				'agesta' => $row->par_agesta,
				'stiperdaybef' => $row->par_stiperdaybef,
				'agestop' => $row->par_agestop,
				'everdra' => $everdra,
				'curdri' => $curdri,
				'morethan' => $morethan,
				'numdrink' => $row->par_numdrink,
				'agestodri' => $row->par_agestodri,
				'drugs' => $row->par_drugs
			);
		}

		echo json_encode($result);
	}else if(isset($_POST['siemen']) && isset($_POST['siemen_info'])){
		$pat_num = $_POST['siemen_info'];

		$sql = $handler->prepare("SELECT * FROM siemen WHERE pat_num=:patnum");
		$sql->execute(array('patnum'=>$pat_num));

		while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
			$result[] = array(
				'color' => $row->sie_color,
				'volume' => $row->sie_volume,
				'ph' => $row->sie_ph,
				'viscosity' => $row->sie_viscosity,
				'liquetime' => $row->sie_liquetime, 
				'motility' => $row->sie_motility,
				'grading' => $row->sie_grading,
				'morphology' => $row->sie_morphology,
				'spercnt' => $row->sie_spercnt,
				'puscell' => $row->sie_puscell,
				'redcell' => $row->sie_redcell,
				'bacteria' => $row->sie_bacteria,
				'daysabs' => $row->sie_daysabs,
				'wss' => $row->sie_wss
			);
		}

		echo json_encode($result);
	}elseif(isset($_POST['del'])){
		$pat_num = $_POST['pat-num-del'];

		//delete from patient table
		$sql = $handler->prepare("DELETE FROM patient WHERE pat_num=?");
		$sql->execute(array($pat_num));

		//delete from patient info
		$del = $handler->prepare("DELETE FROM patient_records WHERE pat_num=?");
		$del->execute(array($pat_num));

		//delete from ultrasound
		$del = $handler->prepare("DELETE FROM ultrasound WHERE pat_num=?");
		$del->execute(array($pat_num));

		//delete from embryology
		$del = $handler->prepare("DELETE FROM embryology WHERE pat_num=?");
		$del->execute(array($pat_num));

		//partner
		$del = $handler->prepare("DELETE FROM partners WHERE pat_num=?");
		$del->execute(array($pat_num));

		//siemen
		$del = $handler->prepare("DELETE FROM siemen WHERE pat_num=?");
		$del->execute(array($pat_num));

		//partner
		$del = $handler->prepare("DELETE FROM history WHERE pat_num=?");
		$del->execute(array($pat_num));
	}else{
		$result = "";
		$sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname, patient.pat_indate, 
		patient.pat_bday, patient.pat_email, patient.pat_contact, patient.pat_occu, patient.pat_socstat, patient.pat_add1, 
		patient_records.pr_wei, patient_records.pr_hei, patient_records.pr_bmi, patient_records.pr_cc 
		FROM patient INNER JOIN patient_records ON patient.pat_num = patient_records.pat_num ORDER BY patient.pat_indate DESC");

		while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
			if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
			$dateCre = date_create($row->pat_indate);
			$date = date_format($dateCre, 'M. d, Y | h:i a');

			 $result[] = array(
				'pat_num' => $row->pat_num, 
				'fullname' => $fullname,
				'weight' => $row->pr_wei,
				'height' => $row->pr_hei,
				'bmi' => $row->pr_bmi,
				'bday' => $row->pat_bday,
				'email' => $row->pat_email,
				'contact' => $row->pat_contact,
				'occu' => $row->pat_occu,
				'socstat' => $row->pat_socstat,
				'add1' => $row->pat_add1,
				'indate' => $date
			);
		}
		
		echo json_encode($result);
	}
?>