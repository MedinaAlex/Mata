<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $path = $_SERVER['DOCUMENT_ROOT'] ."/Mata/site/";
    require($path."/model/dao/Dao.php");
 
    if(isset($_POST['mail']) && isset($_POST['password'])){
        $dao = New Dao();

        $mail = $_POST['mail'];
        $password = $_POST['password'];
        if($dao->verifieMotDePasse($mail, $password)){
            $_SESSION["is_connected"] = true;
            $_SESSION["mail"] = $mail;
            $dao->sessionId();
            header("Location: ../../index.php?controler=test&action=services");
        }
        else{
            header("Location: ../../index.php");
        }
    }

?>