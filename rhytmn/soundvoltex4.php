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
					<th colspan="3">Sound Voltex IV Heavenly Haven</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="5"><img src="https://static.tvtropes.org/pmwiki/pub/images/sviv_01.jpg" width="504px" height="599px" alt="sdvx" /></a></td>
				</tr>
				<tr><td>Developer</td><td>BEMANI</td></tr>
				<tr><td>Publisher</td><td>KONAMI</td></tr>
				<tr><td>Platform</td><td>Arcade</td></tr>
				<tr><td>Release Date</td><td>December 21st, 2016</td></tr>
			</tbody>
		</table>
		<p style="text-align:center;">
		<img src="http://www1.otogesai.jp/img/volte_jaepo.png" alt="sdvxcabinet"><br>
        BEMANI membuat permainan rhythm lagi yang bernama Sound Voltex.
        </p>
        <h3>[Gameplay]</h3>
        <p>
		<br>
        <img src="http://skiel.pro/blog/i/sdvx_buttons.jpg" alt="tombol"><br>
        Cara bermainnya seperti ini;<br><br>
        <img src="http://skiel.pro/blog/i/sdvx_4/tuto_lasers.png" alt="volume"><br>
        Knob Volume untuk not yang berputar<br><br>
        <img src="http://skiel.pro/blog/i/sdvx_4/tuto_chip_bt.png" alt="tombolbt"><br>
        Tombol BT untuk not putih (tekan atau tahan)<br><br>
        <img src="http://skiel.pro/blog/i/sdvx_4/tuto_chip_fx.png" alt="tombolfx"><br>
        Tombol FX untuk not oranye (tekan atau tahan)<br><br>
        Dengan cara bermain ini, pola yang bisa dibuat sangat banyak dan bisa ribet.<br>
        Ada sebuah bar (effective rate) dan akan terpenuhi jika berhasil input not dengan benar, namun akan berkurang jika gagal input.<br>
        Permainan 1 musik akan dianggap gagal jika effective rate kurang dari 75% setelah musiknya selesai.<br>
        Cara bermain ini mirip dengan OSU! Mania, namun dengan tambahan knob volume.<br><br>

        <img src="http://skiel.pro/blog/i/sdvx_4/start_modes.png" alt="milih"><br>
        Dalam arcade, anda memiliki 2 pilihan utama, yaitu start normal atau dengan generator kartu (jika ada).<br>
        Yang perlu dicatat untuk 3 pilihan di dalam pilihan utama tersebut adalah:<br>
        1. LIGHT START = 3 lagu, tapi jika gagal, akan langsung berakhir permainannya (di bawah level 7).<br>
        2. STANDARD START = 3 + 1 lagu (dengan memenuhi gauge blaster yang akan terisi setiap kali anda bermain 1 musik).<br>
        3. BLASTER START = 4 lagu langsung (lagu ke-4 namany EX).<br>
        Harga generator kartu lebih mahal daripada yang normal dan memiliki 3 pilihan yang sama dengan normal.<br>
        Untuk apakah kartu? tidak ada, hanya untuk koleksi (mendapatkan kartu yang telah diprint dari mesinnya).<br>
        Bermanfaat atau tidak tergantung pada anda.<br>
        <img src="https://pbs.twimg.com/media/CvXAZ-wUEAAL1De.jpg" alt="kartu"><br><br>
        
        
        <iframe width="478" height="269" src="https://www.youtube.com/embed/P3VYLpvjBfg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
        </p>
        <h3>[Aestethic]</h3>
        <p>
		<br>
		<img src="http://skiel.pro/blog/i/sdvx_4/track_select.png" alt="select music"><img src="http://skiel.pro/blog/i/sdvx_4/playfield.png" alt="play"><br><br>
        Untuk seri ini, bertema biru dan laut.<br>
        Memberi kesan yang cerah dan berbeda suasana dari seri sebelumnya (3 Gravity Wars)<br>
        Menu meskipun banyak tulisan jepang, beberapa gambar sudah memberikan petunjuk untuk bermain.<br>
        Untuk in-game, background tidak mengganggu bermain, posisi tombol sudah jelas namun perlu sedikit pembiasaan, dan UI yang lain berada dalam pojok-pojok layar.<br>
        Beberapa setting bisa diatur (seperti warna laser vol dan posisi).<br>

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
								<td rowspan="3"><h1>8</h1></td>
							</tr>
							<tr><td>Graphics</td><td>8/10</td></tr>
							<tr><td>Gameplay</td><td>9/10</td></tr>
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