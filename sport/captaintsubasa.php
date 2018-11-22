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
					<th colspan="3">Captain Tsubasa</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="6"><img src="https://vignette.wikia.nocookie.net/captaintsubasa/images/6/60/Captain_Tsubasa_%28PS2%29.jpg/revision/latest?cb=20081001031143" /></a></td>
				</tr>
				<tr><td>Nama</td><td>Captain Tsubasa</td></tr>
				<tr><td>Developer</td><td>Bandai</td></tr>
				<tr><td>publisher</td><td>Bandai</td></tr>
				<tr><td>Platform</td><td>  PS2</td></tr>
				<tr><td>Release Date</td><td>19 Oktober 2006</td></tr>
			</tbody>
		</table>
		<p>Review game<br>
		Captain tsubasa adalah game sepak bola tetapi dengan gaya ‘anime’. Pada game bola ini, gameplay sepak bola jauh lebih berbeda daripada biasanya. Disini, bola adalah teman, sepak bola gaya tsubasa, mengabungkan tendangan yang merobek gawang, sleding tackle yang tiba tiba menghilang, dan epic moment dari anime tsubasa seperti tendangan duo tsubasa dan hyuga.
<br>Story yang disediakan mungkin sedikit sulit di pahami karena berbahasa jepang, cobalah untuk menonton animenya. Cerita yang disediakan merupakan perjuangan tsubasa untuk menjadi juara dunia, mulai dari sekolahnya nankatsu sampai team J-league. Didalam pertandingan juga ada storynya, biasanya di sajikan dalam bentuk cutscene didalam game.
<br>Cara bermainnya berbeda dengan bola pada umumnya, di sini, karakter diberika HP dan tidak langsung melakukan tindakan yang akan dilakukan, tetapi akan dipilihkan terlebih dahulu tindakan, seperti oper, oper one-two, menendang, ataupun tendangan special. Tendangan special yang disajikan merupakan salah satu daya Tarik dari game ini, special yang disajikan dalam bentuk cutscene terlihat seru dan menarik, ditambah kombinasi kombinasi antar karakter yang mungkin dibentuk. Cara perebutan bola juga berbeda, player akan dipertandingkan dalam perang ritme dalam system hp, artinya menekan pada waktu yang ditentukan, semakin akurat player menekan, pengurangan HP yang diterima musuh akan jadi lebih besar, namun disini tiap player diberikan kekuatan yang berbeda-beda, sehingga pengurangan hpnya bisa berbeda lagi. Apabila player kehabisan hp, bisa saja kedua-duanya, mereka akan membuang bola, dan player tersebut akan ‘depresi’ sejenak. Tendangan juga menggukanan system ritme, semakin akurat, power bola akan semakin kuat, tetapi apabila kipper dapat mengejar nilai tersebut, bola dapat ditangkis. 
<br>Game ini menyajikan gameplay yang sangat seru, system hp dan cutscene special dari tiap karakter captain tsubasa menarik di tonton.

		
		</p>
		
		<table  class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th colspan="3">Verdict</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="4"><img src="../content/8.svg"></td>
				</tr>
				<tr><td>Graphics</td><td>7/10</td></tr>
				<tr><td>GamePlay</td><td>9/10</td></tr>
				<tr><td>Story</td><td>8/10</td></tr>
			</tbody>
		</table>
		<br>
	</div>
	<br>
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