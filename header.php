
<div class="row">
		  <div class="col align-self-start">
			<a href="/tugas7-fp-ngr/"><img src="../../tugas7-fp-ngr/content/logo.svg" id="logo"></a>
		  </div>
		  <div class="col align-self-end">
			  <div class="float-right">
<?php 
   $init = $_SERVER['DOCUMENT_ROOT'];
      $init .= "/tugas7-fp-ngr/init.php";
	     include_once($init);
if (!isset($_SESSION)) {
    session_start();
}
		if($_SESSION["loginstatus"]<=0) echo '<a href="/tugas7-fp-ngr/login.php">Login</a>||
				  <a href="/tugas7-fp-ngr/signin.php">Sign In</a>';
		else  if($_SESSION["loginstatus"]==1) echo 'Logged in as '.$_SESSION["username"].'<br><a href="setting.php">pengaturan akun</a>||<a href="/tugas7-fp-ngr/logout.php"> Logout</a>';
?>
		</div>
	</div>
</div>
