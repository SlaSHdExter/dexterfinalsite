<?php
class category{
	private $nom;

	
	public function getnom(){
		return $this->nom;
	}



	public function setnom($nom){
		$this->nom=$nom;
	}



	public function __construct($nom)
{
		$this->nom=$nom;

}
}
?>