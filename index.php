<?php
session_start();
    if(isset($_SESSION["loginstatus"])&&$_SESSION["loginstatus"]>=1)$_SESSION["loginstatus"]=1;
	else $_SESSION["loginstatus"]=0;
include('main.php');

?>