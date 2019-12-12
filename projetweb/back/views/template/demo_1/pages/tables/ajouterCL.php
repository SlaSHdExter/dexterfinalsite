<?php 
include_once '../../../../../core/clientf.php';


if(  isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel'])&& isset($_POST['adresse'])&& isset($_POST['codePostal'])&& isset($_POST['sexe'])&& isset($_POST['cin'])&& isset($_POST['email'])&& isset($_POST['login'])&& isset($_POST['password']))
{

	$client1 = new client( $_POST['nom'] , $_POST['prenom'],$_POST['tel'],$_POST['adresse'],$_POST['codePostal'],$_POST['sexe'],$_POST['cin'],$_POST['email'],$_POST['login'],$_POST['password'],0,0);
        $client1C = new clientC();
        $client1C->ajouterclient($client1);
        header("location:users.php") ;
   	      	
}		
	

else 
{
	echo "Champs Obligatoire";
}





 ?>