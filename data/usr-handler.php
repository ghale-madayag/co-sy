<?php

    require_once('handler.php');



    if (isset($_POST['patname'])) {

        $patnum = $_POST['patname'];

        $sql = $handler->prepare("INSERT INTO ultrasound(

            `pat_num`,

            `usr_pus`,

            `usr_uterus`,

            `usr_size_1`,

            `usr_size_2`,

            `usr_size_3`,

            `usr_contour`,

            `usr_echopattern`,

            `usr_echorem`,

            `usr_endometrium`,

            `usr_endometrium_sel`,
            
            `usr_endometrium_rem`,

            `usr_cer1`,

            `usr_cer2`,

            `usr_cer_urm`,

            `usr_ro1`,

            `usr_ro2`,

            `usr_ro3`,

            `usr_ro_rem`,

            `usr_lo1`,

            `usr_lo2`,

            `usr_lo3`,

            `usr_lo_rem`,

            `usr_cdsf`,

            `usr_opm`,

            `usr_impre`,

            `usr_indate`

            ) VALUES(

                :pat_num, 

                :pus,

                :uterus,

                :size1,

                :size2,

                :size3,

                :contour,

                :echopattern,

                :echorem,

                :endometrium,

                :endometrium_sel,

                :endorem,

                :cer1,

                :cer2,

                :urm,

                :ro1,

                :ro2,

                :ro3,

                :rigrem,

                :lo1,

                :lo2,

                :lo3,

                :lefrem,

                :cdsf,

                :opm,

                :impre,

                :urdate

            )

        ");



        $sql->execute(array(

            'pat_num' => $patnum,

            'pus'=> isset($_POST['pus']) ? $_POST['pus'] : null,

            'uterus'=> isset($_POST['uterus']) ? $_POST['uterus'] : null,

            'size1'=> isset($_POST['size1']) ? $_POST['size1'] : null,

            'size2'=> isset($_POST['size2']) ? $_POST['size2'] : null,

            'size3'=> isset($_POST['size3']) ? $_POST['size3'] : null,

            'contour'=> isset($_POST['contour']) ? $_POST['contour'] : null,

            'echopattern'=> isset($_POST['echopattern']) ? $_POST['echopattern'] : null,

            'echorem'=> isset($_POST['echorem']) ? $_POST['echorem'] : null,

            'endometrium'=> isset($_POST['endometrium']) ? $_POST['endometrium'] : null,

            'endometrium_sel'=> isset($_POST['endometrium_sel']) ? $_POST['endometrium_sel'] : null,

            'endorem'=> isset($_POST['endorem']) ? $_POST['endorem'] : null,

            'cer1'=> isset($_POST['cer1']) ? $_POST['cer1'] : null,

            'cer2'=> isset($_POST['cer2']) ? $_POST['cer2'] : null,

            'urm'=> isset($_POST['urm']) ? $_POST['urm'] : null,

            'ro1'=> isset($_POST['ro1']) ? $_POST['ro1'] : null,

            'ro2'=> isset($_POST['ro2']) ? $_POST['ro2'] : null,

            'ro3'=> isset($_POST['ro3']) ? $_POST['ro3'] : null,

            'rigrem'=> isset($_POST['rigrem']) ? $_POST['rigrem'] : null,

            'lo1'=> isset($_POST['lo1']) ? $_POST['lo1'] : null,

            'lo2'=> isset($_POST['lo2']) ? $_POST['lo2'] : null,

            'lo3'=> isset($_POST['lo3']) ? $_POST['lo3'] : null,

            'lefrem'=> isset($_POST['lefrem']) ? $_POST['lefrem'] : null,

            'cdsf'=> isset($_POST['cdsf']) ? $_POST['cdsf'] : null,

            'opm'=> isset($_POST['opm']) ? $_POST['opm'] : null,

            'impre'=> isset($_POST['impre']) ? $_POST['impre'] : null,

            'urdate'=> isset($_POST['urdate']) ? $_POST['urdate'] : null

        ));



        echo 1;

    }elseif (isset($_POST['del'])) {

        $usrid = $_POST['usr'];



        $sql = $handler->prepare("DELETE FROM ultrasound WHERE usr_id = :usr");

        $sql->execute(array('usr'=>$usrid));

        

        echo 1;

        

    }elseif(isset($_POST['usrid'])){

        $usrid = $_POST['usrid'];



        $sql = $handler->prepare("UPDATE ultrasound SET

            usr_pus=:pus,

            usr_uterus=:uterus,

            usr_size_1=:size1,

            usr_size_2=:size2,

            usr_size_3=:size3,

            usr_contour=:contour,

            usr_echopattern=:echopattern,

            usr_echorem=:echorem,

            usr_endometrium=:endometrium,

            usr_endometrium_sel=:endometrium_sel,
            usr_endometrium_rem=:endorem,

            usr_cer1=:cer1,

            usr_cer2=:cer2,

            usr_cer_urm=:urm,

            usr_ro1=:ro1,

            usr_ro2=:ro2,

            usr_ro3=:ro3,
            usr_ro_rem=:rigrem,

            usr_lo1=:lo1,

            usr_lo2=:lo2,

            usr_lo3=:lo3,
            usr_lo_rem=:lefrem,

            usr_cdsf=:cdsf,

            usr_opm=:opm,

            usr_impre=:impre,

            usr_indate=:urdate

            WHERE usr_id = :usrid

        ");



        $sql->execute(array(

            'pus'=> isset($_POST['pus']) ? $_POST['pus'] : null,

            'uterus'=> isset($_POST['uterus']) ? $_POST['uterus'] : null,

            'size1'=> isset($_POST['size1']) ? $_POST['size1'] : null,

            'size2'=> isset($_POST['size2']) ? $_POST['size2'] : null,

            'size3'=> isset($_POST['size3']) ? $_POST['size3'] : null,

            'contour'=> isset($_POST['contour']) ? $_POST['contour'] : null,

            'echopattern'=> isset($_POST['echopattern']) ? $_POST['echopattern'] : null,

            'echorem'=> isset($_POST['echorem']) ? $_POST['echorem'] : null,

            'endometrium'=> isset($_POST['endometrium']) ? $_POST['endometrium'] : null,

            'endometrium_sel'=> isset($_POST['endometrium_sel']) ? $_POST['endometrium_sel'] : null,
            'endorem'=> isset($_POST['endorem']) ? $_POST['endorem'] : null,

            'cer1'=> isset($_POST['cer1']) ? $_POST['cer1'] : null,

            'cer2'=> isset($_POST['cer2']) ? $_POST['cer2'] : null,

            'urm'=> isset($_POST['urm']) ? $_POST['urm'] : null,

            'ro1'=> isset($_POST['ro1']) ? $_POST['ro1'] : null,

            'ro2'=> isset($_POST['ro2']) ? $_POST['ro2'] : null,

            'ro3'=> isset($_POST['ro3']) ? $_POST['ro3'] : null,
            'rigrem'=> isset($_POST['rigrem']) ? $_POST['rigrem'] : null,

            'lo1'=> isset($_POST['lo1']) ? $_POST['lo1'] : null,

            'lo2'=> isset($_POST['lo2']) ? $_POST['lo2'] : null,

            'lo3'=> isset($_POST['lo3']) ? $_POST['lo3'] : null,
            'lefrem'=> isset($_POST['lefrem']) ? $_POST['lefrem'] : null,

            'cdsf'=> isset($_POST['cdsf']) ? $_POST['cdsf'] : null,

            'opm'=> isset($_POST['opm']) ? $_POST['opm'] : null,

            'impre'=> isset($_POST['impre']) ? $_POST['impre'] : null,

            'urdate'=> isset($_POST['urdate']) ? $_POST['urdate'] : null,

            'usrid'=>  $usrid

        ));

        

        echo 1;

    }elseif(isset($_POST['get_usr'])){

        $usrid = $_POST['get_usr'];



        $result = "";

		$sql = $handler->prepare("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname, ultrasound.usr_id, ultrasound.usr_pus, 

        ultrasound.usr_uterus,ultrasound.usr_size_1,ultrasound.usr_size_2, ultrasound.usr_size_3, ultrasound.usr_contour, ultrasound.usr_echopattern,

        ultrasound.usr_echorem, ultrasound.usr_endometrium, ultrasound.usr_endometrium_sel, ultrasound.usr_endometrium_rem, ultrasound.usr_cer1, ultrasound.usr_cer2, ultrasound.usr_cer_urm,

        ultrasound.usr_ro1, ultrasound.usr_ro2, ultrasound.usr_ro3,ultrasound.usr_ro_rem, ultrasound.usr_lo1,ultrasound.usr_lo2,ultrasound.usr_lo3,ultrasound.usr_lo_rem, ultrasound.usr_cdsf,ultrasound.usr_opm,

        ultrasound.usr_impre, ultrasound.usr_indate FROM patient RIGHT JOIN ultrasound ON patient.pat_num = ultrasound.pat_num WHERE ultrasound.usr_id=?");



        $sql->execute(array($usrid));

        

        while ($row = $sql->fetch(PDO::FETCH_OBJ)) {

            if ($row->pat_mname!="") {

				$lname = ucfirst($row->pat_mname).".";

			}else{

				$lname = "";

            }



            $fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);

            $result[] = array(

                'usr_id' => $row->usr_id,

                'pat_fullname' => $fullname,

                'indate' => $row->usr_indate,

                'usr_pus' => $row->usr_pus,

                'usr_uterus' => $row->usr_uterus,

                'usr_size_1' => $row->usr_size_1,

                'usr_size_2' => $row->usr_size_2,

                'usr_size_3' => $row->usr_size_3,

                'usr_contour' => $row->usr_contour,

                'usr_echopattern' => $row->usr_echopattern,

                'usr_echorem' => $row->usr_echorem,

                'usr_endometrium' => $row->usr_endometrium,

                'usr_endometrium_sel' => $row->usr_endometrium_sel,
                'usr_endometrium_rem' => $row->usr_endometrium_rem,

                'usr_cer1' => $row->usr_cer1,

                'usr_cer2' => $row->usr_cer2,

                'usr_cer_urm' => $row->usr_cer_urm,

                'usr_ro1' => $row->usr_ro1,

                'usr_ro2' => $row->usr_ro2,

                'usr_ro3' => $row->usr_ro3,
                'usr_ro_rem' => $row->usr_ro_rem,

                'usr_lo1' => $row->usr_lo1,

                'usr_lo2' => $row->usr_lo2,

                'usr_lo3' => $row->usr_lo3,
                'usr_lo_rem' => $row->usr_lo_rem,

                'usr_cdsf' => $row->usr_cdsf,

                'usr_opm' => $row->usr_opm,

                'usr_impre' => $row->usr_impre

            );

        }





        echo json_encode($result);

    }elseif (isset($_POST['usrprint'])) {

        $usrprint = $_POST['usrprint'];



        $result = "";

        $sql = $handler->prepare("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname, patient.pat_bday,

        patient.pat_email, patient.pat_contact, patient.pat_add1, ultrasound.usr_id, ultrasound.usr_pus, ultrasound.usr_uterus,

        ultrasound.usr_size_1,ultrasound.usr_size_2, ultrasound.usr_size_3, ultrasound.usr_contour, ultrasound.usr_echopattern,

        ultrasound.usr_echorem, ultrasound.usr_endometrium, ultrasound.usr_endometrium_sel, ultrasound.usr_cer1, ultrasound.usr_cer2, ultrasound.usr_cer_urm,

        ultrasound.usr_ro1, ultrasound.usr_ro2, ultrasound.usr_ro3, ultrasound.usr_lo1,ultrasound.usr_lo2,ultrasound.usr_lo3,ultrasound.usr_cdsf,ultrasound.usr_opm,

        ultrasound.usr_impre, ultrasound.usr_indate FROM patient RIGHT JOIN ultrasound ON patient.pat_num = ultrasound.pat_num WHERE ultrasound.usr_id = ?");



        $sql->execute(array($usrprint));



        while ($row = $sql->fetch(PDO::FETCH_OBJ)) {

            if ($row->pat_mname!="") {

				$lname = ucfirst($row->pat_mname).".";

			}else{

				$lname = "";

            }

            

            if($row->usr_size_3 != null){

                $size = $row->usr_size_1.' x '.$row->usr_size_2.' x '.$row->usr_size_3;

            }else{

                $size = $row->usr_size_1.' x '.$row->usr_size_2;

            }



            if($row->usr_cer_urm == 'on'){

                $urm = "Yes";

            }else{

                $urm = "No";

            }



            if($row->usr_ro3 != null){

                $ro = $row->usr_ro1.' x '.$row->usr_ro2.' x '.$row->usr_ro3;

            }else{

                $ro = $row->usr_ro1.' x '.$row->usr_ro2;

            }



            if($row->usr_lo3 != null){

                $lo = $row->usr_lo1.' x '.$row->usr_lo2.' x '.$row->usr_lo3;

            }else{

                $lo = $row->usr_lo1.' x '.$row->usr_lo2;

            }



            $tz  = new DateTimeZone('Asia/Taipei');

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);

			$dateCre = date_create($row->usr_indate);

            $date = date_format($dateCre, 'M. d, Y');



            $age = DateTime::createFromFormat('m/d/Y', $row->pat_bday , $tz)

		     ->diff(new DateTime('now', $tz))

		     ->y;

            

            $result[] = array(

                'usr_id' => $row->usr_id, 

                'pat_num' => $row->pat_num, 

                'fullname' => $fullname,

                'age' => $age,

                'address' => $row->pat_add1,

                'contact' => $row->pat_contact,

                'email' => $row->pat_email,

                'indate' => $date,

                'usr_pus' => $row->usr_pus, 

                'usr_uterus' => $row->usr_uterus, 

                'usr_size' => $size,

                'usr_contour' => $row->usr_contour, 

                'usr_echopattern' => $row->usr_echopattern,

                'usr_echorem' => $row->usr_echorem, 

                'usr_endometrium' => $row->usr_endometrium, 

                'usr_endometrium_sel' => $row->usr_endometrium_sel, 

                'usr_cer' => $row->usr_cer1.' x '.$row->usr_cer2,

                'usr_cer_urm' => $urm,

                'usr_ro' => $ro, 

                'usr_lo' => $lo,

                'usr_cdsf' => $row->usr_cdsf, 

                'usr_opm' => $row->usr_opm,

                'usr_impre' => $row->usr_impre

            );

        }



        echo json_encode($result);

    }else{

		$result = "";

		$sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname, ultrasound.usr_id, ultrasound.usr_pus, 

        ultrasound.usr_uterus,ultrasound.usr_size_1,ultrasound.usr_size_2, ultrasound.usr_size_3, ultrasound.usr_contour, ultrasound.usr_echopattern,

        ultrasound.usr_echorem, ultrasound.usr_endometrium, ultrasound.usr_endometrium_sel, ultrasound.usr_cer1, ultrasound.usr_cer2, ultrasound.usr_cer_urm,

        ultrasound.usr_ro1, ultrasound.usr_ro2, ultrasound.usr_ro3, ultrasound.usr_lo1,ultrasound.usr_lo2,ultrasound.usr_lo3,ultrasound.usr_cdsf,ultrasound.usr_opm,

        ultrasound.usr_impre, ultrasound.usr_indate FROM patient RIGHT JOIN ultrasound ON patient.pat_num = ultrasound.pat_num ORDER BY ultrasound.usr_id DESC");



		while ($row = $sql->fetch(PDO::FETCH_OBJ)) {

			if ($row->pat_mname!="") {

				$lname = ucfirst($row->pat_mname).".";

			}else{

				$lname = "";

            }

            

            if($row->usr_size_3 != null){

                $size = $row->usr_size_1.' x '.$row->usr_size_2.' x '.$row->usr_size_3;

            }else{

                $size = $row->usr_size_1.' x '.$row->usr_size_2;

            }



            if($row->usr_cer_urm == 'on'){

                $urm = "Yes";

            }else{

                $urm = "No";

            }



            if($row->usr_ro3 != null){

                $ro = $row->usr_ro1.' x '.$row->usr_ro2.' x '.$row->usr_ro3;

            }else{

                $ro = $row->usr_ro1.' x '.$row->usr_ro2;

            }



            if($row->usr_lo3 != null){

                $lo = $row->usr_lo1.' x '.$row->usr_lo2.' x '.$row->usr_lo3;

            }else{

                $lo = $row->usr_lo1.' x '.$row->usr_lo2;

            }





			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);

			$dateCre = date_create($row->usr_indate);

			$date = date_format($dateCre, 'M. d, Y');



			 $result[] = array(

                'usr_id' => $row->usr_id, 

				'fullname' => $fullname,

                'indate' => $date,

                'usr_pus' => $row->usr_pus, 

                'usr_uterus' => $row->usr_uterus, 

                'usr_size' => $size,

                'usr_contour' => $row->usr_contour, 

                'usr_echopattern' => $row->usr_echopattern,

                'usr_echorem' => $row->usr_echorem, 

                'usr_endometrium' => $row->usr_endometrium, 

                'usr_endometrium_sel' => $row->usr_endometrium_sel, 

                'usr_cer' => $row->usr_cer1.' x '.$row->usr_cer2,

                'usr_cer_urm' => $urm,

                'usr_ro' => $ro, 

                'usr_lo' => $lo,

                'usr_cdsf' => $row->usr_cdsf, 

                'usr_opm' => $row->usr_opm,

                'usr_impre' => $row->usr_impre

			);

		}

		

		echo json_encode($result);

	}

?>