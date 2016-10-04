<?php

require_once 'controleurAuthentification.php';


class Routeur {

  private $ctrlAuthentification;
 

  public function __construct() {
    $this->ctrlAuthentification= new ControleurAuthentification();
  }

  // Traite une requête entrante
  public function routerRequete() {
	$this->ctrlAuthentification->authentification();
          
  }

}

?>
