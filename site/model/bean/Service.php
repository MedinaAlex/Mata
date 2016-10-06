<?php 



class Service
{
	private $id;
	private $nom;
	private $description;
	private $dureeminutes;
	private $categorie;
	private $type;
	private $user_id;

	public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId_user(){
        return $this->user_id;
    }

    public function setId_user($id_user){
        $this->user_id = $id_user;
    }
    
	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function getDuree(){
		return $this->dureeminutes;
	}

	public function setDuree($duree){
		$this->dureeminutes = $duree;
	}

	public function getCategorie(){
		return $this->categorie;
	}

	public function setCategorie($categorie){
		$this->categorie = $categorie;
	}

	public function getType(){
		return $this->type;
	}

	public function setType($type){
		$this->type = $type;
	}
}
?>
