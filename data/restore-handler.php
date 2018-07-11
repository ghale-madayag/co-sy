<?php
	require_once('handler.php');

	$target_dir = "../backup/";
	$target_file = $target_dir . basename($_FILES["sql"]["name"]);



	if (move_uploaded_file($_FILES["sql"]["tmp_name"], $target_file)) {
        $filename = $target_dir . basename($_FILES["sql"]["name"]);
		$templine = '';
		$lines = file($filename);
		foreach ($lines as $line)
		{
			if (substr($line, 0, 2) == '--' || $line == '')
				continue;
			$templine .= $line;
			if (substr(trim($line), -1, 1) == ';')
			{
				$handler->query($templine) or print('Error performing query \'<strong>' . $templine . '\': <br /><br />');;
				$templine = '';
			}
		}

		echo 1;
		
    }


?>