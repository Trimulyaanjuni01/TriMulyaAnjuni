<?php
include_once "app/Controller.php";
include_once "app/Login.php";

$login = new login();

if ($_POST['btn-login']) {
	$login->login();
	header("location:index.php");
} 

?>