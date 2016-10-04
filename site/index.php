<?php

session_start();
include("vue/structure/v_header.php");
include("vue/structure/v_navbar.php");

require_once "controleur/routeur.php";

$routeur=new Routeur();

$routeur->routerRequete();

?>
