<?php 
	$categories = get_categories($link,"task_line_practice");
	$test_number="test_".$page_line_practice."_number";
	$results = get_categories($link,"results");
	$number=rand(0, count($categories)-1);
	$count_check=0;
	foreach ($results as $result) 
		if ($result['user_id']==$_COOKIE['user'] && $result['subject']== $subject &&  $result[$test_number]!= '0')
			$number=$result[$test_number];
	
	setcookie('count_check', $count_check);
	setcookie('number', $number);
	setcookie('subject', $subject);
	setcookie('page', $page_line_practice);
?>