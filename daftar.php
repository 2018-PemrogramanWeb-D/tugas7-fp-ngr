<?php
include("./init.php");
include("./encrypt_decrypt.php");
session_start();

$sqluser = "SELECT `u_name` FROM `user` where u_name='". encrypt($_POST["nama"])."'";
$sqlemail = "SELECT `u_email` FROM `user` where u_email='". encrypt($_POST["email"])."'";
$checkuser = $conn->query($sqluser);
$rowuser = $checkuser->fetch_assoc();
$checkemail = $conn->query($sqlemail);
$rowemail = $checkemail->fetch_assoc();



if ($_POST["pass2"]!=$_POST["pass"])//password tidak sama
{
	$_SESSION["loginstatus"]=-2;
	header("Location: /tugas7-fp-ngr/signin.php");
}
else if ($checkuser->num_rows > 0)//username sudah ada
{
	$_SESSION["loginstatus"]=-3;
	header("Location: /tugas7-fp-ngr/signin.php");
}
else if ($checkemail->num_rows > 0)//email sudah ada
{
	$_SESSION["loginstatus"]=-4;
	header("Location: /tugas7-fp-ngr/signin.php");
}
else if ($_POST["pass2"]==$_POST["pass"])//succed loggin
{
	
 $sql = "INSERT INTO `user` (u_name,u_password,u_email)
    VALUES ('".encrypt($_POST["nama"])."','".hashing($_POST["pass"])."','".encrypt($_POST["email"])."');";

if($conn->query($sql)===TRUE)
{
	$_SESSION["loginstatus"]=-8;
	header("Location: /tugas7-fp-ngr/login.php");
}
	else 
	{
		$_SESSION["loginstatus"]=-5;
		echo "error";
		header("Location: /tugas7-fp-ngr/signin.php");
	}
	
}



?>