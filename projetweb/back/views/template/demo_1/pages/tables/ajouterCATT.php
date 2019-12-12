<?php 
include_once '../../../../../core/catC.php';


if(  isset($_POST['nom']) )
{

	$categorieC = new category( $_POST['nom'] );
        $categorie1C = new categorieC();
        $categorie1C->ajouterCategorie($categorieC);
        header("location:category.php") ;
   	      	
}		
	

else 
{
	echo "Champs Obligatoire";
}





 ?>