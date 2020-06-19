<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<center>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/login.css">
	<div class="kotak_login">
		<p class="tulisan_login"><h2>SILAHKAN LOGIN<h2></p>
	<form action="ceklogin.php" method="POST">
		<div class="">
	<form action="">
	</div>
</head>
<body>

<?php

/**
 * 
 */
class login extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function login()
	{
	 	session_start();
	 	$username = $_POST['username'];
	 	$password = $_POST['pass'];
	 	$sql="SELECT * FROM tb_user WHERE user_name = :user_name AND user_pass = :user_pass";
		$stmt = $this->db->prepare($sql)
		$stmt->bindParam(":user_name", $username);
		$stmt->bindParam(":user_pass", $password);
		$stmt->execute();

		$data = $stmt->fetch();
	if($stmt->rowCount() > 0){
		$_SESSION['username'] = $username['username'];
		header("location:index.php");
	} 
	else{
	 	echo "Login tidak ditemukan";
	}

}

}

?>

