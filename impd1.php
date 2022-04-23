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
									Бездомные животные
							</h1>
					</div>
				</div>
				<div class="profile__wrapper__img">
					<div class="profile__img">
						<img class="impd__img__change" src="img/impd1.png">
						<h1 class="impd__info">Бездомные животные</h1>
						<div class="impd_info__goal">
							<p class="profile__info__human__text2">Помогаем купить корм и найти дом для бездомных животных</p>
						</div>
						<div class="impd_info__goal">
							<p class="impd__info__text1">82 520 руб. &ensp;</p>
							<p class="impd__info__text2">из 180 000 руб.</p>
						</div>
						<div class="login__button__register">
							<a class="login__button" href="#!"><button class="login__btn">
								Помочь
							</button></a>
						</div>
					</div>
					<div class="profile__text__info__0">
						<div class="profile__text__info">
							<p class="profile__text__all">
									Описание
							</p>
							<p class="impd__text__description">
									Самый простой, быстрый, но при этом самый эффективный способ помочь животным – это сделать пожертвование. В настоящее время мы работаем с более 40 приютами , в которых содержится более 16 000 собак и кошек. Все ваши пожертвования бездомным животным, сделанные через наш сайт, направляются на реализацию проектов Фонда.
							</p>
						</div>
						<div class="profile__text__info">
							<p class="profile__text__all">
									Отчёты
							</p>
							<h1 class="impd__text__report">
									Начали расширять наши точки по всему миру
							</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- intro end -->
	<!-- contacts end -->
	</main>
	<script type="text/javascript">
		let impd_btn = document.querySelector('.login__button');
		let count_show = document.querySelector('.impd__info__text1');
		let impd_count = 82500;
		let impd_goal = 180000;
		impd_btn.onclick = function(){
			impd_count = impd_count + 1000;
			count_show.innerHTML = impd_count;
			if (impd_count > impd_goal){
			count_show.style.color = 'green';
			}
		}
	</script>
</body>
</html>