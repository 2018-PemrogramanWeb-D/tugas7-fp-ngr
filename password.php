

<!DOCTYPE html>
<?php

	include("./init.php");
	include("./search_fun.php");

?>
<html lang="id" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="CSS.css">
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
		<?php include 'header.php';?>
	</div>


	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
		<?php include 'navbar.php';?>
	</nav>
	
	<?php
include("./init.php");
$sql = "SELECT `u_password` FROM `user` where u_name='". $_SESSION["username"]."'";
$check = $conn->query($sql);
$row = $check->fetch_assoc();

if($_POST["pass"]==$row['u_password'])
{
	if($_POST["password1"]==$_POST["password2"]) $sql = "UPDATE user SET u_password='".$_POST["password1"]."' WHERE u_name= '".$_SESSION["username"]."'";

if ($conn->query($sql) === TRUE) {
    echo "Berhasil mengubah!";
} 
else {
    echo "Error";
}
}
else 
	{
		echo "password Salah";
	}
?>

</body>
</html>