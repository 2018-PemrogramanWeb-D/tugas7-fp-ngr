<!DOCTYPE html>

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
					<td rowspan="6"><img src="https://images.performgroup.com/di/library/GOAL/da/11/fifa-18-world-cup-update_1muuluhdqyeshz1y22gbiw58s.jpg?t=-1535892213" /></td>
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
			$u_id = $_SESSION['id'];
		
			include('..\comment_fun.php');
			include('..\encrypt_decrypt.php');
			if (($num_comments  = mysqli_num_rows($comment)) > 0){
				echo '<div class=col-sm-12><h4>Ada '."$num_comments".' komentar.</h4></div>';
			while($display_com = mysqli_fetch_assoc($comment)){?>
        <div class="col-sm-12">
            <div class="panel panel-white post">
                <div class="post-heading">
                        <div class="title h5">
                            <b><?php echo decrypt($display_com['u_name'])?></b> made a post.
                        </div>
                        <h6 class="text-muted time"><?php echo $display_com['c_time']?></h6>
                </div> 
                <div class="post-description"> 
                    <p><?php echo $display_com['c_contents']?></p>
                </div>
            </div>
		</div>
			<?php }} 
			else echo '<div class="col-sm-12"><h4>Tidak ada komentar</h4></div>';?>

	</div>
	<?php include '../comment_form.php';?>
		<br>
	</div>
</body>
</html>