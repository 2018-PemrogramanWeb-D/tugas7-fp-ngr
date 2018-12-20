
<?php
$init = $_SERVER['DOCUMENT_ROOT'];
      $init .= "/tugas7-fp-ngr/init.php";
	     include_once($init);

$target_dir = $_POST["genre"]."/";
$target_file = $target_dir . basename($_FILES["content"]["name"]);
$Type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($Type == "html")
{
$tempwrite = fopen("test.php", 'w');
$begin = fopen("begin.php", 'r');
$temp_read = fopen($_FILES["content"]["tmp_name"], 'r');
$temp_content = fread($temp_read,filesize($_FILES["content"]["tmp_name"]));
$header = fread($begin,filesize("begin.php"));
$end = fopen("comment.php", 'r');
$comment = fread($end,filesize("comment.php"));
fwrite($tempwrite, $header);
fwrite($tempwrite, $temp_content);
fwrite($tempwrite, $comment);
fclose($tempwrite);
rename("test.php", $_POST["genre"]."/".$_POST["gamename"].".php");
 $sql = "INSERT INTO articles (a_img_link, a_genre, a_link, a_name)
VALUES ('".$_POST["photolink"]."', '".$_POST["genre"]."','../../tugas7-fp-ngr/".$_POST["genre"]."/".$_POST["gamename"].".php','".$_POST["gamename"]."')";
 if ($conn->query($sql) === TRUE) {
	echo $_POST["gamename"]." has been uploaded";
	
}
else echo "error";
}
?>
