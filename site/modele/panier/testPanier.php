<?php

require_once("./../dao/Dao.php");
require_once(__DIR__."/Panier.php");
require_once("./../bean/Album.php");

$panier = new Panier();
$dao = new Dao();

$album1 = $dao->getAlbum(1);
$album2 = $dao->getAlbum(2);
$album3 = $dao->getAlbum(3);

$panier->ajouterAlbum($album1);
$panier->ajouterAlbum($album2);
$panier->ajouterAlbum($album3);

$albums = $panier->getAlbums();
foreach ($albums as $album){
	echo $album->getTitre()." ".$album->getAuteur()." ".$album->getPrix() ."<br>";
}

echo "Le montant total est de :".$panier->getMontant();
?>