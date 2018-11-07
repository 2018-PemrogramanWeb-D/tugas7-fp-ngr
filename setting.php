﻿<!DOCTYPE html>

<html lang="id" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
    <link rel="icon" href="logo.ico">
	<title>NGR - Nice Game Review</title>
<style>
	body{
		background: #00ccff;
		
	}
	.container{
		background: white;
	}
	.navbar{
		margin-bottom:20px;
	}

</style>
<body>
	<div class="container-top">
		<?php include 'header.php';?>
	</div>

	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
		<?php include 'navbar.php';?>
	</nav>
	<div class="container">
		<h1>Setting</h1>
		<h2>login sebagai <?php echo $_SESSION["username"];?></h1>
		<form>
				<div class="form-group">
				<label for="InputFoto">Profile pic</label>
				<input type="imagearc" class="form-control" id="Inputimage" placeholder="Masukkan foto">
			</div>
			<button type="submit" class="btn btn-primary">Ubah</button>
		</form>
		<form action = "/tugas7-fp-ngr/password.php" method ="post">
			<div class="form-group">
				<label for="InputPassword1">Ganti Password</label>
				
				Password Lama<input type="password" class="form-control" id="InputPassword1" placeholder="Password Lama" name ="pass">
				Password Baru<input type="password" class="form-control" id="InputPassword1" placeholder="Password baru" name ="password1">
				Isi Ulang Password Baru <input type="password" class="form-control" id="InputPassword1" placeholder="Password baru" name ="password2">
				<button type="submit" class="btn btn-primary">Ubah</button>
			</div>
		</form>
		<form action = "/tugas7-fp-ngr/email.php" method ="post">
			<div class="form-group">
				<label for="InputEmail1">Email address</label>
				<input type="email" class="form-control" id="InputEmail1" placeholder="Masukkan email baru" name="email">
				<button type="submit" class="btn btn-primary">Ubah</button>
			</div>
		</form>

			
		  
		
		<br>
	</div>
</body>
</html>