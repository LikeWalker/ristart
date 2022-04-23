<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root', '', 'republic'); 
	$text = "INSERT INTO users (id, name, surname, email, password, img, phone)  VALUES ('{$_POST['id']}', '{$_POST['name']}', '{$_POST['surname']}', '{$_POST['email']}', '{$_POST['password']}', '{$_POST['img']}', '{$_POST['phone']}')";
	$zapros_dlya_vvoda = mysqli_query($con, $text);
	header("Location: login.php");
?>