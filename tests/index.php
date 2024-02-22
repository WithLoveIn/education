<?php 
	require_once 'database.php';
	require_once 'function.php';
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
				<?php if ($_COOKIE['user'] != ''):?>
				<?php include('aside.php') ?>
				<?php endif; ?>
			</div>
			<div class="main_section col-12 col-md-8 col-lg-9 p-0">
				<div class="col-12 d-flex flex-column align-items-center">
					<h1>ДОБРО ПОЖАЛОВАТЬ В ОБУЧАЛКУ</h1>
					<?php if ($_COOKIE['user'] == ''):?>
					<p>Обучение доступно после регистрации</p>	
					<?php endif; ?>
				</div>	
			</div>
		</div>
	</main>

	<?php include('footer.php') ?>
	<?php include('script.php') ?>
</body>
</html>