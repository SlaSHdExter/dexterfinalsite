<?php
class Client{
	private $nom;
	private $prenom;
	private $tel;
	private $adresse;
	private $codePostal;
	private $sexe;
	private $cin;
	private $email;
	private $login;
	private $password;
	private $etat;
    private $role;
	
	public function getnom(){
		return $this->nom;
	}
	public function getprenom(){
		return $this->prenom;
	}
	public function gettel(){
		return $this->tel;
	}
	public function getadresse(){
		return $this->adresse;
	}
	public function getcodePostal(){
		return $this->codePostal;
	}
	public function getsexe(){
		return $this->sexe;
	}
	public function getcin(){
		return $this->cin;
	}
	public function getemail(){
		return $this->email;
	}
	public function getlogin(){
		return $this->login;
	}
	public function getpassword(){
		return $this->password;
	}

    	
	public function getetat(){
		return $this->etat;
	}
	
	public function getrole(){
		return $this->role;
	}
	

	public function setnom($nom){
		$this->nom=$nom;
	}
	public function setprenom($prenom){
		$this->prenom=$prenom;
	}
	public function settel($tel){
		$this->tel=$tel;
	}
	public function setadresse($adresse){
		$this->adresse=$adresse;
	}
	public function setcodePostal($codePostal){
		$this->codepostal=$codePostal;
	}
	public function setsexe($sexe){
		$this->sexe=$sexe;
	}
	public function setcin($cin){
		$this->cin=$cin;
	}
	
	public function setemail($email){
		$this->email=$email;
	}

	public function setlogin($login){
		$this->login=$login;
	}

	public function setpassword($password){
		$this->password=$password;
	}
	
		public function setetat($etat){
		$this->etat=$etat;
	}
	
	public function setrole($role){
		$this->role=$role;
	}


	public function __construct($nom,$prenom,$tel,$adresse,$codePostal,$sexe,$cin,$email,$login,$password,$etat,$role)
{
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;
		$this->adresse=$adresse;
		$this->codePostal=$codePostal;
		$this->sexe=$sexe;
		$this->cin=$cin;
		$this->email=$email;
		$this->login=$login;
		$this->password=$password;
		$this->etat=$etat;
	
		$this->role=$role;
		
	
}
}
?>