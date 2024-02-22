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
	<title>Профиль</title>
</head>
<body>
	<?php include('header.php') ?>
	<main>
		<div class="row m-0">
			<div class="main_section col-12">
				<div class="col-12 d-flex flex-column align-items-center">
					<h1>Мои данные</h1> 				
					<div class="p-3 col-12 d-flex flex-column align-items-center justify-content-center">			
						<?php 
							$categories = get_categories($link,"users");
						 ?>

						<?php foreach ($categories as $users): ?>
							<?php if ($users["id"]== $_COOKIE['user']): ?>
								<div class="col-12 p-2">
									<div class="col-12 p-2 d-flex flex-column align-items-center justify-content-between">
										<img <?=$users["fotourl"] ?> alt="prof" class="img-fluid">
									</div>
								</div>
								<div class="col-12 p-2">
									<div class="col-12 p-2 d-flex align-items-center row">
										<h4 class="col-12 col-sm-6 px-3 text-sm-end">Фамилия:</h4>
										<h4 class="col-12 col-sm-6 px-3"><?=$users["sername"] ?></h4>
										<h4 class="col-12 col-sm-6 px-3 text-sm-end">Имя:</h4>
										<h4 class="col-12 col-sm-6 px-3"><?=$users["name"] ?></h4>
										<h4 class="col-12 col-sm-6 px-3 text-sm-end">Адрес:</h4>
										<h4 class="col-12 col-sm-6 px-3"> <?=$users["adress"] ?></h4>
										<h4 class="col-12 col-sm-6 px-3 text-sm-end">Телефон:</h4>
										<h4 class="col-12 col-sm-6 px-3"><?=$users["phone"] ?></h4>
										<h4 class="col-12 col-sm-6 px-3 text-sm-end">Класс:</h4>
										<h4 class="col-12 col-sm-6 px-3"> <?=$users["reg_class"] ?></h4>
									</div>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
	
				
					<?php if ($_COOKIE['user'] == 1):?>
						<div class="table-responsive col-12 mb-5">
							<table class="table table-striped">
								<thead class="table-dark">
									<tr scope="row">
										<th colspan="21" class="text-center">Линейные уравнения</th>
									</tr>
							    	<tr>
								        <th scope="col" rowspan="2" class="text-center">Учащийся</th>
								        <th scope="col" colspan="2" class="text-center">1</th>
								        <th scope="col" colspan="2" class="text-center">2</th>
								        <th scope="col" colspan="2" class="text-center">3</th>
								        <th scope="col" colspan="2" class="text-center">4</th>
								        <th scope="col" colspan="2" class="text-center">5</th>
								        <th scope="col" colspan="2" class="text-center">6</th>
								        <th scope="col" colspan="2" class="text-center">7</th>
								        <th scope="col" colspan="2" class="text-center">8</th>
								        <th scope="col" colspan="2" class="text-center">9</th>
								        <th scope="col" colspan="2" class="text-center">10</th>
								    </tr>
								    <tr>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								    </tr>
								</thead>
								<tbody>
								    								
		      							<?php 
											$categories = get_categories($link,"results");
											$count=0;
										?>
										<?php foreach ($categories as $results): ?>
											<?php if ($results['subject']==1): $count++;?>
												<tr>
												<?php
													$us_name="";
													$uss = get_categories($link,"users");
													foreach ($uss as $us)
														if ($results["user_id"]==$us["id"])
															$us_name=$us["sername"]." ".$us["name"];
												?>

												<th scope="row"><?=$us_name ?></th>
				      							<td class="text-center"><?=$results["test_1_number"] ?></td>
				      							<td class="text-center"><?=$results["test_1_count"] ?></td>
				      							<td class="text-center"><?=$results["test_2_number"] ?></td>
				      							<td class="text-center"><?=$results["test_2_count"] ?></td>
				      							<td class="text-center"><?=$results["test_3_number"] ?></td>
				      							<td class="text-center"><?=$results["test_3_count"] ?></td>
				      							<td class="text-center"><?=$results["test_4_number"] ?></td>
				      							<td class="text-center"><?=$results["test_4_count"] ?></td>
				      							<td class="text-center"><?=$results["test_5_number"] ?></td>
				      							<td class="text-center"><?=$results["test_5_count"] ?></td>
				      							<td class="text-center"><?=$results["test_6_number"] ?></td>
				      							<td class="text-center"><?=$results["test_6_count"] ?></td>
				      							<td class="text-center"><?=$results["test_7_number"] ?></td>
				      							<td class="text-center"><?=$results["test_7_count"] ?></td>
				      							<td class="text-center"><?=$results["test_8_number"] ?></td>
				      							<td class="text-center"><?=$results["test_8_count"] ?></td>
				      							<td class="text-center"><?=$results["test_9_number"] ?></td>
				      							<td class="text-center"><?=$results["test_9_count"] ?></td>
				      							<td class="text-center"><?=$results["test_10_number"] ?></td>
				      							<td class="text-center"><?=$results["test_10_count"] ?></td>
				      							</tr>
			      							<?php endif; ?>
		      							<?php endforeach; ?>
		      							<?php if ($count==0):?>
		      								<tr>
			      								<td class="text-center">0</td>
					      						<td class="text-center">0</td>
					      						<td class="text-center">0</td>
					      						<td class="text-center">0</td>
					      						<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
					      						<td class="text-center">0</td>
					      						<td class="text-center">0</td>
					      						<td class="text-center">0</td>
					      						<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>	
		      								</tr>
		      							<?php endif; ?>	
		    					</tbody>
		    				</table>
						</div>	


						<div class="table-responsive col-12 mb-5">
							<table class="table table-striped">
								<thead class="table-dark">
									<tr scope="row">
										<th colspan="21" class="text-center">Линейные неравенства</th>
									</tr>
							    	<tr>
								        <th scope="col" rowspan="2" class="text-center">Учащийся</th>
								        <th scope="col" colspan="2" class="text-center">1</th>
								        <th scope="col" colspan="2" class="text-center">2</th>
								        <th scope="col" colspan="2" class="text-center">3</th>
								        <th scope="col" colspan="2" class="text-center">4</th>
								        <th scope="col" colspan="2" class="text-center">5</th>
								        <th scope="col" colspan="2" class="text-center">6</th>
								        <th scope="col" colspan="2" class="text-center">7</th>
								        <th scope="col" colspan="2" class="text-center">8</th>
								        <th scope="col" colspan="2" class="text-center">9</th>
								        <th scope="col" colspan="2" class="text-center">10</th>
								    </tr>
								    <tr>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								        <th scope="col" class="text-center">№</th>
								        <th scope="col" class="text-center">Кол</th>
								    </tr>
								</thead>
								<tbody>
								    								
		      							<?php 
											$categories = get_categories($link,"results");
											$count=0;
										?>
										<?php foreach ($categories as $results): ?>
											<?php if ($results['subject']==2): $count++;?>
												<tr>
												<?php
													$us_name="";
													$uss = get_categories($link,"users");
													foreach ($uss as $us)
														if ($results["user_id"]==$us["id"])
															$us_name=$us["sername"]." ".$us["name"];
												?>

												<th scope="row"><?=$us_name ?></th>
				      							<td class="text-center"><?=$results["test_1_number"] ?></td>
				      							<td class="text-center"><?=$results["test_1_count"] ?></td>
				      							<td class="text-center"><?=$results["test_2_number"] ?></td>
				      							<td class="text-center"><?=$results["test_2_count"] ?></td>
				      							<td class="text-center"><?=$results["test_3_number"] ?></td>
				      							<td class="text-center"><?=$results["test_3_count"] ?></td>
				      							<td class="text-center"><?=$results["test_4_number"] ?></td>
				      							<td class="text-center"><?=$results["test_4_count"] ?></td>
				      							<td class="text-center"><?=$results["test_5_number"] ?></td>
				      							<td class="text-center"><?=$results["test_5_count"] ?></td>
				      							<td class="text-center"><?=$results["test_6_number"] ?></td>
				      							<td class="text-center"><?=$results["test_6_count"] ?></td>
				      							<td class="text-center"><?=$results["test_7_number"] ?></td>
				      							<td class="text-center"><?=$results["test_7_count"] ?></td>
				      							<td class="text-center"><?=$results["test_8_number"] ?></td>
				      							<td class="text-center"><?=$results["test_8_count"] ?></td>
				      							<td class="text-center"><?=$results["test_9_number"] ?></td>
				      							<td class="text-center"><?=$results["test_9_count"] ?></td>
				      							<td class="text-center"><?=$results["test_10_number"] ?></td>
				      							<td class="text-center"><?=$results["test_10_count"] ?></td>
				      							</tr>
			      							<?php endif; ?>
		      							<?php endforeach; ?>
		      							<?php if ($count==0):?>
		      								<tr>
			      								<td class="text-center">0</td>
					      						<td class="text-center">0</td>
					      						<td class="text-center">0</td>
					      						<td class="text-center">0</td>
					      						<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
					      						<td class="text-center">0</td>
					      						<td class="text-center">0</td>
					      						<td class="text-center">0</td>
					      						<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>
				      							<td class="text-center">0</td>	
		      								</tr>
		      							<?php endif; ?>	
		    					</tbody>
		    				</table>
						</div>	
					<?php endif; ?>	


					<div class="table-responsive col-12 mb-5">
						<table class="table table-striped">
							<thead class="table-dark">
							    <tr>
							        <th scope="col" rowspan="2" class="text-center">Предмет\Тест</th>
							        <th scope="col" colspan="2" class="text-center">1</th>
							        <th scope="col" colspan="2" class="text-center">2</th>
							        <th scope="col" colspan="2" class="text-center">3</th>
							        <th scope="col" colspan="2" class="text-center">4</th>
							        <th scope="col" colspan="2" class="text-center">5</th>
							        <th scope="col" colspan="2" class="text-center">6</th>
							        <th scope="col" colspan="2" class="text-center">7</th>
							        <th scope="col" colspan="2" class="text-center">8</th>
							        <th scope="col" colspan="2" class="text-center">9</th>
							        <th scope="col" colspan="2" class="text-center">10</th>
							    </tr>
							    <tr>
							        <th scope="col" class="text-center">№</th>
							        <th scope="col" class="text-center">Кол</th>
							        <th scope="col" class="text-center">№</th>
							        <th scope="col" class="text-center">Кол</th>
							        <th scope="col" class="text-center">№</th>
							        <th scope="col" class="text-center">Кол</th>
							        <th scope="col" class="text-center">№</th>
							        <th scope="col" class="text-center">Кол</th>
							        <th scope="col" class="text-center">№</th>
							        <th scope="col" class="text-center">Кол</th>
							        <th scope="col" class="text-center">№</th>
							        <th scope="col" class="text-center">Кол</th>
							        <th scope="col" class="text-center">№</th>
							        <th scope="col" class="text-center">Кол</th>
							        <th scope="col" class="text-center">№</th>
							        <th scope="col" class="text-center">Кол</th>
							        <th scope="col" class="text-center">№</th>
							        <th scope="col" class="text-center">Кол</th>
							        <th scope="col" class="text-center">№</th>
							        <th scope="col" class="text-center">Кол</th>
							    </tr>
							</thead>
							<tbody>
							    <tr>
	      							<th scope="row">Линейные уравнения</th>
	      							
	      							<?php 
										$categories = get_categories($link,"results");
										$count=0;
									?>
									<?php foreach ($categories as $results): ?>
										<?php if (($_COOKIE['user'] == $results['user_id']) && $results['subject']==1): $count++;?>
			      							<td class="text-center"><?=$results["test_1_number"] ?></td>
			      							<td class="text-center"><?=$results["test_1_count"] ?></td>
			      							<td class="text-center"><?=$results["test_2_number"] ?></td>
			      							<td class="text-center"><?=$results["test_2_count"] ?></td>
			      							<td class="text-center"><?=$results["test_3_number"] ?></td>
			      							<td class="text-center"><?=$results["test_3_count"] ?></td>
			      							<td class="text-center"><?=$results["test_4_number"] ?></td>
			      							<td class="text-center"><?=$results["test_4_count"] ?></td>
			      							<td class="text-center"><?=$results["test_5_number"] ?></td>
			      							<td class="text-center"><?=$results["test_5_count"] ?></td>
			      							<td class="text-center"><?=$results["test_6_number"] ?></td>
			      							<td class="text-center"><?=$results["test_6_count"] ?></td>
			      							<td class="text-center"><?=$results["test_7_number"] ?></td>
			      							<td class="text-center"><?=$results["test_7_count"] ?></td>
			      							<td class="text-center"><?=$results["test_8_number"] ?></td>
			      							<td class="text-center"><?=$results["test_8_count"] ?></td>
			      							<td class="text-center"><?=$results["test_9_number"] ?></td>
			      							<td class="text-center"><?=$results["test_9_count"] ?></td>
			      							<td class="text-center"><?=$results["test_10_number"] ?></td>
			      							<td class="text-center"><?=$results["test_10_count"] ?></td>
	      								<?php endif; ?>
	      							<?php endforeach; ?>
	      							<?php if ($count==0):?>
	      								<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
	      							<?php endif; ?>
	    						</tr>
	    						<tr>
	      							<th scope="row">Линейные неравенства</th>
	      							
	      							<?php 
										$categories = get_categories($link,"results");
										$count=0;
									?>
									<?php foreach ($categories as $results): ?>
										<?php if (($_COOKIE['user'] == $results['user_id']) && $results['subject']==2): $count++;?>
			      							<td class="text-center"><?=$results["test_1_number"] ?></td>
			      							<td class="text-center"><?=$results["test_1_count"] ?></td>
			      							<td class="text-center"><?=$results["test_2_number"] ?></td>
			      							<td class="text-center"><?=$results["test_2_count"] ?></td>
			      							<td class="text-center"><?=$results["test_3_number"] ?></td>
			      							<td class="text-center"><?=$results["test_3_count"] ?></td>
			      							<td class="text-center"><?=$results["test_4_number"] ?></td>
			      							<td class="text-center"><?=$results["test_4_count"] ?></td>
			      							<td class="text-center"><?=$results["test_5_number"] ?></td>
			      							<td class="text-center"><?=$results["test_5_count"] ?></td>
			      							<td class="text-center"><?=$results["test_6_number"] ?></td>
			      							<td class="text-center"><?=$results["test_6_count"] ?></td>
			      							<td class="text-center"><?=$results["test_7_number"] ?></td>
			      							<td class="text-center"><?=$results["test_7_count"] ?></td>
			      							<td class="text-center"><?=$results["test_8_number"] ?></td>
			      							<td class="text-center"><?=$results["test_8_count"] ?></td>
			      							<td class="text-center"><?=$results["test_9_number"] ?></td>
			      							<td class="text-center"><?=$results["test_9_count"] ?></td>
			      							<td class="text-center"><?=$results["test_10_number"] ?></td>
			      							<td class="text-center"><?=$results["test_10_count"] ?></td>
	      								<?php endif; ?>
	      							<?php endforeach; ?>
	      							<?php if ($count==0):?>
	      								<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
	      							<?php endif; ?>
	    						</tr>
							    <tr>
	      							<th scope="row">Алгебра</th>
	      							
	      							<?php 
										$categories = get_categories($link,"results");
										$count=0;
									?>
									<?php foreach ($categories as $results): ?>
										<?php if (($_COOKIE['user'] == $results['user_id'] || $_COOKIE['user'] == 1) && $results['subject']==3): $count++;?>
			      							<td class="text-center"><?=$results["test_1_number"] ?></td>
			      							<td class="text-center"><?=$results["test_1_count"] ?></td>
			      							<td class="text-center"><?=$results["test_2_number"] ?></td>
			      							<td class="text-center"><?=$results["test_2_count"] ?></td>
			      							<td class="text-center"><?=$results["test_3_number"] ?></td>
			      							<td class="text-center"><?=$results["test_3_count"] ?></td>
			      							<td class="text-center"><?=$results["test_4_number"] ?></td>
			      							<td class="text-center"><?=$results["test_4_count"] ?></td>
			      							<td class="text-center"><?=$results["test_5_number"] ?></td>
			      							<td class="text-center"><?=$results["test_5_count"] ?></td>
			      							<td class="text-center"><?=$results["test_6_number"] ?></td>
			      							<td class="text-center"><?=$results["test_6_count"] ?></td>
			      							<td class="text-center"><?=$results["test_7_number"] ?></td>
			      							<td class="text-center"><?=$results["test_7_count"] ?></td>
			      							<td class="text-center"><?=$results["test_8_number"] ?></td>
			      							<td class="text-center"><?=$results["test_8_count"] ?></td>
			      							<td class="text-center"><?=$results["test_9_number"] ?></td>
			      							<td class="text-center"><?=$results["test_9_count"] ?></td>
			      							<td class="text-center"><?=$results["test_10_number"] ?></td>
			      							<td class="text-center"><?=$results["test_10_count"] ?></td>
	      								<?php endif; ?>
	      							<?php endforeach; ?>
	      							<?php if ($count==0):?>
	      								<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
			      						<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
		      							<td class="text-center">0</td>
	      							<?php endif; ?>
	    						</tr>
							</tbody>
						</table>
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