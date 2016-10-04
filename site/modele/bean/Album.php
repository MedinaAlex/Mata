<?php 



class Album
{
	private $auteur;
	private $identifiant;
	private $titre;
	private $genre;
	private $prix;
	private $image;

	public function getAuteur(){
		return $this->auteur;
	}

	public function setAuteur($auteur){
		$this->auteur = $auteur;
	}

	public function getIdentifiant(){
		return $this->identifiant;
	}

	public function setIdentifiant($identifiant){
		$this->identifiant = $identifiant;
	}

	public function getTitre(){
		return $this->titre;
	}

	public function setTitre($titre){
		$this->titre = $titre;
	}

	public function getGenre(){
		return $this->genre;
	}

	public function setGenre($genre){
		$this->genre = $genre;
	}

	public function getPrix(){
		return $this->prix;
	}

	public function setPrix($prix){
		$this->prix = $prix;
	}

	public function getImage(){
		return $this->image;
	}

	public function setImage($image){
		$this->auteur = $auteur;
	}
}
?>
