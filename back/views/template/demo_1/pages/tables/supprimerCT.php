<?php 
include_once '../../../../../core/catC.php';



        $categorie1C = new categorieC();
        $categorie1C->supprimerCategorie($_GET['id']);
        header("location:category.php") ;
   	      	


 ?>