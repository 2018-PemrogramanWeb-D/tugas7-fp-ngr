<!DOCTYPE html>
<?php
	include('..\init.php');
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
					<th colspan="3">Touhou 12.3 Hisoutensoku</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="5"><img src="https://en.touhouwiki.net/images/7/72/Th123.jpg" width="504px" height="599px" alt="front" /></a></td>
				</tr>
				<tr><td>Developer</td><td>Twilight Frontier / Team Shanghai Alice</td></tr>
				<tr><td>Publisher</td><td>Twilight Frontier / Team Shanghai Alice</td></tr>
				<tr><td>Platform</td><td>Windows</td></tr>
				<tr><td>Release Date</td><td>15th August 2009 (Comiket 76)</td></tr>
			</tbody>
		</table>
		<p>
        Taukah Touhou? Singkatnya, franchise ini aslinya adalah permainan bergenre SHMUP (Shoot-Em-Up) dari Shanghai Alice, dimana anda menembak musuh dan menghindari serangan lawan.<br>
        Namun, studio Tasofro dengan ZUN (Shanghai Alice) memiliki ide dan membuat spinoff franchise bergenre Fighting. Saat itu, setelah rilis Touhou 8, mereka rilis Touhou 7.5.<br>
        Beberapa tahun kemudian, mereka membuat spinoff Fighting lagi (sebelumnya 10.5 dan setelah rilis 12), yaitu 12.3<br>
        </p>
        <h3>[Gameplay]</h3>
        <p>
		<br>
        12.3 Adalah sebuah spinoff lebih singkat, dikarenakan ini bisa dibilang sebuah "Expansion" dari 10.5. Game mechanicnya sama dengan spinoff fighting sebelumnya.<br>
        <div style="margin: 5px 20px 20px;">
            <div class="smallfont" style="margin-bottom: 2px;">
                <b>Fighting</b>:
                <input value="Buka" style="margin: 0px; padding: 0px; width: 55px; font-size: 12px;" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Tutup'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Buka'; }" type="button">
            </div>
            <div class="alt2" style="border: 1px inset ; margin: 0px; padding: 6px;">
            <div style="display: none;">
            Tidak seperti permainan lain yang lambat dan berat dalam kombinasi dan/atau kombo, karakter dalam permainan ini sangat mobile dan tidak perlu kombinasi yang banyak.<br>
            Cara bermain dalam permainan ini cocok untuk pemain pemula seperti saya.<br>
            Anda memiliki 2 serangan; Physical dan Magic (yang memiliki dua jenis)<br>
            Bergantung pada karakter, jenis serangan tersebut memiliki efek yang berbeda.<br>
            Namun, secara umum;
            Physical adalah serangan jarak dekat. Serangan ini bisa memliki knockback dan/atau damage yang tinggi.<br>
            Magic adalah serangan jarak dekat - jauh yang akan memakan MP Bar. Dibagi menjadi 2, yaitu Low dan High. Memiliki efek, range, dan damage yang bervariasi.<br>
            Low dan High yang dimaksud adalah tingkat konsumsi MP Bar.<br>
            Anda juga bisa terbang (tetapi memakan MP Bar), untuk menghindar ataupun air-combo.<br>
            Setiap karakter memiliki varietas serangan yang unik, jadi jangan lupa coba untuk bermain dengan semua karakter.<br>
            </div>
            </div>
        </div>
        <div style="margin: 5px 20px 20px;">
            <div class="smallfont" style="margin-bottom: 2px;">
                <b>Weather</b>:
                <input value="Buka" style="margin: 0px; padding: 0px; width: 55px; font-size: 12px;" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Tutup'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Buka'; }" type="button">
            </div>
            <div class="alt2" style="border: 1px inset ; margin: 0px; padding: 6px;">
            <div style="display: none;">
            Cerita 10.5 adalah cuaca yang kacau, jadi kondisi arena berubah tergantung pada cuaca.<br>
            Cuaca dan efek akan ditunjukkan dalam permainan dengan hitungan mundur.<br>
            Jika waktu habis, maka antara diberikan cooldown (tidak ada efek sama sekali) atau beralih ke cuaca selanjutnya (yang random).<br>
            </div>
            </div>
        </div>
        <div style="margin: 5px 20px 20px;">
            <div class="smallfont" style="margin-bottom: 2px;">
                <b>Card Deck</b>:
                <input value="Buka" style="margin: 0px; padding: 0px; width: 55px; font-size: 12px;" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Tutup'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Buka'; }" type="button">
            </div>
            <div class="alt2" style="border: 1px inset ; margin: 0px; padding: 6px;">
            <div style="display: none;">
            Yang bikin lebih bebas sesuai style bermain anda adalah menggunakan sistem ini. Anda harus membuat sebuah deck (tumpukan kartu) untuk dimunculkan.<br>
            Kartu setiap karakter berbeda, yang mempresentasikan kekuatannya.<br>
            Saat membuat deck, yang anda perhatikan adalah card consumption dan jenis kartu.<br>
            Slot untuk deck terbatas dengan banyaknya kartu.<br><br>
            Jenis kartu ada 3; System, Skill, dan Spell<br>
            System, dimana efeknya kecil dan menambah status sementara (seperti MP Bar unlimited, dsb)<br>
            Skill, di mana kartu ini menggantikan kombinasi input yang menghasilkan serangan unik.<br>
            Spell, di mana kartu ini mengeluarkan serangan yang spesial (self-explanatory).<br>
            Saat menggunakan kartu, kartu anda akan mengkonsumsi kartu diri dan lain.<br>
            Lebih kuat, lebih banyak kartu yang akan dikonsumsi (Maksimal 5 termasuk diri sendiri).<br>
            </div>
            </div>
        </div>
        Secara keseluruhan, dengan karakter yang mobile (dan kecil), pilihan deck yang banyak, varietas karakter, dan sistem weather yang optional, permainan ini sangat seru dimainkan.<br>
        </p>
        <h3>[Aestethic]</h3>
        <p>
		<br>
		<img src="https://cdn.thegamesdb.net/images/original/screenshots/7666-4.jpg" alt="meiling"><img src="https://shiverstuff.files.wordpress.com/2009/08/touhou123_9.png" alt="cirno"><img src="https://www.4gamer.net/games/128/G012873/20110214038/SS/003.png" alt="sakuya"><br><br>
        Background dan karakter tidak terlihat menyatu, memberi kesan sedikit aneh.<br>
        Untuk perbandingan permainan lain waktu itu, bukanlah permainan fighting yang paling indah.<br>
        Namun, semua karakter menunjukkan sifat mereka yang bagus dengan ekspresi dan animasinya.<br>
        Juga, setidaknya efek serangan semua karakter terlihat indah dan menyakitkan.<br>
        </p>
        <h3>[Sound]</h3>
        <p>
		<br>
        Remix lagu Mainline Touhou dan original terdengar sangat bagus. Ada beberapa lagu yang saya sukai, seperti ini;<br>
        <iframe width="478" height="269" src="https://www.youtube.com/embed/CWzwRtFAf-o?list=PLF4wei_APlbiGTAYCWlmuAJ_B5aRE4h48" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
        Efek suara secara keseluruhan memberi impact input yang anda lakukan dengan baik.<br>
			
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
								<td rowspan="4"><h1>8</h1></td>
							</tr>
							<tr><td>Graphics</td><td>7/10</td></tr>
							<tr><td>Gameplay</td><td>8/10</td></tr>
							<tr><td>Sound</td><td>9/10</td></tr>
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
		<?php }; ?>

	</div>
    <div class="row">
		<div class="col-md-8">
			<div class="comment-form">
					<?php
						if($_SESSION["loginstatus"] == 1)
						echo'<form method ="POST" >
							<textarea placeholder="What are you doing right now?" name="content-comment"></textarea>
							<button type="submit" class="btn btn-success green" name="submit-comment"> Share</button>
						</form>';
						else echo '<h3>Anda perlu login untuk berkomentar</h3>';
						
					?>
			</div>

		</div>
        
    </div>

		<br>
	</div>
</body>
</html>