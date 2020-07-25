<?php
$title = 'Конференц-зал | Гостиница &quot;Ильмень&quot;';
$description = 'Конференц-зал в центре города Миасс';
$keywords = 'зал, бизнес, презентация';
$path = 'hotel-ilmeny.php';
$logo = '/img/hotel-ilmeny.png';
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
						<img src="/img/slider/conference-hall/slide_1.jpg" alt="">
					</div>
					<div class="item">
						<img src="/img/slider/conference-hall/slide_2.jpg" alt="">
					</div>
					<div class="slider-dots">
						<span class="slider-dots_item" onclick="currentSlide(1)"></span>
						<span class="slider-dots_item" onclick="currentSlide(2)"></span>
					</div>
				</div>
				<div class="small-image">
					<img src="/img/conference-hall/conference-hall-small.jpg" alt="">
				</div>
				<div class="text">
					<p>Уютный и удобный конференц-зал вместимостью до 40 чел. Оснащен компьютером, проектором, экраном, флип-чатом. Отличное место для проведения деловых встреч, тренингов, семинаров.</p>
					<p>Стоимость 1 часа - 850 руб.</p>
					<p>Также Вы можете заказать в дополнение к своему мероприятию кофе-брейки и бизнес-ужины.</p>
				</div>
			</div>
			<div class="col-lg-2 col-lg-pull-8 col-md-3 col-md-pull-9">
				<div class="left">
					<?php
					include_once ('hotel-ilmeny.navbar.inc.php');
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
