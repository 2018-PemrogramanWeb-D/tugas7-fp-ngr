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
		 <div class="page-header">
			<h1>Strategy Game</h1>      
		 </div>
		<div class="row">
			
				<?php 
				$sql = "select a_name,a_genre,a_img_link,a_link from articles where a_genre = 'strategy'";
				$content = $conn->query($sql);
				while($row = $content->fetch_assoc())
				{echo '<div class="col-lg-3"><div class="card text-white" >
					<img class="card-img" src="'.$row["a_img_link"].'" alt="Placeholder" />
					<a class="card-link" href="'.$row["a_link"].'">
					<div class="card-img-overlay ovl">
						<h2 class="card-text">'.$row["a_name"].'</h2>
					</div>
					</a>
				</div>
				</div>';
				}
				?>
		  
		 </div>
		
		<br>
	</div>
 
</body>
</html>