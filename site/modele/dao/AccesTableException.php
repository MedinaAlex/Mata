<?php



class AccesTableException extends Exception
{
	private $chaine;

	public function __construct($chaine)
	{
		$this->chaine=$chaine;
	}

	public function afficherMessage()
	{
		return $this->chaine;
	}


}

?>
