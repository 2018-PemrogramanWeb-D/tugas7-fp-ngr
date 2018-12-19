<?php
include("./init.php");
include("./encrypt_decrypt.php");
session_start();
$uName= mysqli_real_escape_string($conn,$_POST["nama"]);
$uEmail= mysqli_real_escape_string($conn,$_POST["email"]);
$uPass= mysqli_real_escape_string($conn,$_POST["pass"]);
$sqluser = "SELECT `u_name` FROM `user` where u_name='".encrypt($uName)."'";
$sqlemail = "SELECT `u_email` FROM `user` where u_email='".encrypt($uEmail)."'";
$checkuser = $conn->query($sqluser);
$rowuser = $checkuser->fetch_assoc();
$checkemail = $conn->query($sqlemail);
$rowemail = $checkemail->fetch_assoc();

if(strlen($_POST["nama"])>=4)
{

if(strlen($_POST["pass"])>=6)
{
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
else if ($_POST["pass2"]==$uPass)//succed loggin
{
	
 $sql = "INSERT INTO `user` (u_name,u_password,u_email)
    VALUES ('".encrypt($uName)."','".hashing($uPass)."','".encrypt($uEmail)."');";

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
}
else 
{$_SESSION["loginstatus"]=-6;
header("Location: /tugas7-fp-ngr/signin.php");
}
}
else 
{$_SESSION["loginstatus"]=-7;
header("Location: /tugas7-fp-ngr/signin.php");
}
?>