<?php

require_once("ConnexionException.php");
require_once("AccesTableException.php");
require_once("./../bean/Album.php");



class Dao
{  
  
  private $connexion;

 
 
 // 	permet d'ouvrir une connexion avec le sgbd
 
 // il suffit de remplacer x par les informations qui vous concernent.
  public function connexion() 
  {
    try
      {
	//connection
	$this->connexion = new PDO('mysql:host=localhost;charset=UTF8;dbname=E145465P','E145465P','E145465P');	//on se connecte au sgbd
	$this->connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);	//on active la gestion des erreurs et d'exceptions
      }
    catch(PDOException $e)
      {
	throw new ConnexionException("Erreur de connection");
      }
    //connection reussie

  }



/* méthode qui permet de récupérer la liste de tous les albums d'un genre donné de la base (avec toutes les infos disponibles)
il faut d'abord ouvrir une connexion au niveau du sgbd
ensuite soumettre la requête adéquate 
fermer la connexion 
renvoyer le résultat obtenu

postconditions:
 
une exception de type ConnexionException est levée s'il y a un problème lors de la connexion au sgbd
une exception de type AccesTableException est levée s'il y a un problème lors de la soumission de la requête

si aucune exception n'est levée: 

si le genre correspond à un genre dans la table album, un tableau d'objet de type Album est retourné
sinon null est retourné

*/
 
  public function getListeAlbum($genre) 
  {
    $albums = array();

    try {
      $this->connexion();
      $stmt = $this->connexion->query("SELECT * FROM album where genre = '$genre'");
      $albums = $stmt->fetchAll(PDO::FETCH_CLASS, "Album");
  
      $this->deconnexion();
      return $albums;
      
    }catch (AccesTableException $e) {
      echo $e.afficher();
    }catch (ConnexionException $e){
      echo $e.afficher();
    }
  }


/* méthode qui permet de récupérer un album dans la base ayant un certain identifiant (avec toutes les infos disponibles)
il faut d'abord ouvrir une connexion au niveau du sgbd
ensuite soumettre la requête adéquate 
fermer la connexion 
renvoyer le résultat obtenu

postconditions:

une exception de type ConnexionException est levée s'il y a un problème lors de la connexion au sgbd
une exception de type AccesTableException est levée s'il y a un problème lors de la soumission de la requête

si aucune exception n'est levée:
 si l'identifiant en paramètre correspond à un album de la base, un objet de type Album est retourné
 sinon null est retourné
*/
  public function getAlbum($identifiant)  {
    
    try {
      $this->connexion();
      $stmt = $this->connexion->query("SELECT * FROM album where identifiant = '$identifiant'");
      $albums = $stmt->fetchall(PDO::FETCH_CLASS, "Album");
  
      $this->deconnexion();
      if($albums!=null){
        return $albums[0];
      }
      else{
        return null;
      }


      
    }catch (AccesTableException $e) {
      echo $e.afficher();
    }catch (ConnexionException $e){
      echo $e.afficher();
    }  
}
        

/* méthode qui permet d'obtenir un mot de passe dans la base associé à un certain login
il faut d'abord ouvrir une connexion au niveau du sgbd
ensuite soumettre la requête adéquate 
fermer la connexion 
renvoyer le résultat obtenu 

postconditions:
une exception de type ConnexionException est levée s'il y a un problème lors de la connexion au sgbd
une exception de type AccesTableException est levée s'il y a un problème lors de la soumission de la requête

si aucune exception n'est levée:
si le login est associé à un mot de passe dans la table une chaine de caractère contenant le mot de passe est renvoyé
sinon null est renvoyé
*/
  public function getMotDePasse($login)  {
     try {
      $this->connexion();
      $stmt = $this->connexion->query("SELECT * FROM identification where login = '$login'");
      $mdp = $stmt->fetchall(PDO::FETCH_COLUMN, 2);
  
      $this->deconnexion();
       if($mdp!=null){
        return $mdp[0];
      }
      else{
        return null;
      }
      
    }catch (AccesTableException $e) {
      echo $e.afficher();
    }catch (ConnexionException $e){
      echo $e.afficher();
    }  
    
  }
  
  

 /* méthode qui permet de vérifier si un login donné correspond bien au mot de passe passé en paramètre
  les mots de passe ont été cryptés dans la base avec crypt() en php.
 
 postconditions:
 
 une exception de type ConnexionException est levée s'il y a un problème lors de la connexion au sgbd
une exception de type AccesTableException est levée s'il y a un problème lors de la soumission de la requête

si aucune exception n'est levée, 
si le login est associé à un mot de passe dans la table la valeur true est renvoyée, false sinon
*/
  public function verifieMotDePasse($login, $password)  {
      $mdp = $this->getMotDePasse($login);
      if($mdp == crypt($password, $mdp)){
        return true;
      }
      else{
        return false;
      }
  }


  //méthode permettant la deconnexion du sgbd
  public function deconnexion()
  {
    $this->connexion = null;
  }
	


}

?>
