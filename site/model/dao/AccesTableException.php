<?php



class AccesTableException extends Exception
{
	private $chaine;

	public function __construct($chaine)
	{
		$this->chaine=$chaine;
	}

	public function afficher()
	{
		return $this->chaine;
	}


}

?>
