<?php 
	include('database.php');
	global $link;
	$sql = "SELECT * FROM users";
	$id = mysqli_num_rows(mysqli_query($link,$sql)) + 1;
	$email = filter_var(trim($_POST['reg_email']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['reg_pass']),FILTER_SANITIZE_STRING);
	$sername = filter_var(trim($_POST['reg_sername']),FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['reg_name']),FILTER_SANITIZE_STRING);
	$photo = "src=\"img/".filter_var(trim($_POST['reg_photo']),FILTER_SANITIZE_STRING)."\"";
	$adress = filter_var(trim($_POST['reg_adress']),FILTER_SANITIZE_STRING);
	$phone = filter_var(trim($_POST['reg_phone']),FILTER_SANITIZE_STRING);
	$reg_class = filter_var(trim($_POST['reg_class']),FILTER_SANITIZE_STRING);
	
	echo $id;
	// Проверка на ввод
	if (mb_strlen($email)<5||mb_strlen($email)>90){
		echo "Недопустимый email";
		exit();
	} else if (mb_strlen($pass)<4||mb_strlen($pass)>20){
		echo "Недопустимый пароль";
		exit();
	}

	$pass = md5($pass."ktif4382");

	mysqli_query($link,"INSERT INTO users (id, login, password, sername,name, fotourl, adress, phone, reg_class) VALUES ('$id','$email','$pass','$sername','$name','$photo','$adress', '$phone','$reg_class')");
	
	header('Location: index.php');
 ?>