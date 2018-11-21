﻿<!DOCTYPE html>

<html lang="id" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="CSS.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
    <link rel="icon" href="logo.ico">
	<title>NGR - Nice Game Review</title>
<style>
	img{
		width:250px;
		height:150px;
	}

</style>
<body>

	<div class="container-top">
		<?php include 'header.php';?>
		<?php if($_SESSION["loginstatus"]==1) header("Location: /tugas7-fp-ngr/")?>
	</div>

	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
		<?php include 'navbar.php';?>
	</nav>
	<div class="container">
		<?php if($_SESSION["loginstatus"]==-1) echo "Gagal Login";
		else if ($_SESSION["loginstatus"]==-8) echo "Akun berhasil dibuat, Silahkan Login";
		if($_SESSION["loginstatus"]<=1) $_SESSION["loginstatus"]=0;?>
		<h1>Login</h1>
		<form action="check.php" method="post" >
			<div class="form-group">
				<label for="InputUsername">Username</label>
				<input type="text" class="form-control" id="username" name="nama"  placeholder="Masukkan username">
			</div>
			<div class="form-group">
				<label for="InputPassword1">Password</label>
				<input type="password" class="form-control" id="InputPassword1" name="pass" placeholder="Password">
			</div>
		  <input type="submit" class="btn btn-primary"/>
		  
		</form>
		<br>
	</div>
</body>
</html>