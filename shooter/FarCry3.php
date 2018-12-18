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
					<th colspan="3">FarCry3</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="6"><img src="https://www.euronics.ee/UserFiles/Products/Images/87399-far-cry-3.jpg" /></a></td>
				</tr>
				<tr><td>Nama</td><td>FarCry3</td></tr>
				<tr><td>Developer</td><td>Ubisoft Montreal, Massive Entertainment</td></tr>
				<tr><td>publisher</td><td>Ubisoft</td></tr>
				<tr><td>Platform</td><td> PlayStation 4, PlayStation 3, Xbox 360, Microsoft Windows, Xbox One</td></tr>
				<tr><td>Release Date</td><td>29 November 2012</td></tr>
			</tbody>
		</table>
		<p>Review game, <br>
		FarCry 3 adalah salah satu game terbaik dari franchise farcry. Diceritakan player akan memainkan character bernama Jason Brody, dimana dia Bersama teman-teman dan saudaranya pergi berlibur ke sebuah pulau terpencil, awalnya mereka bersenang-senang, sampai tiba-tiba, semua teman-teman Jason di tangkap bajak laut. Pada game ini, Jason bertekad untuk menyelamatkan teman-temannya dari bos bajak laut, vaas, yang terkenal kejam.
		<br>
		Game ini termasuk dalam kriteria open-world, artinya player dapat menjelajahi dunia yang diciptakan oleh game tersebut. Game open-world ini juga memberikan beberapa fitur yang tidak dimiliki farcry2, seperti crafting item, hunting, learning skill dan agricultural untuk membantu player. Game ini membawakan tema stealth-shooter juga, player dituntut untuk membunuh musuh menggunakan beberapa cara, bisa melalui stealth atau langsung tembak. Senjata-senjata yang disediakan berupa rifle, shotgun, sniper bahkan panah, tinggal player yang menentukan akan menggunakan senjata apa. 
		<br>
		Dari segi gameplay, game ini membawakan misi atau tugas-tugas yang sangat seru cocok bagi para pencinta game shooter, ada suatu saat player diminta untuk membakar ‘rumput’ dengan flamethrower diiringi lagu Skrillex, misi ini menjadi salah satu misi yang paling ikonik. Setiap misi yang disediakan, akan berpengaruh pada cerita game ini.
		<br>
		Cerita yang dikemas termasuk menarik, tetapi sayangnya terlalu singkat. Cerita di game ini semakin menarik karena kedatangan sang protagonist utama, vaas, yang menjadi ikon dari game ini. Sifat lunatic dan kejam vaas dapat membuat cerita yang dibawakan lebih terasa hidup, sering sekali vaas bertingkah ‘gila’ didepan karakter utama. 
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
				<tr><td>GamePlay</td><td>8/10</td></tr>
				<tr><td>Story</td><td>9/10</td></tr>
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
</body>
</html>