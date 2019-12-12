<?php
session_start();
/*
if(isset($_SESSION['login']))
	{unset($_SESSION['login']);
	header("location: ../views/front/index.php");
	}
else 
	echo 'No Login';

*/



session_destroy();
header("location:login.php");

?>