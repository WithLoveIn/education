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
	<title>Сертификаты</title>
</head>
<body>
	<?php include('header.php') ?>
	<main>
		<div class="row m-0 section1">
			
			<div class="main_section col-12">
				<div class="col-12 d-flex flex-column align-items-center">
					<h1>Сертификаты</h1> 				
					<div class="wrapper p-3 col-12">			
						<img src="img/certificate-1.jpg" alt="sertificate" class="m-2 img-fluid">
						<img src="img/certificate-7.jpg" alt="sertificate" class="m-2 img-fluid">
						<img src="img/certificate-9.jpg" alt="sertificate" class="m-2 img-fluid">
						<img src="img/certificate-10.jpg" alt="sertificate" class="m-2 img-fluid">	
						<img src="img/certificate-11.jpg" alt="sertificate" class="m-2 img-fluid">
					</div>
								
				</div>
			</div>	
		</div>		
	</main>

	<?php include('footer.php') ?>
	<?php include('script.php') ?>
</body>
</html>