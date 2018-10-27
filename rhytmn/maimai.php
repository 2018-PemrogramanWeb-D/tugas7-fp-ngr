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
	.card{
		width:250px;
		height:150px;
	}
	img{
		width:250px;
		height:150px;
	}
	.card-link{
		color:white;
	}
	.card-link:hover{
		color:white;
	}
	
	.ovl{
		opacity: 0;
		transition: 0.25s;
	}
	.ovl:hover {
		opacity: 1;
		background: rgb(0,0,0,0.5);
	}
</style>
<body>
	<div class="container-top">
		<?php include '../header.php';?>
	</div>


	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
		<?php include '../navbar.php';?>
	</nav>
	<div class="container">	
		<table class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th colspan="3">Maimai</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="6"><img src="http://tokyologic.info/wp/wp/wp-content/uploads/2015/01/maimai-640x270.jpg" /></a></td>
				</tr>
				<tr><td>Nama</td><td>maimai</td></tr>
				<tr><td>Developer</td><td>Sega</td></tr>
				<tr><td>publisher</td><td>bandai</td></tr>
				<tr><td>Platform</td><td>Arcade</td></tr>
				<tr><td>Release Date</td><td>2012</td></tr>
			</tbody>
		</table>
		<p>Review game, game ini mahal, awas ketagihan ntar nyesel</p>
		
		<table  class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th colspan="3">Verdict</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="4"><h1>8</h1></td>
				</tr>
				<tr><td>Graphics</td><td>6/10</td></tr>
				<tr><td>GamePlay</td><td>10/10</td></tr>
				<tr><td>Story</td><td>0/0</td></tr>
			</tbody>
		</table>
		<br>
	</div>
	<br>
	<div class="container">
		<h3>Komentar</h3>
		<form>
			<input type="text" name="komentar" title="komentar" />
			<input type="submit" value="click" />
		</form>
		<br>
	</div>
</body>
</html>