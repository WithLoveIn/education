<?php 
	require_once 'database.php';
	require_once 'function.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<?php include('css.php') ?>
	<title>Про нас</title>
</head>
<body>
	<?php include('header.php') ?>
	<main>
		<div class="row m-0">
			<div class="main_section col-12">
				<div class="col-12 d-flex flex-column align-items-center">
					<h1>Веб-сайт EDUCATION для прохождение онлайн-курсов</h1> 			
					
					<div class="wrapper p-3 col-12">
						<h2>ПРО КОМПАНИЮ</h2>
						<p>На сегодняшний день онлайн-cервис "EDUCATION" – это веб-сайт, предназначенный преимущественно для тех, кто хочет получить надежные знания. </p>

						<h2>Для кого лучше подходит эта платформа для онлайн-курсов?</h2>

						<p>Если вы серьезно относитесь к онлайн-курсам, если вы уже пробовали другие платформы и устали от комиссионных и других нюансов, сокращающих вашу прибыль – EDUCATION для вас. У вас будет полная функциональность, специальная команда поддержки и все будущие обновления и улучшения платформы будут включены в существующий план. Никаких дополнений не требуется.</p>

						
						<h2>НАША МИССИЯ</h2>

						
						<h4>МЫ ЗНАЕМ, КАК ЦЕНИТЬ ВРЕМЯ И НАСЛАЖИВАТЬСЯ КАЖДОЙ СЕКУНДОЙ:</h4>
						<ul>
							<li>- Мы формируем культуру в России;</li>
							<li>- Мы ставим высокие стандарты качества ведения бизнеса;</li>
							<li>- Мы воплощаем мечты в реальность, превосходя ожидания клиентов.</li>
						</ul>

						<h2>НАШИ ЦЕННОСТИ</h2>

						<h4>МЫ НАЦИОНАЛЬНАЯ СЕТЕВАЯ КОМПАНИЯ, ориентированная на результат и инновации:</h4>

						<ul>
							<li>Амбициозная и профессиональная команда со сложившимися традициями;</li>
							<li>Высокое качество обслуживания формирует доверие наших клиентов;</li>
							<li>Каждый сотрудник компании – ее актив.</li>
						</ul>
					</div>				
				</div>
			</div>	
		</div>
		
	</main>


	<div class="chatbot__btn">
	  <div class="chatbot__tooltip d-none">Есть вопрос?</div>
	</div>
	
	<?php include('footer.php') ?>

	<?php include('script.php') ?>
</body>
</html>