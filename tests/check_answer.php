<?php
include("database.php");
include('function.php');

$answer = $_POST['answer'] ;
$number = $_POST['number'];

$categories = get_categories($link,"task_line_practice");

if ($categories[$number]['answer']==$answer)
	echo "<span class='right'>Правильно</span>";
else
	echo "<span class='wrong'>Не правильно</span>";
?>