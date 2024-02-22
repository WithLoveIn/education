<?php 
include('database.php');
global $link;
$sql = "SELECT * FROM otziv";
$id = mysqli_num_rows(mysqli_query($link,$sql)) + 1;

$textotziv = $_POST['textotziv'];
$username = $_POST['username'];
$fotourl = "src=\"img/".$_POST['fotourl']."\"";

mysqli_query($link,"INSERT INTO otziv (id, textotziv, username, fotourl)  
VALUES ('$id','$textotziv','$username','$fotourl')");

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>