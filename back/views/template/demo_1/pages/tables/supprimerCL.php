<?php 
include_once '../../../../../core/clientC.php';



        $client1C = new clientC();
        $client1C->deleteClient($_GET['id']);
        header("location:users.php") ;
   	      	


 ?>