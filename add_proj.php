<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root', '', 'republic'); 
	$text = "INSERT INTO projects (id, name, category, price, s_description, description, img, no) VALUES ('{$_POST['id']}', '{$_POST['name']}', '{$_POST['category']}', '{$_POST['price']}', '{$_POST['s_description']}', '{$_POST['description']}', '{$_POST['img']}', '{$_POST['no']}')";
	$zapros_dlya_vvoda = mysqli_query($con, $text);
	header("Location: profile.php");
?>