<h1>nGr</h1>
		 <div class="row">
		  <div class="col align-self-start">
			<h3>nice game review</h3>
		  </div>
		  <div class="col align-self-end">
			  <div class="float-right">
<?php 
if (!isset($_SESSION)) {
    session_start();
}
		if($_SESSION["loginstatus"]<=0) echo '<a href="/tugas7-fp-ngr/login.php">Login</a>||
				  <a href="/tugas7-fp-ngr/signin.php">Sign In</a>';
		else  if($_SESSION["loginstatus"]==1) echo '<a href="setting.php">pengaturan akun</a>||<a href="/tugas7-fp-ngr/logout.php"> Logout</a>';

?>

		</div>
	</div>
</div>
