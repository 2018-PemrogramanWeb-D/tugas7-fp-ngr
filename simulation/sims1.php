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
					<th colspan="3">The Sims</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="5"><img src="https://vignette.wikia.nocookie.net/logopedia/images/9/93/The_Sims_logo.png/revision/latest?cb=20130506192016" alt="Superstar Saga" /></a></td>
				</tr>
				<tr><td>Developer</td><td>Maxis</td></tr>
				<tr><td>Publisher</td><td>Electronic Arts</td></tr>
				<tr><td>Platform</td><td>PC</td></tr>
				<tr><td>Release Date</td><td>January 31 2001</td></tr>
			</tbody>
		</table>
		<p>
            Setelah mengerjakan beberapa seri untuk SimCity, mereka beranjak menuju sesuatu yang berbeda.<br>
            Will Wright membuat simulasi yang sangat berbeda, yaitu simulasi kehidupan manusia.<br>
            
        </p>
        <h3>Permainan</h3>
        <p>
            <img src="http://www.mobygames.com/images/shots/l/4284-the-sims-windows-screenshot-create-a-sim-punk-grannys.jpg" alt="charas"><br>
            Dimulai dengan pembuatan sim (manusia), anda membuat penampakan karakter dan sifat mereka.<br>
            Anda diberi kebebasan untuk membuat berapa sim beserta dengan hubungannya.<br><br>
            <img src="https://i2.wp.com/www.platinumsimmers.com/wp-content/uploads/2014/02/BELLAAAAAAA.jpg" alt="interact"><br>
            Karena ini simulasi, anda diberikan kebebasan pula untuk mengatur kehidupan mereka, membangun rumah, dsb.<br>
            Tetapi, jika anda ingin mereka bahagia, anda harus memenuhi kebutuhan sehari-hari, kerja, sosial, dsb.<br>
            Mungkin ini kurang variatif dan primitif, tetapi ingat ini permainan tahun 2000.<br>
            Menurutku, permainan ini cukup bervariatif dan bisa membuat anda bermain selama berjam-jam seperti SimCity, namun lebih personal dan mudah (tidak mengatur kota-kota).<br>
        </p>
        <h3>Aestetis</h3>
        <p>
            <img src="http://theplumbobsite.files.wordpress.com/2015/06/sims1-10.jpg" alt="pet">
            <img src="https://d26bwjyd9l0e3m.cloudfront.net/wp-content/uploads/2014/11/The-Sims-Screenshot-6.jpg" alt="party">
            <img src="https://www.oldpcgaming.net/wp-content/gallery/the-sims/23_1.jpg" alt="paint"><br>
            Menggunakan 3D model untuk karakter dan pre-rendered untuk lainnya, aestetisnya sangat "millenial awal".<br>
            Ini untuk mengurangi resource sehingga spec standar dari tahun 2000 tidak perlu berat-berat.<br>
            Mungkin kurang bagus, tetapi cukup ngeblend 3D dan pre-rendered.<br>
        </p>
        <h3>Suara</h3>
        <p>
            Lagu bersemangat, lagu santai, lainnya, semua lagu terdengar sangat nyaman.<br>
            <iframe width="478" height="269" src="https://www.youtube.com/embed/a_j2PpZKIJw?list=PLFD0B65AF1A236E8C" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
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
                <tr><td>Gameplay</td><td>8/10</td></tr>
				<tr><td>Graphics</td><td>7/10</td></tr>
                <tr><td>Sounds</td><td>8/10</td></tr>
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