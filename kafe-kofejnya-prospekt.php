<?php
$title = 'Кафе &quot;Кофейня Проспект&quot;';
$description = 'Кофейня &quot;Проспект&quot; - классическая уютная кофейня в центре города.';
$keywords = 'кофейня, бизнес-ланчи, завтраки, кофе с собой, выпечка, круассаны, венские вафли, кофе';
$path = 'kafe-kofejnya-prospekt.php';
$logo = '/img/kafe-kofejnya-prospekt.png';
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
						<img src="/img/slider/kafe-kofejnya-prospekt/slide_1.jpg" alt="">
					</div>
					<div class="item">
						<img src="/img/slider/kafe-kofejnya-prospekt/slide_2.jpg" alt="">
					</div>
					<div class="item">
						<img src="/img/slider/kafe-kofejnya-prospekt/slide_3.jpg" alt="">
					</div>
					<div class="slider-dots">
						<span class="slider-dots_item" onclick="currentSlide(1)"></span>
						<span class="slider-dots_item" onclick="currentSlide(2)"></span>
						<span class="slider-dots_item" onclick="currentSlide(3)"></span>
					</div>
				</div>
				<div class="small-image">
					<img src="/img/kafe-kofejnya-prospekt/kafe-kofejnya-prospekt-small.jpg" alt="">
				</div>
				<div class="text">
					<p>Уютное кафе в самом центре города Миасс.</p>
					<p>Открыто с 9-00 до 21-00.</p>
					<p>"<strong>Кофейня Проспект</strong>" - здесь пьют чай без церемоний. Здесь на первом месте вкус и качество напитков и десертов!</p>
					<p>Свежая выпечка из собственной кулинарии, великолепный кофе.</p>
					<p>Неповторимые конфеты и торты ручной работы.</p>
					<p>Обращаем ваше внимание - кондитерские изделия и десерты низкокалорийные (при их изготовлении не используется сахар)!</p>
					<p>С 9-00 утра в "Кофейне Проспект" вы можете насладиться вкусными и легкими завтраками.</p>
					<br/>
					<p><strong>Коллектив кафе "Кофейня Проспект" всегда рад видеть Вас в хорошем настроении!</strong></p>
				</div>
				<div class="thumbs">
					<a href="/img/kafe-kofejnya-prospekt/21b.jpg" rel="iLoad"><img src="/img/kafe-kofejnya-prospekt/21.jpg" alt="'Кофейня Проспект' Миасс"/></a>
					<a href="/img/kafe-kofejnya-prospekt/18b.jpg" rel="iLoad"><img src="/img/kafe-kofejnya-prospekt/18.jpg" alt="'Кофейня Проспект' Миасс"/></a>
					<a href="/img/kafe-kofejnya-prospekt/19b.jpg" rel="iLoad"><img src="/img/kafe-kofejnya-prospekt/19.jpg" alt="'Кофейня Проспект' Миасс"/></a>
					<a href="/img/kafe-kofejnya-prospekt/20b.jpg" rel="iLoad"><img src="/img/kafe-kofejnya-prospekt/20.jpg" alt="'Кофейня Проспект' Миасс"/></a>
				</div>

				<p class="title_times">Часы работы: 9:00 - 21:00</p>
				
				<h3>Отзывы наших посетителей:</h3>
				<div class="otziv">
					<div class="otziv_title"><img src="/img/kafe-kofejnya-prospekt/user.png" alt="">Алена</div>
					<p>"Кофе натуральный и ОЧЕНЬ вкусный!"</p>
				</div>
				<div class="otziv">
					<div class="otziv_title"><img src="/img/kafe-kofejnya-prospekt/user.png" alt="">Ксения</div>
					<p>"Невероятно вкусные блинчики! Испекли очень быстро! Здорово! Спасибо!"</p>
				</div>
				<div class="otziv">
					<div class="otziv_title"><img src="/img/kafe-kofejnya-prospekt/user.png" alt="">Александр Викторович</div>
					<p>"Пробовал вафли. Порадовали. Обязательно приду еще раз!"</p>
				</div>
				<div class="otziv">
					<div class="otziv_title"><img src="/img/kafe-kofejnya-prospekt/user.png" alt="">Марина Полякова</div>
					<p>"Была во многих местах Миасса, но в Кофейне "Проспект" капучино самый-самый!"</p>
				</div>
				<div class="otziv">
					<div class="otziv_title"><img src="/img/kafe-kofejnya-prospekt/user.png" alt="">Надеждина А.С.</div>
					<p>"Обалденные блинчики! Кофе класс! Ушла из кофейни в отличном настроении"</p>
				</div>
				<div class="otziv">
					<div class="otziv_title"><img src="/img/kafe-kofejnya-prospekt/user.png" alt="">Елена</div>
					<p>"Крымский салат"-актуально)). А главное вкусно!"</p>
				</div>
				<div class="otziv">
					<div class="otziv_title"><img src="/img/kafe-kofejnya-prospekt/user.png" alt="">Виктор</div>
					<p>"От  разнообразия  кофе разбежались глаза. Остановился на Гляссе и не пожалел! Теперь буду  пробовать каждый раз разное!"</p>
				</div>
				<p class="otziv_dbl">*свой отзыв Вы можете оставить заполнив форму обратной связи</p>
			</div>
			<div class="col-lg-2 col-lg-pull-8 col-md-3 col-md-pull-9">
				<div class="left">
					<?php
					include_once ('kafe-kofejnya-prospekt.navbar.inc.php');
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