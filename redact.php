<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,500,500i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,500i" rel="stylesheet">
	<title>Republic</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
</head>
<body>
	<!-- header start -->
	<?php
		$con = mysqli_connect('127.0.0.1:3306', 'root','','republic');
        $query = mysqli_query($con, "SELECT * FROM users");
        $stroka = $query->fetch_assoc();
	?>
	<header class="header">
		<div class="wrapper">
			<div class="header__wrapper">
				<div class="header__logo">
					<a href="full.php" class="header__logo-link">
						<img src="img/Logo.png" class="header__logo-link-picture">
						</img>
					</a>
				</div>
				<nav class="header__nav">
					<ul class="header__list">
						<li class="header__item">
							<a href="info.php" class="header__link">О сайте</a>
						</li>
						<li class="header__item">
							<a href="projects.php" class="header__link">Все проекты</a>
						</li>
						<li class="header__item">
							<a href="login.php" style="margin-left: 75px;" class="header__link"><?php echo $stroka['name']?></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- header end -->
	<!-- intro start -->
	<main class="main">
		<section class="profile">
			<div class="wrapper__profile">
				<div class="profile__wrapper">
					<div class="profile__text_info">
							<h1 class="profile__title">
									Личный кабинет
							</h1>
					</div>
				</div>
				<div class="profile__wrapper__img">
					<div class="profile__img">
						<form action="redact_all.php" method="POST">
							<input style="margin-right: 10%; margin-left: 10%;" class="profile__info__human__text1" value="<?php echo $stroka['img']?>" type="" name="img">
						<h1 class="profile__info__human"><?php echo $stroka['surname'];  ?> &ensp; <?php echo $stroka['name'];?></h1>
						<div class="profile_info__mail">
							<input class="profile__info__human__text1" value="<?php echo $stroka['email']?>" type="" name="email">
						</div>
						<div class="profile_info__phone">
							<input class="profile__info__human__text1" value="<?php echo $stroka['phone']?>" type="" name="phone">
						</div>
						<div class="login__button__register">
							<a class="login__button" href="redact.php"><button class="login__btn">
									Сохранить
								</button></a>
						</div>
						</form>
					</div>
					<div>
						<div class="profile__text__info">
							<p class="profile__text__all">
									
							</p>
						</div>
						<div class="profile__text__info">
							<p class="profile__text__all">
									
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- intro end -->
	<!-- contacts end -->
	</main>
	<script type="text/javascript">
		
	</script>
</body>
</html>