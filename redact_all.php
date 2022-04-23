<?php
	session_start();
?>
<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root','','republic');
		$query = mysqli_query($con, "UPDATE users SET img='{$_POST['img']}', email='{$_POST['email']}', phone='{$_POST['phone']}' WHERE id='{$_SESSION['id']}'");
	header("Location: profile.php");
?>
