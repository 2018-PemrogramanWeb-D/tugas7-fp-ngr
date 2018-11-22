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
					<th colspan="3">Tekken</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="6"><img src="https://vignette.wikia.nocookie.net/logopedia/images/6/67/Tekken-7-logo-wallpaper.jpg/revision/latest?cb=20140719134807" /></a></td>
				</tr>
				<tr><td>Nama</td><td>Tekken</td></tr>
				<tr><td>Developer</td><td>Bandai Namco</td></tr>
				<tr><td>publisher</td><td>Bandai Namco</td></tr>
				<tr><td>Platform</td><td>Arcade, XBOX one,PC, PS4</td></tr>
				<tr><td>Release Date</td><td>5-Juni-2015</td></tr>
			</tbody>
		</table>
		<p>Review game,<br>Game Series tekken dikenal sebagai salah satu game fighting terbaik, dengan mekanisme yang hamper disesuaikan dengan tubuh. Maksud disesuaikan dengan tubuh adalah setiap tombol di kontroler seperti PS4, di atur sesuai dengan anggota tubuh, misalnya tombol persegi untuk tangan kanan, tombol segitiga untuk tangan kiri, tombol lingkaran untuk kaki kanan, tombol silang atau ‘x’ untuk kaki kiri. Ada juga variasi tombol seperti ‘x’ dan lingkaran, yang akan mengeluarkan gerakan tertentu<br>
		Pada series yang ke tujuh ini, tekken membawakan cerita kazuya dan heihachi,ayahnya. Dalam cerita ini, seluk beluk keluarga heihachi dan kazuya dijelaskan. Story-telling di game ini jauh lebih baik daripada game-game sebelumnya karena pada kali ini, cerita yang dipaparkan tidak hanya melalui ilustrasi, tetapi dikemas dalam bentuk film. <br>
		</p>
		
		<table  class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th colspan="3">Verdict</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="4"><img src="../content/7.svg"></td>
				</tr>
				<tr><td>Graphics</td><td>7/10</td></tr>
				<tr><td>GamePlay</td><td>8/10</td></tr>
				<tr><td>Story</td><td>7/10</td></tr>
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