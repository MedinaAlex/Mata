<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
ob_start();
session_start();

//include("model/connection_pdo.php");
//include("model/pdo.php");
include("view/structure/v_header.php") ;

if((!isset($_REQUEST['controler']))||(!isset($_REQUEST['action'])))
     $uc = 'home';
else
	$uc = $_REQUEST['controler'];
switch($uc)
{
	case 'home':
		{include("view/basic/v_accueil.php");break;}
	case 'test':
		{include("controler/c_services.php");break;}
	case 'contact':
		{include("controler/c_contact.php");break;}
	case 'login':
		{include("view/other/connexion.php");break;}
	case 'integrateur':
		{include("controler/c_integrateur.php");break;}
	case 'clientIntegrateur':
		{include("controler/c_other.php");break;}
	case 'clientDetail':
		{include("controler/c_other.php");break;}
	case 'navAccueil' :
		{include("controler/c_navbar.php");break;}
	case 'navClient' : 
		{include("controler/c_navbar.php");break;}
	case 'other' :
		{include("controler/c_other.php");break;}
	default:
		{include("view/basic/v_nopage.php");break;}
}
ob_end_flush();
include("view/structure/v_footer.php") ;
?>