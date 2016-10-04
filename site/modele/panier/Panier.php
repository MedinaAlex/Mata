<?php


class Panier
{
  private $montant;
  private $albums;

  public function __construct(){
  	$this->montant = 0;
  	$this->albums = array();
  }

  public function ajouterAlbum($album){
  	$this->albums[$album->getIdentifiant()] = $album;
  	$this->montant += $album->getPrix(); 
  }

  public function getAlbums(){
  	return $this->albums;
  }

  public function getMontant(){
  	return $this->montant;
  }
}


?>
