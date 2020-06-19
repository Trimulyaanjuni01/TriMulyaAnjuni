<?php
include_once "app/Controller.php";
include_once "app/Logout.php";

$login = new logout();

	$logout->logout();
	header("location:index.php");
} 

?>