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
						<img style="border-radius: 50%; object-fit: cover; height: 140px; width: 140px;" class="profile__img__change" src="<?php echo $stroka['img']?>">
						<h1 class="profile__info__human"><?php echo $stroka['surname'];  ?> &ensp; <?php echo $stroka['name'];?></h1>
						<div class="profile_info__mail">
							<p class="profile__info__human__text1">Почта &ensp;</p>
							<p class="profile__info__human__text2"><?php echo $stroka['email'];?></p>
						</div>
						<div class="profile_info__phone">
							<p class="profile__info__human__text1">Телефон &ensp;</p>
							<p class="profile__info__human__text2"><?php echo $stroka['phone'];?></p>
						</div>
						<div class="login__button__register">
							<a class="login__button" href="redact.php"><button class="login__btn">
									Редактировать
								</button></a>
						</div>
					</div>
					<div>
						<div class="profile__text__info">
							<p class="profile__text__all">
									Мои пожертвования
							</p>
							<p class="impd__text__description">
									К сожалению вы пока никому ничего не пожертвовали
							</p>
						</div>
						<div class="profile__text__info">
							<div style="padding: 20px; display: flex; flex-wrap: wrap; align-items: flex-end; border-bottom: 1px solid rgba(69, 69, 69, 0.5);transform: rotate(-0.11deg);border-spacing: ">
								<p class="profile__text__all2">
									Мои проекты
								</p>
								<a href="add_project.php" style="margin-left: 59%;" class="profile__text__all2 add__link">
									создать
								</a>

							</div>
							<?php
								$con = mysqli_connect('127.0.0.1:3306', 'root','','republic');
						        $query = mysqli_query($con, "SELECT * FROM projects");
								for($i=0; $i< $query->num_rows ;$i++){
								$stroka = $query->fetch_assoc();
							?>
							<a style="text-decoration: 0;" href=""><div class="add__pic <?php echo $stroka['no']?>">
								<img src="<?php echo $stroka['img']?>" class="service__card__thumb">
								<h1 class="service__card__title">
									<?php echo $stroka['name'];?>
								</h1>
							</div></a>
							<?php 
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- intro end -->
	<!-- contacts end -->
	</main>
	<script type="text/javascript">
		let no = document.querySelector('.no');
		no.onclick = function(){
			alert('Извините, но на данный момент вы не сможете зайти на свой проект, так как на данном этапе, оно проходит проверку' );
		}
	</script>
</body>
</html>