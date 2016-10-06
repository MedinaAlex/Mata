<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require "../../model/dao/Dao.php";
    if(isset($_POST['nom']) && isset($_POST['prenom'])  && isset($_POST['mail']) && isset($_POST['password'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $birthdate = $_POST['birthdate'];

        $dao = New Dao();
        
        $dao->insertUtilisateur($nom, $prenom, $birthdate, $mail, $password);

        $_SESSION['mail'] = $mail;
        $dao->sessionId();

        header("Location: ../../index.php");
    }

?>