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
	<?php
		$con = mysqli_connect('127.0.0.1:3306', 'root','','republic');
        $query = mysqli_query($con, "SELECT * FROM users");
        $stroka = $query->fetch_assoc();
	?>
	<!-- header start -->
	<header class="header">
		<div class="wrapper">
			<div class="header__wrapper">
				<div class="header__logo">
					<a href="main.php" class="header__logo-link">
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
							<a href="profile.php" style="margin-left: 75px;" class="header__link"><?php echo $stroka['name']?></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- header end -->
	<!-- intro start -->
	<main class="main">
		<section class="intro">
			<div class="wrapper__intro">
				<div class="all">
					<input checked type="radio" name="respond" id="desktop">
						<article id="slider">
								<input checked type="radio" name="slider" id="switch1">
								<input type="radio" name="slider" id="switch2">
								<input type="radio" name="slider" id="switch3">
								<input type="radio" name="slider" id="switch4">
								<input type="radio" name="slider" id="switch5">
							<div id="slides">
								<div id="overflow">
									<div class="image">
										<article><a href="impd1.php"><img class="impd1" src="img/1.jpg"></a></article>
										<article><a href="impd2.php"><img class="impd2" src="img/2.jpg"></a></article>
										<article><a href="impd3.php"><img class="impd3" src="img/3.jpg"></a></article>
										<article><a href="impd4.php"><img class="impd4" src="img/4.jpg"></a></article>
										<article><a href="impd5.php"><img class="impd5" src="img/5.jpg"></a></article>
									</div>
								</div>
							</div>
							<div id="controls">
								<label for="switch1"></label>
								<label for="switch2"></label>
								<label for="switch3"></label>
								<label for="switch4"></label>
								<label for="switch5"></label>
							</div>
						</article>
				</div>
			</div>
		</section>
	<!-- intro end -->
	<!-- services start !-->
		<div class="wrapper">
			<h2 class="service__title section__title">
				Популярные
			</h2>
			<div class="service__cards">
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/plastic.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Перерабатывание одежды
						</h1>
						<p class="service__card__desc">
							Второе дыхание
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">82 520 руб. </p>
							<p class="service__card__price1">из 180 000 руб.</p>
						</div>
						<a href="d1.php" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/homeless.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Помощь бездомным
						</h1>
						<p class="service__card__desc">
							Помощь людям получить ночлег, одежду и еду
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">68 452 руб.  </p>
							<p class="service__card__price1">из 240 000 руб.</p>
						</div>
						<a href="d2.php" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/food.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Служба доставки продуктов
						</h1>
						<p class="service__card__desc">
							Создание местной довтавки продуктов в г. Якутск
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">23 620 руб.  </p>
							<p class="service__card__price1">из 80 000 руб.</p>
						</div>
						<a href="d3.php" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
			</div>
			<h2 class="service__title section__title">
				Рекомендуемое 
			</h2>
			<div class="service__cards">
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/student.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Онлайн-курс по каллиграфии
						</h1>
						<p class="service__card__desc">
							Создание онлайн курсов по каллиграфии
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">6 120 руб.  </p>
							<p class="service__card__price1">из 20 000 руб.</p>
						</div>
						<a href="d4.php" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/mustar.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Медиазона - Mustar
						</h1>
						<p class="service__card__desc">
							Продвижение якутского языка
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">153 473 руб. </p>
							<p class="service__card__price1">из 590 000 руб.</p>
						</div>
						<a href="d5.php" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/cafe.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Кафе на колесах
						</h1>
						<p class="service__card__desc">
							Создание фуд-трека (мини-кафе на колесах), с быстрой едой
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">32 600 руб.   </p>
							<p class="service__card__price1">из 160 000 руб.</p>
						</div>
						<a href="d6.php" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
			</div>
			<h2 class="service__title section__title">
				Детям
			</h2>
			<div class="service__cards">
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/eduard.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Пусть Эдуард встанет на ноги
						</h1>
						<p class="service__card__desc">
							Помогите купить устройство
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">19 630 руб.  </p>
							<p class="service__card__price1">из 24 000 руб.</p>
						</div>
						<a href="d7.php" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/school.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Дары востока
						</h1>
						<p class="service__card__desc">
							Открытие пекарни дары востока
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">12 050 руб.  </p>
							<p class="service__card__price1">из 700 000 руб.</p>
						</div>
						<a href="d8.php" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/blind.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Настольная игра
						</h1>
						<p class="service__card__desc">
							Настольная игра Темный Властелин от молодых талантов
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">26 518 руб.  </p>
							<p class="service__card__price1">из 400 000 руб.</p>
						</div>
						<a href="d9.php" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
			</div>
		</div>
	<!-- service end-->
	<!-- benefits start -->
		<section class="benefits">
			<div class="wrapper">
				<h1 class="benefits__title section__title">
					Преимущества
				</h1>
				<div class="benefits__wrap benefit">
					<div class="benefit__info">
						<h3 class="benefit__title">
							Подавайте свои идеи
						</h3>
						<p class="benefit__description">
							Подавайте или дополняйте идеи, что бы помочь стартаперу
						</p>
					</div>
					<div class="benefit__pic">
						<img src="img/b1.png" class="benefit__thumb">
					</div>
				</div>
				<div class="benefits__wrap benefit">
					<div class="benefit__pic2">
						<img src="img/b2.png" class="benefit__thumb">
					</div>
					<div class="benefit__info2">
						<h3 class="benefit__title">
							Профиль стартапера
						</h3>
						<p class="benefit__description">
							Ведение социальных сетей проекта (стартапером или командой) 
						</p>
					</div>
				</div>
				<div class="benefits__wrap benefit">
					<div class="benefit__info">
						<h3 class="benefit__title">
							Отчёт от стартапера
						</h3>
						<p class="benefit__description">
							Получайте отчёт от стартапера, что бы смотреть на его результаты
						</p>
					</div>
					<div class="benefit__pic">
						<img src="img/b3.png" class="benefit__thumb">
					</div>
				</div>
			</div>
		</section>
	<!-- benefits end !-->
	<!-- info start -->
		<div class="contacts">
			<div class="contact__info">
				<img src="img/Контакты.png" class="">
			</div>
		</div>
		<div class="map">
          <a class="dg-widget-link" href="http://2gis.ru/yakutsk/firm/7037402698858785/center/129.75309491157535,62.028111066440104/zoom/15?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Якутска</a><div class="dg-widget-link"><a href="http://2gis.ru/yakutsk/firm/7037402698858785/photos/7037402698858785/center/129.75309491157535,62.028111066440104/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.ru/yakutsk/center/129.755657,62.029757/zoom/15/routeTab/rsType/bus/to/129.755657,62.029757╎Айыы Кыhата, Якутская национальная городская гимназия?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Айыы Кыhата, Якутская национальная городская гимназия</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":100 + '%',"height":215,"borderColor":"#a3a3a3","pos":{"lat":62.028111066440104,"lon":129.75309491157535,"zoom":15},"opt":{"city":"yakutsk"},"org":[{"id":"7037402698858785"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
        </div>
	<!-- info end -->
	</main>
</body>
</html>