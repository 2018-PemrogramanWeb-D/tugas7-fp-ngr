﻿<?php
session_start();
    if(isset($_SESSION["loginstatus"])&&$_SESSION["loginstatus"]>=1)$_SESSION["loginstatus"]=1;
	else $_SESSION["loginstatus"]=0;
	if(!isset($_SESSION["username"]))$_SESSION["username"]='';
	if(!isset($_SESSION["id"]))$_SESSION["id"]=0;
include('main.php');
?>