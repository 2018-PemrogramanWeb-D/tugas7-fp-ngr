<!DOCTYPE html>
<?php
	include_once('..\init.php');
?>
<html lang="id" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="../CSS.css">
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
	
	.comment-form{
		background: none repeat scroll 0 0 #f5f5f5;
		border-radius: 4px;
		float: left;
		width: 100%;
	}
	.comment-form form {
		float: left;
		width: 100%;
	}
	.comment-form form textarea {
		background: none repeat scroll 0 0 #fff;
		border: medium none;
		border-radius: 4px 4px 0 0;
		float: left;
		font-size: 14px;
		height: 142px;
		padding: 20px;
		width: 100%;
		resize:vertical;
		outline:none;
		border: 1px solid #F2F2F2;
	}

	.panel-white {
	  margin-top: 5px;
	  margin-bottom: 10px;
	  border: 1px solid #dddddd;
	}
	.panel-white  .panel-heading {
	  color: #333;
	  background-color: #fff;
	  border-color: #ddd;
	}

	.post .post-heading {
	  height: 95px;
	  padding: 15px;
	}

	.post .post-description {
	  padding: 15px;
	}
	.post .post-description p {
	  font-size: 14px;
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
		<br>
		<table class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th colspan="3">FIFA2018</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="6"><img src="https://images.performgroup.com/di/library/GOAL/da/11/fifa-18-world-cup-update_1muuluhdqyeshz1y22gbiw58s.jpg?t=-1535892213" /></a></td>
				</tr>
				<tr><td>Nama</td><td>FIFA2018</td></tr>
				<tr><td>Developer</td><td>Electronic Arts</td></tr>
				<tr><td>publisher</td><td>Electronic Arts</td></tr>
				<tr><td>Platform</td><td>  PlayStation 4, Android, Xbox One, PlayStation 3, Xbox 360, Nintendo Switch, Microsoft Windows</td></tr>
				<tr><td>Release Date</td><td>29 september 2017</td></tr>
			</tbody>
		</table>
			<p>Review game<br>
			Fifa 2018 adalah salah satu dari berbagai game bertema sepak bola. Game ini banyak digemari para pecinta sepak bola. Game ini merupakan pengembangan dari fifa 2017, yang merupakan game pengembangan fifa 2016 yang merupakan pengembangan game fifa 2015. Game ini memainkan olahraga popular sebagai nilai jualnya, team-team yang dapat dipilih juga beragam, mulai dari liga inggris, itali, dan sampai piala dunia. Tema piala dunia dipakai karena tahun 2018 merupakan pagelaran piala dunia di Rusia.
			<br>Pada fifa 2018, grafik yang disajikan lebih detail, game play dan system bermainnya tidak terlalu berbeda dengan sebelum-sebelumnya. Tidak direkomendasikan bagi yang tidak suka bola
		</p>
		<div class="container">	
			<div class="row">
				<div class="col-md-8">
					<table  class="table table-striped">
						<thead class="thead-dark">
							<tr>
								<th colspan="3">Verdict</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td rowspan="4"><h1>7</h1></td>
							</tr>
							<tr><td>Graphics</td><td>7/10</td></tr>
							<tr><td>GamePlay</td><td>7/10</td></tr>
							<tr><td>Story</td><td>0/0</td></tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<h3>Komentar</h3>
    <div class="row">
		<?php 
			$u_id = $_SESSION["id"];
			include('..\comment_fun.php');
			
			while($display_com = mysqli_fetch_assoc($comment)){?>
        <div class="col-sm-12">
            <div class="panel panel-white post">
                <div class="post-heading">
                        <div class="title h5">
                            <b><?php echo $display_com['u_name']?></b> made a post.
                        </div>
                        <h6 class="text-muted time"><?php echo $display_com['c_time']?></h6>
                </div> 
                <div class="post-description"> 
                    <p><?php echo $display_com['c_contents']?></p>
                </div>
            </div>
		</div>
		<?php }; ?>

	</div>
    <div class="row">
		<div class="col-md-8">
			<div class="comment-form">
					<?php
						if($_SESSION["loginstatus"] == 1)
						echo'<form method ="POST" action= "/tugas7-fp-ngr/comment_fun.php">
							<textarea placeholder="What are you doing right now?" name="content-comment"></textarea>
							<button type="submit" class="btn btn-success green" name="submit-comment"> Share</button>
						</form>';
						else echo '<h3>Anda perlu login untuk berkomentar</h3>';
						include ('../comment_fun.php');
					?>
			</div>

		</div>
        
    </div>

		<br>
	</div>
</body>
</html>