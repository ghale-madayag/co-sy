<?php
	require_once('handler.php');
	require_once('session.php');

	//edit the information of the current user
	if(isset($_POST['editPro'])!=""){
	
		$id = $_POST['userId-edit'];
		$fname = $_POST['fname-edit'];
		$mname = $_POST['mname-edit'];
		$lname = $_POST['lname-edit'];
		$email = $_POST['email-edit'];
		$contact = $_POST['mobile-edit'];

		
		$sql = $handler->prepare("SELECT user.user_email, user.user_contact FROM user WHERE (user_email=? OR user_contact=?) AND user_id!= ? ");
		$sql->execute(array($email, $contact, $id));

		if($sql->rowCount()){
			echo 1;
		}else{
			//update information
			$sql = $handler->prepare("UPDATE user SET 
				user_fname=?, 
				user_mname=?, 
				user_lname=?, 
				user_email=? ,
				user_contact=? 
				WHERE user_id=?");

			$sql->execute(array($fname,$mname,$lname,$email,$contact,$id));
		}
		
	//update the password of current user
	}elseif(isset($_POST['updatePword'])!=""){
		
		$id = 1;//$_SESSION['user_id'];
		$curpass = $_POST['curpass'];
		$newpass = $_POST['newpass'];
		$conpass = $_POST['conpass'];
		$convert = sha1($curpass);
		$convertNew = sha1($newpass);
		
		$sql = $handler->prepare("SELECT user.user_pword FROM user WHERE user_id= ? AND user_pword= ?");

		$sql->execute(array($id,$convert));

		if($sql->rowCount()){
			$query = $handler->prepare("UPDATE user SET user_pword=? WHERE user_id=?");
			$query->execute(array($convertNew,$id));
		}else{
			echo 1;
		}

	//register new user
	}elseif(isset($_POST['fname'])!="") {
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$contact = $_POST['mobile'];
		$pword = $_POST['pword'];
		$convert = sha1($pword);

		$sql = $handler->prepare("SELECT user.user_email, user.user_contact FROM user WHERE user.user_email=? OR user.user_contact=?");
		$sql->execute(array($email,$contact));

		if ($sql->rowCount()) {
			echo 1;
		}else{
		//insert to the user table
		$handler->query("INSERT INTO user(`user_fname`,`user_mname`,`user_lname`,`user_email`,`user_pword`,`user_contact`,`user_indate`) VALUES(
			'$fname','$mname','$lname','$email','$convert','$contact',now())");
		}
	
	//retrieved the current user
	}elseif (isset($_POST['user_id'])) {
		$id = $_POST['user_id'];

		$sql = $handler->prepare("SELECT * FROM user WHERE user_id=?");
		$sql->execute(array($id));

		while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
			$fname = $row->user_fname;
			$mname = $row->user_mname;
			$lname = $row->user_lname;

			$fullname = ucfirst($fname).' '.ucfirst($mname).'. '.ucfirst($lname);
			$dateCre = date_create($row->user_indate);
			$date = date_format($dateCre, 'M. d, Y | h:i:s a');

			$result[] = array(
				'fullname' => $fullname, 
				'email' => $row->user_email,
				'contact' => $row->user_contact,
				'date' => $date,
				'img' => substr($row->user_fname, 0, 1)."".substr($row->user_lname, 0, 1)
			);
		}

		echo json_encode($result);

	//retrieved all the users
	}elseif (isset($_POST['user_all'])!="") {
		$id = $_SESSION['user_id'];

		$sql = $handler->prepare("SELECT * FROM user WHERE user_id!=?");
		$sql->execute(array($id));

		while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
			$fname = $row->user_fname;
			$mname = $row->user_mname;
			$lname = $row->user_lname;

			$fullname = ucfirst($fname).' '.ucfirst($mname).'. '.ucfirst($lname);
			$dateCre = date_create($row->user_indate);
			$date = date_format($dateCre, 'M. d, Y | h:i:s a');

			$result[] = array(
				'userId' => $row->user_id,
				'img' => substr($row->user_fname, 0, 1)."".substr($row->user_lname, 0, 1),
				'fullname' => $fullname, 
				'date' => $date
			);
		}

		echo json_encode($result);

	//edit the profile of the user
	}elseif(isset($_POST['edit']) && isset($_POST['userId'])){
		$id = $_POST['userId'];

		$sql = $handler->prepare("SELECT * FROM user WHERE user_id=?");
		$sql->execute(array($id));
		
		while($row=$sql->fetch(PDO::FETCH_OBJ)){
			$result[] = array(
			'user_id' => $row->user_id,
			'user_fname' => $row->user_fname,
			'user_mname' => $row->user_mname,
			'user_lname' => $row->user_lname,
			'user_email' => $row->user_email,
			'user_contact' => $row->user_contact
			);
		}

		echo json_encode($result);

	//reset the password
	}elseif (isset($_POST['reset'])) {
		$id = $_POST['reset'];
		$val = "123456";
		$convert = sha1($val);

		//reset the password
		$sql = $handler->prepare("UPDATE user SET user_pword=? WHERE user_id=?");
		$sql->execute(array($convert, $id));
		
		echo 1;
	}elseif (isset($_POST['delete'])) {
		$id = $_POST['delete'];

		$sql = $handler->prepare("DELETE FROM user WHERE user_id=?");
		$sql->execute(array($id));

		echo 1;
	}
?>