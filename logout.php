<?php
session_start(); 
$_SESSION["loginstatus"]=0;
$_SESSION["username"]='';
$_SESSION["id"]=0;
header("Location: /tugas7-fp-ngr/");
?>