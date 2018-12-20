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
	<div class="container-top">
		<?php include '../header.php';?>
	</div>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
		<?php include '../navbar.php';?>
	</nav>
	
<html lang="id" xmlns="http://www.w3.org/1999/xhtml">
<body>
	
	<div class="container">	
		<br>
		<table class="table table-striped">
			
			<tbody>
			<thead class="thead-dark">
				<tr>
					<th colspan="3">Girls' Frontline</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="6"><img src="https://mark.trademarkia.com/logo-images/shanghai-sunborn-network-technology-co/girlsfrontline-87610067.jpg" /></a></td>
				</tr>
				<tr><td>Nama</td><td>Girls' Frontline</td></tr>
				<tr><td>Developer</td><td>MICA team</td></tr>
				<tr><td>publisher</td><td>Sunborn games</td></tr>
				<tr><td>Platform</td><td>Android, iOS</td></tr>
				<tr><td>Release Date</td><td>20 Mei 2016</td></tr>
			</tbody>
		</table>
		<p>Review game<br>
		Girls frontline merupakan game HP, pertama kali di luncurkan di china, game ini berhasil membuka cabang di jepang, Taiwan, korea selatan, dan Amerika. Game ini menceritkan Anda menjadi seorang komandan di jaman era setelah perang dunia tiga, tepatnya 2064. Disini anda berusaha untuk membuka cabang kemiliteran sendiri. Tentara yang anda miliki juga bukan tentara biasa, namun perempuan yang digambarkan seperti senjata! Perempuan ini biasanya di sebut T-doll. Semua t-doll memiliki sifat atau karakter yang mirip dengan ‘pengambaran’ dari senjata berikut, seperti senjata 9a-91, senjata ini terkenal suaranya kecil dan digunakan pada pertarungan di malam hari, kemudian di dalam game, senjata ini memiliki sifat kuudere (pendiam).
<br>T-doll yang disediakan juga beragam, jamannya juga beragam, mulai dari revoler jaman koboi, sampai senjata smg kriss vector. T-doll yang disediakan memiliki visual atau gambar yang beragam, digambarkan dan didesain oleh artist-artis jepang,ciri khas game grinding anime . T-doll juga di kelaskan berdaasarkan kelangkaan, bintang lima langka dan bintang dua paling biasa, kelangkaan itu terkadang berpengaruh kepada kemampuan dan statsnya, tambah lagi, letak dan posisi dari T-doll juga mempengaruhi keefektifitasan formasi, karena disediakan tile buff tiap doll. Walaupun begitu, kelangkaan dari doll belum tentu membuat doll itu sangat kuat, ada doll bintang 2 yang lebih baik daripada doll bintang 5, semua itu tergantung dari komposisi doll dan pengaturan formasi si komandan. 
<br>Cara dasar game ini mirip seperti game grinding pada umumnya, player dituntut untuk tetap melatih dan mengembangkan tiap T-doll agar dapat mengalahkan lawan yang disediakan di stage-stage tersebut. Stage-stage yang disediakan memiliki kesulitan yang semakin meningkat, ada juga stage event yang jauh lebih sulit, tetapi lebih rewarding. Dalam bermain stage, cara bermainnya seperti rpg, player diminta menurunkan beberapa pasukan dan mengerakkan pasukkan dalam beberapa turn saja, maps akan berbentuk seperti graph dan beberapa node musuh akan muncul, player cukup menangkap base musuh, atau melesaikan misi dengan turn tertentu.
<br>Story yang dibawakan sejauh ini dapat dikatakan bagus, story menjelaskan progress kita menjadi komandan distrik, membantuk team elit, dan menjadi salah satu komandan legendaris di cabang militer ini. Story yang dibawakan bersifat deep-dark walaupun dibarengin perempuan-perempuan manis ini. Sifat cerita yang dibawakan ini sangat menarik, namun sayangnya cerita yang disajikan belum release penuh untuk server berbahasa inggris dan jepang. Untuk server Bahasa inggris dan jepang, story yang di release tertinggal sekitar dua tahun.
<br>Game ini berjenis game grinding, jadi untuk player yang berminat, player bisa saja main sampai berbulan-bulan
</p>
		
		<table  class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th colspan="3">Verdict</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="4"><img src="../content/9.svg"></td>
				</tr>
				<tr><td>Graphics</td><td>6/10</td></tr>
				<tr><td>GamePlay</td><td>10/10</td></tr>
				<tr><td>Story</td><td>10/10</td></tr>
			</tbody>
		</table>
		<br>
	</div>
	<br>
	
</body>
</html><div class="container">
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
                    <?php echo "<textarea rows='4' cols='100'>".$display_com['c_contents']."</textarea>"?>	
                </div>
            </div>
		</div>
			<?php }} 
			else echo '<div class="col-sm-12"><h4>Tidak ada komentar</h4></div>';?>

	</div>
	<?php include '../comment_form.php';?>
		<br>
	</div>