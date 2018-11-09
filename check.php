<?php
include("./init.php");
include("./encrypt_decrypt.php");
session_start();

$sql = "SELECT `u_password`,`u_id` FROM `user` where u_name='". encrypt($_POST["nama"])."'";
$check = $conn->query($sql);
$row = $check->fetch_assoc();

if( !empty($row) && hashing($_POST['pass'])==$row['u_password'])
{
	$_SESSION["loginstatus"]=1;
	$_SESSION["username"]=$_POST["nama"];
	$_SESSION["id"]=$row['u_id'];
	header("Location: /tugas7-fp-ngr/");
}
else 
	{
	$_SESSION["loginstatus"]=-1;
	header("Location: /tugas7-fp-ngr/login.php");
	}
	
	echo hashing($_POST['pass'])."is it right? ".$row['u_password'];
?>
