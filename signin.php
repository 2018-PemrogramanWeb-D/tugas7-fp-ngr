<!DOCTYPE html>

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
	<nav class="navbar sticky -top navbar-expand-lg navbar-dark bg-primary">
		<?php include 'navbar.php';?>
	</nav>
	<?php if($_SESSION["loginstatus"]==-2)echo "password yang anda masukkan tidak sama!" ; 
	else if($_SESSION["loginstatus"]==-3)echo "username sudah ada!" ; 
	else if($_SESSION["loginstatus"]==-4)echo "email sudah ada!" ; 
	else if($_SESSION["loginstatus"]==-5)echo "error inputing to sql!" ; 
	 ?>
	 <?php if($_SESSION["loginstatus"]==1) header("Location: /tugas7-fp-ngr/");
	else $_SESSION["loginstatus"]=0;?>
	<div class="container">
		<h1>Daftar</h1>
		<form action = "daftar.php" method="post">
			<div class="form-group">
				<label for="InputUsername">Username</label>
				<input type="text" class="form-control" id="username"  placeholder="Masukkan username" name="nama">
			</div>
			<div class="form-group">
				<label for="InputPassword1">Password</label>
				<input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="pass">
			</div>
			<div class="form-group">
				<label for="InputPassword2">Isi Ulang Password</label>
				<input type="password" class="form-control" id="InputPassword2" placeholder="Konfirmasi password" name="pass2">
			</div>
			  <div class="form-group">
				<label for="InputEmail1">Email address</label>
				<input type="email" class="form-control" id="InputEmail1" placeholder="Masukkan email" name="email">
			</div>
		  <button type="submit" class="btn btn-primary">Daftar</button>
		</form>
		<br>
	</div>
</body>
</html>