<?php
session_start(); 
$_SESSION["loginstatus"]=0;
$_SESSION["username"]='';
header("Location: /tugas7-fp-ngr/");
?>