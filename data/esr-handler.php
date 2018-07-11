<?php
    require_once('handler.php');
    if (isset($_POST['esrprint'])) {
        $esrprint = $_POST['esrprint'];

        $sql = $handler->prepare("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname, patient.pat_bday, patient.pat_add1,
        patient.pat_email, patient.pat_contact, emb_id, emb_esdate,
        emb_cycle, emb_opudate,emb_tnec,emb_rt,emb_lt, emb_tnef1,emb_tnef2,
        emb_tnez1,emb_tnez2,emb_pi,emb_mi,emb_tnme,emb_tnae1,emb_tnae2,emb_tnpe,emb_tneafi1,emb_tneafi2,
        emb_tneafi3,emb_tnefer1,emb_tnefer2,emb_tnefer3,emb_tnecle,emb_tnetran,emb_getran,emb_tned,emb_tnefro,
        emb_density,emb_motility,emb_morphology,emb_embryologist 
        FROM patient RIGHT JOIN embryology ON patient.pat_num = embryology.pat_num WHERE emb_id = ?");

        $sql->execute(array($esrprint));
 
        while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
            if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
            }

            if($row->emb_tnef1!=null){
                $tnef = $row->emb_tnef1.' / '.$row->emb_tnef2;
            }else{
                $tnef = "";
            }

            if($row->emb_tnez1!=null){
                $tnez = $row->emb_tnez1.' / '.$row->emb_tnez2;
            }else{
                $tnez = "";
            }

            if($row->emb_pi!=null){
                $imeg = $row->emb_pi.' / '.$row->emb_mi;
            }else{
                $imeg = "";
            }

            if($row->emb_tnae1!=null){
                $tnae = $row->emb_tnae1.' / '.$row->emb_tnae2;
            }else{
                $tnae = "";
            }

            if($row->emb_tnae1!=null){
                $tnae = $row->emb_tnae1.' / '.$row->emb_tnae2;
            }else{
                $tnae = "";
            }

            if($row->emb_tneafi2!=null){
                $tneafi = $row->emb_tneafi1.' / '.$row->emb_tneafi2.' / '.$row->emb_tneafi3;
            }else{
                $tneafi = $row->emb_tneafi1;
            }
            if($row->emb_tnefer2!=null){
                $tnefer = $row->emb_tnefer1.' / '.$row->emb_tnefer2.' / '.$row->emb_tnefer3;
            }else{
                $tnefer = $row->emb_tnefer1;
            }

            if($row->emb_density!=null){
                $hus = $row->emb_density.' x 10 <sup>6</sup> /ml '.$row->emb_motility.' % '.$row->emb_morphology.' % ';
            }else{
                $hus = "";
            }
            if ($row->emb_tnec!=null) {
                $tnec = '<b>'.$row->emb_tnec.'</b> Rt: <b>'.$row->emb_rt.'</b> Lt: <b>'.$row->emb_lt.'</b>';
            }else{
                $tnec = "";
            }

            $tz  = new DateTimeZone('Asia/Taipei');
			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
			$dateCre = date_create($row->emb_esdate);
            $date = date_format($dateCre, 'M. d, Y');

            $age = DateTime::createFromFormat('m/d/Y', $row->pat_bday , $tz)
		     ->diff(new DateTime('now', $tz))
		     ->y;

            $fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);

            $result[] = array(
                'esrid' => $row->emb_id,
                'pat_num' => $row->pat_num,
                'fullname' => $fullname,
                'age' => $age,
                'contact' => $row->pat_contact,
                'email' => $row->pat_email,
                'address' => $row->pat_add1,
                'esdate' => $date, 
                'cycle' => '<b>'.$row->emb_cycle.'</b>',
                'opudate' => '<b>'.$row->emb_opudate.'</b>',
                'tnec' => '<b>'.$tnec.'</b>',
                'tnef' => '<b>'.$tnef.'</b>',
                'tnez' => '<b>'.$tnez.'</b>',
                'imeg' => '<b>'.$imeg.'</b>',
                'tnme' => '<b>'.$row->emb_tnme.'</b>',
                'tnae' => '<b>'.$tnae.'</b>',
                'tnpe' => '<b>'.$row->emb_tnpe.'</b>',
                'tneafi' => '<b>'.$tneafi.'</b>',
                'tnefer' => '<b>'.$tnefer.'</b>',
                'tnecle' => '<b>'.$row->emb_tnecle.'</b>',
                'tnetran' => '<b>'.$row->emb_tnetran.'</b>',
                'getran' => '<b>'.$row->emb_getran.'</b>',
                'tned' => '<b>'.$row->emb_tned.'</b>',
                'tnefro' => '<b>'.$row->emb_tnefro.'</b>',
                'husband' => '<b>'.$hus.'</b>',
                'embryologist' => '<b>'.$row->emb_embryologist.'</b>'
            );
        }

        echo json_encode($result);

    }elseif(isset($_POST['esrid'])){
        $esrid = $_POST['esrid'];

        $sql  = $handler->prepare("UPDATE embryology SET
            emb_esdate = :esdate,
            emb_cycle = :cycle,
            emb_opudate = :opudate,
            emb_tnec = :tnec,
            emb_rt = :rt,
            emb_lt = :lt,
            emb_tnef1 = :tnef1,
            emb_tnef2 = :tnef2,
            emb_tnez1 = :tnez1,
            emb_tnez2 = :tnez2,
            emb_pi = :emb_pi,
            emb_mi = :mi,
            emb_tnme = :tnme,
            emb_tnae1 = :tnae1,
            emb_tnae2 = :tnae2,
            emb_tnpe = :tnpe,
            emb_tneafi1 = :tneafi1,
            emb_tneafi2 = :tneafi2,
            emb_tneafi3 = :tneafi3,
            emb_tnefer1 = :tnefer1,
            emb_tnefer2 = :tnefer2,
            emb_tnefer3 = :tnefer3,
            emb_tnecle = :tnecle,
            emb_tnetran = :tnetran,
            emb_getran = :getran,
            emb_tned = :tned,
            emb_tnefro = :tnefro,
            emb_density = :density,
            emb_motility = :motility,
            emb_morphology = :morphology,
            emb_embryologist  = :embryologist
            WHERE emb_id = :esrid
        ");

        $sql->execute(array(
            'esdate' => isset($_POST['esdate']) ? $_POST['esdate'] : null,
            'cycle' => isset($_POST['cycle']) ? $_POST['cycle'] : null,
            'opudate' => isset($_POST['opudate']) ? $_POST['opudate'] : null,
            'tnec' => isset($_POST['tnec']) ? $_POST['tnec'] : null,
            'rt' => isset($_POST['rt']) ? $_POST['rt'] : null,
            'lt' => isset($_POST['lt']) ? $_POST['lt'] : null,
            'tnef1' => isset($_POST['tnef1']) ? $_POST['tnef1'] : null,
            'tnef2' => isset($_POST['tnef2']) ? $_POST['tnef2'] : null,
            'tnez1' => isset($_POST['tnez1']) ? $_POST['tnez1'] : null,
            'tnez2' => isset($_POST['tnez2']) ? $_POST['tnez2'] : null,
            'emb_pi' => isset($_POST['pi']) ? $_POST['pi'] : null,
            'mi' => isset($_POST['mi']) ? $_POST['mi'] : null,
            'tnme' => isset($_POST['tnme']) ? $_POST['tnme'] : null,
            'tnae1' => isset($_POST['tnae1']) ? $_POST['tnae1'] : null,
            'tnae2' => isset($_POST['tnae2']) ? $_POST['tnae2'] : null,
            'tnpe' => isset($_POST['tnpe']) ? $_POST['tnpe'] : null,
            'tneafi1' => isset($_POST['tneafi1']) ? $_POST['tneafi1'] : null,
            'tneafi2' => isset($_POST['tneafi2']) ? $_POST['tneafi2'] : null,
            'tneafi3' => isset($_POST['tneafi3']) ? $_POST['tneafi3'] : null,
            'tnefer1' => isset($_POST['tnefer1']) ? $_POST['tnefer1'] : null,
            'tnefer2' => isset($_POST['tnefer2']) ? $_POST['tnefer2'] : null,
            'tnefer3' => isset($_POST['tnefer3']) ? $_POST['tnefer3'] : null,
            'tnecle' => isset($_POST['tnecle']) ? $_POST['tnecle'] : null,
            'tnetran' => isset($_POST['tnetran']) ? $_POST['tnetran'] : null,
            'getran' => isset($_POST['getran']) ? $_POST['getran'] : null,
            'tned' => isset($_POST['tned']) ? $_POST['tned'] : null,
            'tnefro' => isset($_POST['tnefro']) ? $_POST['tnefro'] : null,
            'density' => isset($_POST['density']) ? $_POST['density'] : null,
            'motility' => isset($_POST['motility']) ? $_POST['motility'] : null,
            'morphology' => isset($_POST['morphology']) ? $_POST['morphology'] : null,
            'embryologist' => isset($_POST['embryologist']) ? $_POST['embryologist'] : null,
            'esrid' => $esrid
        ));

        echo 1;
    }elseif (isset($_POST['del'])) {
            $esrid = $_POST['esr'];
    
            $sql = $handler->prepare("DELETE FROM embryology WHERE emb_id = :esr");
            $sql->execute(array('esr'=>$esrid));
            
            echo 1;
    }elseif (isset($_POST['get_esr'])) {
        $esrid = $_POST['get_esr'];

        $sql = $handler->prepare("SELECT patient.pat_fname, patient.pat_mname, patient.pat_lname,emb_id, emb_esdate,
        emb_cycle, emb_opudate,emb_tnec,emb_rt,emb_lt, emb_tnef1,emb_tnef2,
        emb_tnez1,emb_tnez2,emb_pi,emb_mi,emb_tnme,emb_tnae1,emb_tnae2,emb_tnpe,emb_tneafi1,emb_tneafi2,
        emb_tneafi3,emb_tnefer1,emb_tnefer2,emb_tnefer3,emb_tnecle,emb_tnetran,emb_getran,emb_tned,emb_tnefro,
        emb_density,emb_motility,emb_morphology,emb_embryologist 
        FROM patient RIGHT JOIN embryology ON patient.pat_num = embryology.pat_num WHERE emb_id = ?");

        $sql->execute(array($esrid));

        while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
            if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
            }

            $fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);

            $result[] = array(
                'esrid' => $row->emb_id, 
                'fullname' => $fullname,
                'esdate' => $row->emb_esdate, 
                'cycle' => $row->emb_cycle,
                'opudate' => $row->emb_opudate,
                'tnec' => $row->emb_tnec,
                'rt' => $row->emb_rt,
                'lt' => $row->emb_lt,
                'tnef1' => $row->emb_tnef1,
                'tnef2' => $row->emb_tnef2,
                'tnez1' => $row->emb_tnez1,
                'tnez2' => $row->emb_tnez2,
                'emb_pi' => $row->emb_pi,
                'mi' => $row->emb_mi,
                'tnme' => $row->emb_tnme,
                'tnae1' => $row->emb_tnae1,
                'tnae2' => $row->emb_tnae2,
                'tnpe' => $row->emb_tnpe,
                'tneafi1' => $row->emb_tneafi1,
                'tneafi2' => $row->emb_tneafi2,
                'tneafi3' => $row->emb_tneafi3,
                'tnefer1' => $row->emb_tnefer1,
                'tnefer2' => $row->emb_tnefer2,
                'tnefer3' => $row->emb_tnefer3,
                'tnecle' => $row->emb_tnecle,
                'tnetran' => $row->emb_tnetran,
                'getran' => $row->emb_getran,
                'tned' => $row->emb_tned,
                'tnefro' => $row->emb_tnefro,
                'density' => $row->emb_density,
                'motility' => $row->emb_motility,
                'morphology' => $row->emb_morphology,
                'embryologist' => $row->emb_embryologist
            );
        }

        echo json_encode($result);

    }elseif(isset($_POST['patname'])){
        $patnum = $_POST['patname'];

        $sql = $handler->prepare("INSERT INTO 
        embryology(
            `pat_num`,
            `emb_esdate`,
            `emb_cycle`,
            `emb_opudate`,
            `emb_tnec`,
            `emb_rt`,
            `emb_lt`,
            `emb_tnef1`,
            `emb_tnef2`,
            `emb_tnez1`,
            `emb_tnez2`,
            `emb_pi`,
            `emb_mi`,
            `emb_tnme`,
            `emb_tnae1`,
            `emb_tnae2`,
            `emb_tnpe`,
            `emb_tneafi1`,
            `emb_tneafi2`,
            `emb_tneafi3`,
            `emb_tnefer1`,
            `emb_tnefer2`,
            `emb_tnefer3`,
            `emb_tnecle`,
            `emb_tnetran`,
            `emb_getran`,
            `emb_tned`,
            `emb_tnefro`,
            `emb_density`,
            `emb_motility`,
            `emb_morphology`,
            `emb_embryologist`
        ) 
        VALUES(
            :pat_num,
            :esdate,
            :cycle,
            :opudate,
            :tnec,
            :rt,
            :lt,
            :tnef1,
            :tnef2,
            :tnez1,
            :tnez2,
            :emb_pi,
            :mi,
            :tnme,
            :tnae1,
            :tnae2,
            :tnpe,
            :tneafi1,
            :tneafi2,
            :tneafi3,
            :tnefer1,
            :tnefer2,
            :tnefer3,
            :tnecle,
            :tnetran,
            :getran,
            :tned,
            :tnefro,
            :density,
            :motility,
            :morphology,
            :embryologist
        )");

        $sql->execute(array(
            'pat_num' => $patnum,
            'esdate' => isset($_POST['esdate']) ? $_POST['esdate'] : null,
            'cycle' => isset($_POST['cycle']) ? $_POST['cycle'] : null,
            'opudate' => isset($_POST['opudate']) ? $_POST['opudate'] : null,
            'tnec' => isset($_POST['tnec']) ? $_POST['tnec'] : null,
            'rt' => isset($_POST['rt']) ? $_POST['rt'] : null,
            'lt' => isset($_POST['lt']) ? $_POST['lt'] : null,
            'tnef1' => isset($_POST['tnef1']) ? $_POST['tnef1'] : null,
            'tnef2' => isset($_POST['tnef2']) ? $_POST['tnef2'] : null,
            'tnez1' => isset($_POST['tnez1']) ? $_POST['tnez1'] : null,
            'tnez2' => isset($_POST['tnez2']) ? $_POST['tnez2'] : null,
            'emb_pi' => isset($_POST['pi']) ? $_POST['pi'] : null,
            'mi' => isset($_POST['mi']) ? $_POST['mi'] : null,
            'tnme' => isset($_POST['tnme']) ? $_POST['tnme'] : null,
            'tnae1' => isset($_POST['tnae1']) ? $_POST['tnae1'] : null,
            'tnae2' => isset($_POST['tnae2']) ? $_POST['tnae2'] : null,
            'tnpe' => isset($_POST['tnpe']) ? $_POST['tnpe'] : null,
            'tneafi1' => isset($_POST['tneafi1']) ? $_POST['tneafi1'] : null,
            'tneafi2' => isset($_POST['tneafi2']) ? $_POST['tneafi2'] : null,
            'tneafi3' => isset($_POST['tneafi3']) ? $_POST['tneafi3'] : null,
            'tnefer1' => isset($_POST['tnefer1']) ? $_POST['tnefer1'] : null,
            'tnefer2' => isset($_POST['tnefer2']) ? $_POST['tnefer2'] : null,
            'tnefer3' => isset($_POST['tnefer3']) ? $_POST['tnefer3'] : null,
            'tnecle' => isset($_POST['tnecle']) ? $_POST['tnecle'] : null,
            'tnetran' => isset($_POST['tnetran']) ? $_POST['tnetran'] : null,
            'getran' => isset($_POST['getran']) ? $_POST['getran'] : null,
            'tned' => isset($_POST['tned']) ? $_POST['tned'] : null,
            'tnefro' => isset($_POST['tnefro']) ? $_POST['tnefro'] : null,
            'density' => isset($_POST['density']) ? $_POST['density'] : null,
            'motility' => isset($_POST['motility']) ? $_POST['motility'] : null,
            'morphology' => isset($_POST['morphology']) ? $_POST['morphology'] : null,
            'embryologist' => isset($_POST['embryologist']) ? $_POST['embryologist'] : null
        ));

        echo 1;
    }else{
        $sql = $handler->query("SELECT patient.pat_fname, patient.pat_mname, patient.pat_lname,emb_id, emb_esdate,
        emb_cycle, emb_opudate,emb_tnec,emb_rt,emb_lt, emb_tnef1,emb_tnef2,
        emb_tnez1,emb_tnez2,emb_pi,emb_mi,emb_tnme,emb_tnae1,emb_tnae2,emb_tnpe,emb_tneafi1,emb_tneafi2,
        emb_tneafi3,emb_tnefer1,emb_tnefer2,emb_tnefer3,emb_tnecle,emb_tnetran,emb_getran,emb_tned,emb_tnefro,
        emb_density,emb_motility,emb_morphology,emb_embryologist 
        FROM patient RIGHT JOIN embryology ON patient.pat_num = embryology.pat_num ORDER BY emb_esdate DESC");
    
        while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
            if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
            }

            if($row->emb_tnef1!=null){
                $tnef = $row->emb_tnef1.' / '.$row->emb_tnef2;
            }else{
                $tnef = "";
            }

            if($row->emb_tnez1!=null){
                $tnez = $row->emb_tnez1.' / '.$row->emb_tnez2;
            }else{
                $tnez = "";
            }

            if($row->emb_pi!=null){
                $imeg = $row->emb_pi.' / '.$row->emb_mi;
            }else{
                $imeg = "";
            }

            if($row->emb_tnae1!=null){
                $tnae = $row->emb_tnae1.' / '.$row->emb_tnae2;
            }else{
                $tnae = "";
            }

            if($row->emb_tnae1!=null){
                $tnae = $row->emb_tnae1.' / '.$row->emb_tnae2;
            }else{
                $tnae = "";
            }

            if($row->emb_tneafi2!=null){
                $tneafi = $row->emb_tneafi1.' / '.$row->emb_tneafi2.' / '.$row->emb_tneafi3;
            }else{
                $tneafi = $row->emb_tneafi1;
            }
            if($row->emb_tnefer2!=null){
                $tnefer = $row->emb_tnefer1.' / '.$row->emb_tnefer2.' / '.$row->emb_tnefer3;
            }else{
                $tnefer = $row->emb_tnefer1;
            }

            if($row->emb_density!=null){
                $hus = $row->emb_density.' x 10 <sup>6</sup> /ml '.$row->emb_motility.' % '.$row->emb_morphology.' % ';
            }else{
                $hus = "";
            }
            if ($row->emb_tnec!=null) {
                $tnec = $row->emb_tnec.' Rt: '.$row->emb_rt.' Lt: '.$row->emb_lt;
            }else{
                $tnec = "";
            }
           

            $fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);

            $result[] = array(
                'esrid' => $row->emb_id, 
                'date' => $row->emb_esdate, 
                'fullname' => $fullname,
                'cycle' => $row->emb_cycle,
                'opudate' => $row->emb_opudate,
                'tnec' => $tnec,
                'tnef' => $tnef,
                'tnez' => $tnez,
                'imeg' => $imeg,
                'tnme' => $row->emb_tnme,
                'tnae' => $tnae,
                'tnpe' => $row->emb_tnpe,
                'tneafi' => $tneafi,
                'tnefer' => $tnefer,
                'tnecle' => $row->emb_tnecle,
                'tnetran' => $row->emb_tnetran,
                'getran' => $row->emb_getran,
                'tned' => $row->emb_tned,
                'tnefro' => $row->emb_tnefro,
                'husband' => $hus,
                'embryologist' => $row->emb_embryologist
            );
        }

        echo json_encode($result);

    }

?>