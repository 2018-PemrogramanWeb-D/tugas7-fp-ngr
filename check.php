<?php
include("./init.php");
session_start();

$sql = "SELECT `u_password` FROM `user` where u_name='". $_POST["nama"]."'";
$check = $conn->query($sql);
$row = $check->fetch_assoc();
$password = encrpyt($_POST["pass"]);

if( !empty($row) && $password==$row['u_password'])
{
	$_SESSION["loginstatus"]=1;
	$_SESSION["username"]=$_POST["nama"];
	header("Location: /tugas7-fp-ngr/");
}
else 
	{
	$_SESSION["loginstatus"]=-1;
	header("Location: /tugas7-fp-ngr/login.php");
	}
?>
