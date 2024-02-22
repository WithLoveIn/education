<?php
include("database.php");
include('function.php');

$answer = $_POST['answer'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$page = $_POST['page'];
$count_check=$_POST['count_check'];
$user_id=$_POST['user_id'];


$categories = get_categories($link,"task_line_inequality_practice");


if ($categories[$number]['answer']==$answer)
{
	echo "<span class='right'>Правильно</span>";
	$count=0;
	$categories = get_categories($link,"results");
	foreach ($categories as $res)
		if ($res['user_id']==$user_id && $res['subject']==$subject)
			$count++;
	if ($count==0)
	{
		mysqli_query($link,"INSERT INTO `results` (`user_id`, `subject`, `test_1_number`, `test_1_count`, `test_2_number`, `test_2_count`, `test_3_number`, `test_3_count`, `test_4_number`, `test_4_count`, `test_5_number`, `test_5_count`, `test_6_number`, `test_6_count`, `test_7_number`, `test_7_count`, `test_8_number`, `test_8_count`, `test_9_number`, `test_9_count`, `test_10_number`, `test_10_count`) VALUES ($user_id, $subject , '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');");

	}
	$cat = get_categories($link,"results");
	foreach ($cat as $results)
	{
		if ($results['user_id']==$user_id && $results['subject']==$subject)
		{

			if ($page==1)
			{
				echo "g";
				mysqli_query($link,"UPDATE results SET test_1_number = $number+1,test_1_count=$count_check  WHERE `results`.`user_id` = $user_id AND `results`.`subject` = $subject");			
			}
			if ($page==2)
			{
				mysqli_query($link,"UPDATE results SET test_2_number = $number+1,test_2_count=$count_check  WHERE `results`.`user_id` = $user_id AND `results`.`subject` = $subject");			
			}
			if ($page==3)
			{
				mysqli_query($link,"UPDATE results SET test_3_number = $number+1,test_3_count=$count_check  WHERE `results`.`user_id` = $user_id AND `results`.`subject` = $subject");			
			}
			if ($page==4)
			{
				mysqli_query($link,"UPDATE results SET test_4_number = $number+1,test_4_count=$count_check  WHERE `results`.`user_id` = $user_id AND `results`.`subject` = $subject");			
			}
			if ($page==5)
			{
				mysqli_query($link,"UPDATE results SET test_5_number = $number+1,test_5_count=$count_check  WHERE `results`.`user_id` = $user_id AND `results`.`subject` = $subject");			
			}
			if ($page==6)
			{
				mysqli_query($link,"UPDATE results SET test_6_number = $number+1,test_6_count=$count_check  WHERE `results`.`user_id` = $user_id AND `results`.`subject` = $subject");			
			}
			if ($page==7)
			{
				mysqli_query($link,"UPDATE results SET test_7_number = $number+1,test_7_count=$count_check  WHERE `results`.`user_id` = $user_id AND `results`.`subject` = $subject");			
			}
			if ($page==8)
			{
				mysqli_query($link,"UPDATE results SET test_8_number = $number+1,test_8_count=$count_check  WHERE `results`.`user_id` = $user_id AND `results`.`subject` = $subject");			
			}
			if ($page==9)
			{
				mysqli_query($link,"UPDATE results SET test_9_number = $number+1,test_9_count=$count_check  WHERE `results`.`user_id` = $user_id AND `results`.`subject` = $subject");			
			}
			if ($page==10)
			{
				mysqli_query($link,"UPDATE results SET test_10_number = $number+1,test_10_count=$count_check  WHERE `results`.`user_id` = $user_id AND `results`.`subject` = $subject");			
			}
		}
	}
}
else
{
	$count_check=$count_check+1;
	echo "<span class='wrong'>Не правильно</span>";
}

setcookie('count_check', $count_check);




?>