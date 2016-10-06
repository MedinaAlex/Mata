<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$path = $_SERVER['DOCUMENT_ROOT'] ."/Mata/site/";
require_once("ConnexionException.php");
require_once("AccesTableException.php");
require_once($path."model/bean/Service.php");
require_once($path."model/bean/Utilisateur.php");


class Dao
{  

  private $INSERT_SERVICE = "INSERT INTO service (id, nom, description, dureeminutes, type, categorie, user_id) VALUES (null, ?,?,?,?,?,?)";

  private $INSERT_USER = "INSERT INTO utilisateur (id, nom, prenom, datenaissance, mail, motdepasse) VALUES (null, ?, ?, ?, ?, ?)";

  private $connexion;

  // 	permet d'ouvrir une connexion avec le sgbd
  public function connexion() 
  {
    try
      {
        //connection
        //$this->connexion = new PDO('mysql:host=localhost;charset=UTF8;dbname=trocmonsieur', 'root', '');	//on se connecte au sgbd
        $this->connexion = new PDO('mysql:host=163.172.147.153;charset=UTF8;dbname=trocmonsieur', 'alex', 'vieuxmystere');
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	//on active la gestion des erreurs et d'exceptions

      }
    catch(PDOException $e)
      {
        throw new ConnexionException("Erreur de connection");
      }
    //connection reussie

  }

/* méthode qui permet de récupérer la liste de tous les albums d'un genre donné de la base (avec toutes les infos disponibles)

si le genre correspond à un genre dans la table album, un tableau d'objet de type Album est retourné
sinon null est retourné

*/
 
  public function getListeServiceByType($type) 
  {
    $services = array();

    try {
      $this->connexion();
      $stmt = $this->connexion->query("SELECT * FROM service where type = '$type'");
      $services = $stmt->fetchAll(PDO::FETCH_CLASS, "Service");

      $this->deconnexion();
      return $services;

    }catch (AccesTableException $e) {
      echo $e->afficher();
    }catch (ConnexionException $e){
      echo $e->afficher();
    }
  }

  public function getListeService() 
  {
    $services = array();

    try {
      $this->connexion();
      $stmt = $this->connexion->query("SELECT * FROM service");
      $services = $stmt->fetchAll(PDO::FETCH_CLASS, "Service");

      $this->deconnexion();
      return $services;

    }catch (AccesTableException $e) {
      echo $e->afficher();
    }catch (ConnexionException $e){
      echo $e->afficher();
    }
  }

  public function getListeServiceSort($type, $categorie) 
  {
    $services = array();

    try {
      $this->connexion();
      $stmt = $this->connexion->query("SELECT * FROM service where type = '$type' AND categorie = '$categorie'");
      $services = $stmt->fetchAll(PDO::FETCH_CLASS, "Service");

      $this->deconnexion();
      return $services;

    }catch (AccesTableException $e) {
      echo $e->afficher();
    }catch (ConnexionException $e){
      echo $e->afficher();
    }
  }

  public function getListeServiceByCategorie($categorie) 
  {
    $services = array();

    try {
      $this->connexion();
      $stmt = $this->connexion->query("SELECT * FROM service where categorie = '$categorie'");
      $services = $stmt->fetchAll(PDO::FETCH_CLASS, "Service");

      $this->deconnexion();
      return $services;

    }catch (AccesTableException $e) {
      echo $e->afficher();
    }catch (ConnexionException $e){
      echo $e->afficher();
    }
  }

  public function getListeUtilisateur() 
  {
    $services = array();

    try {
      $this->connexion();
      $stmt = $this->connexion->query("SELECT * FROM utilisateur");
      $users = $stmt->fetchAll(PDO::FETCH_CLASS, "Utilisateur");

      $this->deconnexion();
      return $users;

    }catch (AccesTableException $e) {
      echo $e->afficher();
    }catch (ConnexionException $e){
      echo $e->afficher();
    }
  }


/* méthode qui permet de récupérer un album dans la base ayant un certain identifiant (avec toutes les infos disponibles)

 si l'identifiant en paramètre correspond à un album de la base, un objet de type Album est retourné
 sinon null est retourné
*/
  public function getService($id)  {
    
    try {
      $this->connexion();
      $stmt = $this->connexion->query("SELECT * FROM service where id = '$id'");
      $services = $stmt->fetchall(PDO::FETCH_CLASS, "Service");

      $this->deconnexion();
      if($services!=null){
        return $services[0];
      }
      else{
        return null;
      }

    }catch (AccesTableException $e) {
      echo $e->afficher();
    }catch (ConnexionException $e){
      echo $e->afficher();
    }  
  }

  public function getUtilisateur($id)  {
    
      $this->connexion();
      $stmt = $this->connexion->query("SELECT * FROM utilisateur where id = '$id'");
      $users = $stmt->fetchall(PDO::FETCH_CLASS, "Utilisateur");

      $this->deconnexion();
      if($users!=null){
        return $users[0];
      }
      else{
        return null;
      }
  }

  public function insertService($nom, $description, $dureeminutes, $type, $categorie)
  {
    if(isset($_SESSION['id_user'])){
      $id_user = $_SESSION['id_user'];
      if (is_array($id_user)) {
          $id_user = $id_user[0];
      }
    }
    else{
      $id_user = 4;
    }
    $this->connexion();
    $sth = $this->connexion->prepare($this->INSERT_SERVICE);
    $sth->execute(array($nom, $description, $dureeminutes, $type, $categorie, $id_user));
  }

  public function insertUtilisateur($nom, $prenom, $datenaissance, $mail, $motdepasse)
  {
    $this->connexion();
    $sth = $this->connexion->prepare($this->INSERT_USER);
    $sth->execute(array($nom, $prenom, $datenaissance, $mail, md5($motdepasse)));
  }

  public function sessionId(){
    if(isset($_SESSION['mail'])){
      $mail = $_SESSION['mail'];
      $this->connexion();
      $stmt = $this->connexion->query("SELECT id FROM utilisateur where mail = '$mail'");
      $users = $stmt->fetchall();
      $_SESSION['id_user'] = $users[0];
    }
  }

/* méthode qui permet d'obtenir un mot de passe dans la base associé à un certain login

si le login est associé à un mot de passe dans la table une chaine de caractère contenant le mot de passe est renvoyé
sinon null est renvoyé
*/
  public function getMotDePasse($mail)  {
     try {
      $this->connexion();
      $stmt = $this->connexion->query("SELECT * FROM utilisateur where mail = '$mail'");
      $mdp = $stmt->fetchall(PDO::FETCH_COLUMN, 5);
  
      $this->deconnexion();
      if($mdp!=null){
        return $mdp[0];
      }
      else{
        return null;
      }

    }catch (AccesTableException $e) {
      echo $e->afficher();
    }catch (ConnexionException $e){
      echo $e->afficher();
    }  
    
  }


//si le login est associé à un mot de passe dans la table la valeur true est renvoyée, false sinon

  public function verifieMotDePasse($login, $password)  {
      $mdp = $this->getMotDePasse($login);

      if($mdp == md5($password)){ 
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
