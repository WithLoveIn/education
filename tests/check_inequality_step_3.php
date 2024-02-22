<?php
include("database.php");
include('function.php');

$step_3 = $_POST['step_3'] ;
$number = $_POST['number'];

$categories = get_categories($link,"task_line_inequality_practice");

if ($categories[$number]['step_3']==$step_3)
	echo "<span class='right'>Правильно</span>";
else
	echo "<span class='wrong'>Не правильно</span>"
?>