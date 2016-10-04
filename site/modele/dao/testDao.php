<?php
header("Content-type: text/html; charset=utf-8");
// vous ne devez rien modifier dans ce script qui vous permet de tester votre classe Dao

require "Dao.php";


function testGetListeAlbum( $dao,$genre){
$listeAlbum=$dao->getListeAlbum($genre);
if ($listeAlbum!=null){
foreach ($listeAlbum as $album){
echo $album->getTitre()." ".$album->getAuteur()." ".$album->getPrix();
echo "<br/>";
}
}
else{
echo "le genre $genre n'existe pas";
}
}

function testGetAlbum($dao,$id){
$album=$dao->getAlbum($id);
if ($album!=null){
echo $album->getTitre()." ".$album->getAuteur()." ".$album->getPrix();
}
else{ echo "l'album d'identifiant $id n'existe pas";}
}

function testGetMotDePasse($dao,$login){
if ($dao->getMotDePasse($login)!=null){
echo "le mot de passe associé à $login est: ";
echo $dao->getMotDePasse($login)."<br/><br/>";}
else{ 
echo "pas de mots de passe pour $login";
}
}



function testVerifieMotDePasse($dao,$login,$mdp){
if ($dao->verifieMotDePasse($login,$mdp)){
echo "OK $login $mdp <br/>";
}
else{
echo "NO $login $mdp <br/>";
}
}

try{
$dao=new Dao();


echo "######################################### <br/>";
echo "test de getListeAlbum <br/>";
echo "######################################### <br/> <br/>";
$genre="classique";
testGetListeAlbum( $dao,$genre);
echo "<br/>";
echo "<br/>";
$genre="folk";
testGetListeAlbum( $dao,$genre);
echo "<br/>";
echo "<br/>";
echo "######################################### <br/>";
echo "test de getAlbum <br/>";
echo "######################################### <br/> <br/>";
$id=5;
testGetAlbum($dao,$id);
echo "<br/>";
echo "<br/>";

$id=30;
testGetAlbum($dao,$id);
echo "<br/>";
echo "<br/>";
echo "######################################### <br/>";
echo "test de getMotDePasse <br/>";
echo "######################################### <br/> <br/>";
$login="toto";
testGetMotDePasse($dao,$login);

$login="titouan";
testGetMotDePasse($dao,$login);



echo "<br/> <br/>";

echo "######################################### <br/>";
echo "test de verifieMotDePasse <br/>";
echo "######################################### <br/> <br/>";
$login="toto";
$mdp="toto";

testVerifieMotDePasse($dao,$login,$mdp);

$login="toto";
$mdp="tutu";

testVerifieMotDePasse($dao,$login,$mdp);
}

catch (ConnexionException $e){
echo "problème de connexion";
}
catch (AccesTableException $e){
echo "problème de d'acces à une table";
}



?>

