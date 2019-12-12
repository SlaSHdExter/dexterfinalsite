<?php 
require_once 'C:\wamp\www\projetweb\back/config.php';
require_once 'C:\wamp\www\projetweb\back/entities/client.php';

class clientC
{
	public function ajouterclient($c)
	{
		$sql = 'INSERT INTO utilisateur (nom,prenom,tel,adresse,codePostal,sexe,cin,email,login,password,etat,role) VALUES (:nom,:prenom,:tel,:adresse,:codePostal,:sexe,:cin,:email,:login,:password,:etat,:role)';
		$db = config::getConnexion();
		$req = $db->prepare($sql);

		
		$req->bindValue(':nom',$c->getnom());
		$req->bindValue(':prenom',$c->getprenom());
		$req->bindValue(':tel',$c->gettel());
		$req->bindValue(':adresse',$c->getadresse());
		$req->bindValue(':codePostal',$c->getcodePostal());
		$req->bindValue(':sexe',$c->getsexe());
		$req->bindValue(':cin',$c->getcin());
		$req->bindValue(':email',$c->getemail());
		$req->bindValue(':login',$c->getlogin());
		$req->bindValue(':password',$c->getpassword());
		$req->bindValue(':etat',$c->getetat());
        $req->bindValue(':role',$c->getrole());
        $req->execute();

		//hethi mrigela
	}


	


}




 ?>