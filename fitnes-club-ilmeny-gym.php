<?php
$title = 'Фитнес-клуб &quot;Ильмены GYM&quot;';
$description = '&quot;Ильмены GYM&quot; - это профессиональный фитнес-клуб, расположенный в центре города Миасс.';
$keywords = 'фитнес, спорт, тренажерный зал, солярий';
$path = 'fitnes-club-ilmeny-gym.php';
$logo = '/img/fitnes-club-ilmeny-gym.png';
include_once ('header.inc.php');
?>

<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-8 col-lg-push-2 col-md-9 col-md-push-3">
				<h1><?= $title . " Миасс"; ?></h1>
				<div class="slider">
					<div class="item">
						<img src="/img/slider/fitnes-club-ilmeny-gym/slide_1.jpg" alt="">
					</div>
					<div class="item">
						<img src="/img/slider/fitnes-club-ilmeny-gym/slide_2.jpg" alt="">
					</div>
					<div class="item">
						<img src="/img/slider/fitnes-club-ilmeny-gym/slide_3.jpg" alt="">
					</div>
					<div class="item">
						<img src="/img/slider/fitnes-club-ilmeny-gym/slide_4.jpg" alt="">
					</div>
					<div class="item">
						<img src="/img/slider/fitnes-club-ilmeny-gym/slide_5.jpg" alt="">
					</div>
					<div class="slider-dots">
						<span class="slider-dots_item" onclick="currentSlide(1)"></span>
						<span class="slider-dots_item" onclick="currentSlide(2)"></span>
						<span class="slider-dots_item" onclick="currentSlide(3)"></span>
						<span class="slider-dots_item" onclick="currentSlide(4)"></span>
						<span class="slider-dots_item" onclick="currentSlide(5)"></span>
					</div>
				</div>
				<div class="small-image">
					<img src="/img/fitnes-club-ilmeny-gym/fitnes-club-ilmeny-gym-small.jpg" alt="">
				</div>
				<div class="text">
					<p>"<strong>Ильмены GYM</strong>" - это профессиональный фитнес-клуб, расположенный в центре города в здании гостиницы «Ильмень».</p>
					<p>Создатели фитнес - клуба постарались сделать все, чтобы он стал одним из самых достойных в городе. Просторные и светлые тренажерные залы, единственные во всей области уникальные тренажеры американской фирмы "Nautilus" (США), которая входит в тройку лучших фирм - производителей в мире.</p>
					<a class="fline-social-links" href="https://vk.com/ilmeny_gym" target="_blank"><img src="/img/vk.png" alt=""> мы вконтакте</a>
					<a class="fline-social-links" href="https://www.instagram.com/ilmeny_gym/" target="_blank"><img src="/img/insta.png" alt=""> мы в инстаграм</a>
					<p>Кардио-студия позволит укрепить сердечно-сосудистую систему, избавиться от лишнего веса, привести в тонус мышцы всего тела. Опытный инструктор поможет достичь максимального эффекта в кротчайшие сроки.</p>
					<p>В кабинете массажиста нашего комплекса (<a href="http://medestetica74.ru/">medestetica74.ru</a>) вам предлагаются все виды массажа от специалиста высшей категории: оздоровительный массаж, лечебный, антицеллюлитный, боди-массаж, постизометрическая релаксация, тайский массаж стоп.
					Также к вашим услугам турецкая баня и солярий.</p>
					<h2>Фитнес-клуб "Ильмены GYM": профессиональный подход к Вашему здоровью!</h2>
					<p>Для удобства посетителей в фитнес-клубе "Ильмены GYM" действуют абонементы и клубные карты.</p>
					<p>Телефон фитнес-клуба: 8 (3513) 57-19-55</p>
					<p>Режим работы фитнес-клуба:</p>
					<img class="center-img" src=/img/fitnes-club-ilmeny-gym/schedule1.jpg alt="">
				</div>

			</div>	
			<div class="col-lg-2 col-lg-pull-8 col-md-3 col-md-pull-9">
				<div class="left">
					<?php
					include_once ('fitnes-club-ilmeny-gym.navbar.inc.php');
					?>
					<?php
					include_once ('navlogo.inc.php');
					?>
				</div>
			</div>
			<div class="col-lg-1"></div>
		</div>
	</div>
</div>
	
<?php
include_once ('footer.inc.php');
?>