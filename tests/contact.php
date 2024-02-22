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
	<title>КОНТАКТЫ</title>
</head>
<body>
	<?php include('header.php') ?>
	<main>
		<div class="row m-0">
			<div class="main_section col-12">
				<div class="col-12 d-flex flex-column align-items-center">
					<h1>КОНТАКТЫ</h1> 
					
					<div class="wrapper p-3 col-12">
						<h2>НАШИ КОНТАКТЫ</h2>
						<p>Телефон: <a href="#">+38(012)3456789</a></p>
						<p>E-mail: <a href="#">email@gmail.com</a></p>
					</div>
					<div class="wrapper p-3 col-12 my-2">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d577343.9849883706!2d36.72619663025082!3d55.58025703866834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2z0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8!5e0!3m2!1sru!2sua!4v1694958464308!5m2!1sru!2sua" class="col-12" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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