<?php


$sql = "SELECT u_id FROM `user` where u_id='$u_id'";

$user = mysqli_fetch_assoc(mysqli_query($conn, $sql)) ;
$user = $user['u_id'];
$a_link = $_SERVER['PHP_SELF'];
$sql = "SELECT a_id FROM articles where a_link LIKE '%$a_link%'";

// $test =mysqli_query($conn, $a);
$article = mysqli_fetch_assoc(mysqli_query($conn, $sql));
$article = $article['a_id'];
$time = date('Y-m-d');


if(isset($_POST['content-comment'])){
	$comment = mysqli_real_escape_string($conn,$_POST['content-comment']);
	 $sql = "INSERT INTO `comments` (u_id, a_id, c_contents, c_time)
    VALUES ('$user','$article','$comment', '$time');";
	if(mysqli_query($conn, $sql))
	{
		echo "inputted";
	}
	else 
	{
		echo "error";
	}


}
$sql_com = "SELECT * FROM `comments` JOIN `user` ON user.u_id = comments.u_id
			WHERE a_id = '$article'";
$comment = mysqli_query($conn, $sql_com);
?>