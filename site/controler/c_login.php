<?php
$action = $_REQUEST['action'];

switch($action)
{
   case 'connexion':{
   // if(!isset($_SESSION["integrateur"])){
		//traitement récupération check login mdp 
     include ("view/basic/v_accueil.php");
    /*}else{
     include ("view/basic/v_accueil.php");
    }*/
   break;
   }
}
?>