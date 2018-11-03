<?php

session_start();

echo "flex those nibba";

if($_POST["nama"]=="fadly")
{
	$_SESSION["loginstatus"]=1;
	header("Location: /tugas7-fp-ngr/");
}
else 
	{
	$_SESSION["loginstatus"]=-1;
	header("Location: /tugas7-fp-ngr/login.php");
	}
?>