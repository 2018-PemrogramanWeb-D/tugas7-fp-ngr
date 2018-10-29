<?php	
$find = $all = "";
$num_rows = 0;
if (isset($_POST['submit-search'])) {
	$find = mysqli_real_escape_string($conn,$_POST['search']);
	$all= "select * from articles WHERE a_name LIKE '%$find%'";
	$data = mysqli_query($conn, $all);
	$num_rows = mysqli_num_rows($data);
}
?>

	