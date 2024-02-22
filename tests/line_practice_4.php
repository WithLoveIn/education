<?php 
	require_once 'database.php';
	require_once 'function.php';
	$subject=1;
	$page_line_practice=4;
	include('setting_cookies.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include('css.php') ?>
	<title>Tests</title>
</head>
<body>
	<?php include('header.php') ?>
	<main>
		<div class="row section1 m-0">
			<div class="col-12 col-md-4 col-lg-3 p-0 d-flex align-items-md-center">
				<?php include('aside.php') ?>
			</div>
			<div class="main_section col-12 col-md-8 col-lg-9 p-3">
				<div class="col-12 d-flex flex-column align-items-center row">
					<h1 class="text-center">ЛИНЕЙНЫЕ УРАВНЕНИЯ</h1>
					<div class="col-12 wrapper p-3">
						<?php include('task_line_practice.php')?>		
					</div>	
					<div class="col-12 wrapper p-3">
						<?php include('pagination_line_practice.php') ?>					
					</div>
				</div>
			</div>
		</div>
	</main>

	<?php include('footer.php') ?>
	<?php include('script.php') ?>
</body>
</html>