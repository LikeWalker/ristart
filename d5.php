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
									Медиазона - Mustar
							</h1>
					</div>
				</div>
				<div class="profile__wrapper__img">
					<div class="profile__img">
						<img class="impd__img__change" src="img/d5.png">
						<h1 class="impd__info">Медиазона - Mustar</h1>
						<div class="impd_info__goal">
							<p class="profile__info__human__text2">Продвижение якутского языка</p>
						</div>
						<div class="impd_info__goal">
							<p class="impd__info__text1">153 473 руб. &ensp;</p>
							<p class="impd__info__text2">из 689 484</p>
						</div>
						<div class="login__button__register">
							<a class="login__button" href="#!"><button class="login__btn">
								Помочь
							</button></a>
						</div>
					</div>
					<div class="mustar__text__info__0">
						<div class="mustar__text__info">
							<p class="mustar__text__all">
									Описание
							</p>
							<p class="impd__text__description">
								Проект направлен на сохранение якутского языка и его актуализацию среди подростков и молодежи  Республики Саха (Якутия) путем создания канала "Медиазона «USTAR» на Youtube.  Реализация проекта планируется с сентября 2021 по май 2022 года. Деятельность команды проекта будет направлена на создание креативного, полезного, трендового контента для подростков и молодежи на якутском языке по следующим направлениям: 
								- социальные ролики; 
								- развлекательное ток-шоу; 
								- новостной блок; 
								- подкасты; 
								- короткометражный фильм. 
								Для создания контента планируется привлечение подростков заинтересованных в этой деятельности. Кроме этого  проект "Медиазона «USTAR» (MUSTAR) может послужить профориентационной площадкой для подростков творческой группы проекта. Youtube-канал на  якутском языке - это один из видов работ по сохранению,  популяризации  родного языка. Развитие Youtube-канала на  якутском языке способствует не только  сохранению  родного языка, но поможет уберечь свою национальную аутентичность. 
							</p>
							<div class="profile__text__info">
							<p class="profile__text__all">
									Отчёты
							</p>
							<h1 class="impd__text__report">
									Вышли выпуски ток шоу “Битва школьных команд” и подкаст “Атах тэпсэн олорон”
									Их можно посмотреть на нашей странице в Инстаграм: <a href="https://instagram.com/mustar_com?igshid=YmMyMTA2M2Y=">ЗДЕСЬ</a> . Или на YouTube: <a href="https://www.youtube.com/channel/UCVEDYMy3XyHdxJBBGwjAqrA">ЗДЕСЬ</a>
							</h1>
						</div>
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
		let impd_count = 153473;
		let impd_goal = 689484;
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