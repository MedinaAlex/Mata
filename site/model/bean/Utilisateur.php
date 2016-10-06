<?php 



class Utilisateur
{
    private $id;
    private $nom;
    private $prenom;
    private $datenaissance;
    private $mail;
    private $motdepasse;

    public function getId(){
        return $this->id;
    }

    public function setID($idd){
        $this->id = $id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function getDatenaissance(){
        return $this->datenaissance;
    }

    public function setDatenaissance($date_de_naissance){
        $this->datenaissance = $date_de_naissance;
    }


    public function getMail(){
        return $this->mail;
    }

    public function setMail($mail){
        $this->mail = $mail;
    }

    public function getMotDePasse(){
        return $this->motdepasse;
    }

    public function setMotDePasse($motdepasse){
        $this->motdepasse = $motdepasse;
    }

}
?>
