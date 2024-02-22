<?php
include("database.php");
include('function.php');
global $link;

$step_1 = $_POST['step_1'];
$number = $_POST['number'];

$categories = get_categories($link,"task_line_practice");

if ($categories[$number]['step_1']==$step_1)
	echo "<span class='right'>Правильно</span>";
else
	echo "<span class='wrong'>Не правильно</span>"
?>