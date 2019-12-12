<?php


//include_once '../entities/Categorie.php';
include_once '../core/UtilisateurC.php';

if(isset($_GET['login']) && isset($_GET['password']))
{
	$utilisateurC = new UtilisateurC();
	$result = $utilisateurC->verifierLogin($_GET['login'],$_GET['password']);
	if($result->count==0)
	{
		echo "laaaaaa";
	}
	else
	{



	if($result->role == 0){
    session_start();
		$_SESSION['login'] = $result->login;
        echo '<script>location.replace("profile.php")</script>';
	}else{
		if($result->role == 1){
			    session_start();
		$_SESSION['login'] = $result->login;
        echo '<script>location.replace("../../back/views/template/demo_1/pages/tables/users.php")</script>';
		}
	}
	 



	 }

}else{

	echo "noooooo";
}






 ?>