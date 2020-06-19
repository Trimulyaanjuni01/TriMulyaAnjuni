<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<center>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/login.css">
	<div class="kotak_login">
		<p class="tulisan_login"><h2>SILAHKAN LOGIN<h2></p>
		<div class="">
	<form action="">
	</div>
</head>
<body>
<center>
<form method="POST" action="login_proses.php">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>

		<tr>
			<td>Password</td>
			<td><input type="password" name="pass"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="tlogin" value="login"></td>
		</tr>
	</table>
</form>
</center>