<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    require($path."/model/dao/Dao.php");

    $dao = New Dao();
    $id = $_GET['id'];
    $dao->deleteService($id);
    header("Location: ../../index.php?controler=test&action=services");
?>
