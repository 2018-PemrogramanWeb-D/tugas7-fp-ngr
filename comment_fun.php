<?php
include('init.php');
if (!isset($_SESSION)) {
    session_start();
}
$sql = "SELECT u_id FROM user where u_id=('".$_SESSION["id"]."')";
$user = mysqli_fetch_assoc(mysqli_query($conn, $sql)) ;
$user = $user['u_id'];
$a_link = $_SERVER['PHP_SELF'];
$sql = "SELECT a_id FROM articles where a_link LIKE ('%".$a_link."%')";
// $test =mysqli_query($conn, $a);
$article = mysqli_fetch_assoc(mysqli_query($conn, $sql));
$article = $article['a_id'];
$time = date('Ymd');

if(isset($_POST['content-comment'])){
	$comment = $_POST["content-comment"];
	 $sql = "INSERT INTO comments (u_id, a_id, c_contents, c_username,  c_time)
    VALUES ('".$user."','".$article."','".$comment."','".$_SESSION["username"]."','".$time."')";
	
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
function a()
{$sql_com = "SELECT * FROM `comments` JOIN `user` ON user.u_id = comments.u_id
			WHERE a_id = '$article'";
$comment = mysqli_query($conn, $sql_com);
}
?>
