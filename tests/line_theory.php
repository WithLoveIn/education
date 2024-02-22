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
				<?php include('aside.php') ?>
			</div>
			<div class="main_section col-12 col-md-8 col-lg-9 p-3">
				<div class="col-12 d-flex flex-column align-items-center row">
					<h1 class="text-center">ЛИНЕЙНЫЕ УРАВНЕНИЯ</h1>
					<div class="col-12 wrapper p-3">
						<div>
							<strong><b>Линейным уравнением</b></strong> называется уравнение вида <b>ax + b = 0</b>, в котором <b>a</b> и <b>b</b> — действительные числа.
						</div>
						<div>
							<h4>Шаги решения</h4>
							<p><b>1. ax+b=0</b> переносим все что не содержит <b>х</b> в правую часть уравнения. Получаем <b>ax=b</b>.</p>
							<p><b>2.</b> Делим обе части уравнения на <b>а</b>. Получаем <b>x=b/a</b>.</p>
						</div>
						<div>
							<h4>Пример</h4>
							<p><b>1. 6x-24=0</b> переносим все что не содержит <b>х</b> в правую часть уравнения. Получаем <b>6x=24</b>.</p>
							<p><b>2.</b> Делим обе части уравнения на <b>6</b>. Получаем <b>x=24/6=4</b>.</p>
							<p><b>Ответ: 4</b></p>
						</div>
					</div>	
					
					



				</div>	
			</div>
		</div>
	</main>

	<?php include('footer.php') ?>
	<?php include('script.php') ?>
</body>
</html>