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
	<title>Отзывы</title>
</head>
<body>
	<?php include('header.php') ?>
	<main>
		<div class="row m-0">
			
			<div class="main_section col-12">
				<div class="col-12 d-flex flex-column align-items-center">
					<h1>Отзывы</h1>
				</div>
				<div class="wrapper">
					<div class="container ">
						<div class="row justify-content-center">
							<div class="col-12 d-flex flex-row justify-content-center h_border">
								<div class="col-1 tables d-flex justify-content-center align-items-center">
									<h2>№</h2>
								</div>
								<div class="col-6 tables d-flex justify-content-center align-items-center">	
									<h2>Комментарий</h2>
								</div>
								<div class="col-3 tables d-flex justify-content-center align-items-center">	
									<h2>Ник</h2>
								</div>
								<div class="col-2 tables d-flex justify-content-center align-items-center">	
									<h2>Фото</h2>
								</div>
						
							</div>
						</div>
					</div>
					<?php 
						$categories = get_categories($link,"otziv");
					 ?>
					<?php foreach ($categories as $otziv): ?>
					<div class="container ">
						<div class="row justify-content-center mt-3">
							<div class="col-12 d-flex flex-row justify-content-center my-2">
								<div class="col-1 tables d-flex justify-content-center align-items-center">
									<h4><?=$otziv["id"] ?></h4>
								</div>
								<div class="col-6 tables d-flex justify-content-center align-items-center">	
									<h4><?=$otziv["textotziv"] ?></h4>
								</div>
								<div class="col-3 tables d-flex justify-content-center align-items-center">	
									<h4><?=$otziv["username"] ?></h4>
								</div>
								<div class="col-2 tables d-flex justify-content-center align-items-center">	
									<img <?=$otziv["fotourl"] ?> alt="comp" class="img-fluid">
								</div>
								
							</div>
						</div>
					</div>
					
					<?php endforeach; ?>
				</div>
				<div class="wrapper mt-3">
					<?php if ($_COOKIE['user'] != ''): 
					?>	
					<div class="container">
						<div class="row py-3 justify-content-center">
							<form method="POST" action="add_otziv.php" class="d-flex flex-column col-12">
								<div class="d-flex">
									<div class="col-6 d-flex flex-column justify-content-end">
										<h4>Текст отзыва</h4>
										<input type="text" name="textotziv" placeholder="Текст отзыва">

									</div>
									<div class="col-3 d-flex flex-column justify-content-end">
										<h4>Ник</h4>
										<input type="text" name="username" placeholder="Ваш ник">
									</div>
									<div class="col-3 d-flex flex-column justify-content-end">
										<h4>Ваше фото</h4>
										<input type="file" name="fotourl" multiple accept="image/*,image/jpeg" id="fotourl">
									</div>
								</div>
								
							<button class="mt-3 btn btn-primary">Внести данные</button>
							</form>
						</div>
					</div>
					<?php endif; ?>
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