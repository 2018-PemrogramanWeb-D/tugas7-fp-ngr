
<?php
$init = $_SERVER['DOCUMENT_ROOT'];
      $init .= "/tugas7-fp-ngr/init.php";
	     include_once($init);

$target_dir = $_POST["genre"]."/";
$target_file = $target_dir . basename($_FILES["content"]["name"]);
$Type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($Type == "html")
{
move_uploaded_file($_FILES["content"]["tmp_name"], $target_file);

$sql = "INSERT INTO articles (a_img_link, a_genre, a_link, a_name)
VALUES ('".$_POST["photolink"]."', '".$_POST["genre"]."','../../tugas7-fp-ngr/".$_POST["genre"]."/".basename($_FILES["content"]["name"])."','".$_POST["gamename"]."')";
if ($conn->query($sql) === TRUE) {
	echo $_POST["gamename"]." has been uploaded";
}
}
?>
