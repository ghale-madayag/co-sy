<?php
    require_once('session.php');
    require_once('handler.php');

    if (isset($_POST['email'])) {

        $email = $_POST['email'];
        $pword = $_POST['pword'];
        $enPword = sha1($pword);

        $sqlChk = $handler->prepare("SELECT user_id, user_email, user_pword FROM user WHERE user_email= ? AND user_pword= ?");
        $sqlChk->execute(array($email,$enPword));

        if ($sqlChk->rowCount()) {
            $r = $sqlChk->fetch(PDO::FETCH_OBJ);
            $_SESSION['user_id'] = $r->user_id;
        }else{
            echo 1;   
        }
    }
?>