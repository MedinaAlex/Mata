<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require "../../model/dao/Dao.php";

    if(isset($_POST['nom']) && isset($_POST['description'])  && isset($_POST['duree']) 
    && isset($_POST['type']) && isset($_POST['categorie'])){

        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $duree = $_POST['duree'];
        $type = $_POST['type'];
        $categorie = $_POST['categorie'];

        $dao = New Dao();
        if(isset($_SESSION['id_user'])){
            $id_user = $_SESSION['id_user'];
        }

        $dao->insertService($nom, $description, $duree, $type, $categorie, $id_user);
        header("Location: ../../index.php?controler=test&action=services");
    }

?>