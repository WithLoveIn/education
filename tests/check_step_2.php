<?php
include("database.php");
include('function.php');

$step_2 = $_POST['step_2'] ;
$number = $_POST['number'];

$categories = get_categories($link,"task_line_practice");

if ($categories[$number]['step_2']==$step_2)
	echo "<span class='right'>Правильно</span>";
else
	echo "<span class='wrong'>Не правильно</span>"
?>