<?php 
require_once 'C:\wamp\www\projetweb\back/config.php';
require_once 'C:\wamp\www\projetweb\back/entities/cat.php';
class categorieC
{

	public function ajouterCategorie($categorie)
	{
		$sql="INSERT INTO `produitsCategorie` ( `nom`) VALUES ( :nom);";
		$cnx=config::getConnexion();
 	try{
 	$req=$cnx->prepare($sql); 
 	$req->bindValue(':nom',$categorie->getnom());
 
 	$req->execute();

	}
	 
 catch(Exception $e){
   echo "erreur: ". $e->getMessage();
 }}

 public function afficherCategorie($categorie)
	{ echo "nom : ".$categorie->getNom()."<br>";


}
public function listeCategories()
 {
 	$db=Config::getConnexion();
 	$sql="SELECT * FROM produitsCategorie";
 	$result=$db->query($sql); //pour la lecture
 	return $result;
 }

 public function afficherModifierCategorie($idP)
 {
        $db = config::getConnexion();
		$sql = 'SELECT * FROM produitscategorie WHERE idProduitsCategorie = "'.$idP.'"';
		$result = $db->query($sql);
		return $result->fetchAll();
 }
 public function modifierCategorie($categorie,$idp)
	{
		$db = config::getConnexion();
		$sql = "UPDATE produitscategorie SET nom=:nom WHERE idProduitsCategorie=:idProduitsCategorie";
		$req = $db->prepare($sql);


 			$req->bindValue(':nom',$categorie->getnom());
 			$req->bindValue(':idProduitsCategorie',$idp);

	try{
		
 	$req->execute();
 	

	}
	 
 catch(Exception $e){
   echo "erreur: ". $e->getMessage();
 }}

public function supprimerCategorie($id)
	{
		$db = config::getConnexion();
		$sql = 'DELETE FROM produitsCategorie WHERE idProduitsCategorie = :idProduitsCategorie';
		$req = $db->prepare($sql);
		$req->bindValue(':idProduitsCategorie',$id);
		$req->execute();
		
	}
public function nomCategories($id)
 {
 	$db=Config::getConnexion();
 	$sql="SELECT * FROM produitsCategorie JOIN produit ON idProduitsCategorie = :idProduitsCategorie";
 	$result=$db->query($sql); //pour la lecture
 	return $result;
 }
public function listePromos()
 {
 	$db=Config::getConnexion();
 	$sql="SELECT * FROM promotion";
 	$result=$db->query($sql); //pour la lecture
 	return $result;
 }


}


 ?>