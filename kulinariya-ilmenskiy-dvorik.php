<?php
$title = 'Кулинария &quot;Ильменский дворик&quot; торты на заказ';
$description = 'Кулинария &quot;Ильменский дворик&quot;. Всегда свежая выпечка. Торты на заказ.';
$keywords = 'выпечка, торты, пирожное';
$path = 'kulinariya-ilmenskiy-dvorik.php';
$logo = '/img/kulinariya-ilmenskiy-dvorik.png';
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
						<img src="/img/slider/kulinariya-ilmenskiy-dvorik/slide_1.jpg" alt="">
					</div>
					<div class="item">
						<img src="/img/slider/kulinariya-ilmenskiy-dvorik/slide_2.jpg" alt="">
					</div>
					<div class="item">
						<img src="/img/slider/kulinariya-ilmenskiy-dvorik/slide_3.jpg" alt="">
					</div>
					<div class="item">
						<img src="/img/slider/kulinariya-ilmenskiy-dvorik/slide_4.jpg" alt="">
					</div>
					<div class="item">
						<img src="/img/slider/kulinariya-ilmenskiy-dvorik/slide_5.jpg" alt="">
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
					<img src="/img/kulinariya-ilmenskiy-dvorik/kulinariya-ilmenskiy-dvorik-small.jpg" alt="">
				</div>
				<div class="text">
					<p>Кулинария «Ильменский дворик» здесь можно найти всё необходимое, чтобы каждый ваш завтрак был питательным и заряжающим энергий, обед – вкусным и сытным, а ужин – аппетитным, но лёгким. Наши кондитеры и повара каждый день творят изысканные и классические блюда, чтобы приходя в кулинарию «Ильменский дворик» вам было что выбрать и чем насладиться.</p> 
					<p>«Фишка» нашей кулинарии - домашние, горячие пироги, с большим количеством начинки и тонким тостом. Оно в наших пирогах фирменное, сделанное по секретным рецептам.
					Кулинария «Ильменский дворик» - это незаменимый помощник при организации большого мероприятия. Здесь вы выберете походящее меню для любого события. 
					</p>
					<p>Повара ресторана «Восточный двор» с удовольствием готовят для вас:</p>
					<ul>
						<li><p>холодные закуски</p></li>
						<li><p>салаты</p></li>
						<li><p>горячия блюда</p></li>
						<li><p>суши, роллы</p></li>
						<li><p>куры - гриль</p></li>
						<li><p>пицца</p></li>
						<li><p>домашняя выпечка</p></li>
						<li><p>свежий хлеб</p></li>
						<li><p>торты, пирожное</p></li>
						<li><p>мороженое</p></li>
						<li><p>напитки</p></li>
					</ul>
				</div>
				<h6>Принимаем заказы!</h6>
				<div class="usluga">
					<div class="usluga_text">Кулинария 'Ильменский дворик'. Изготовим на Ваш вкус праздничные торты на заказ в городе Миасс! Заказы на торты мы принимаем с пн-пт с 9.00-17.00 только при личной встрече в кулинарии.</div>
				</div>
				<p class="title_times">Часы работы: Пн. - Сб. с 9-00 до 20-00; Вс. с 9-00 до 19-00</p>
			</div>	
			<div class="col-lg-2 col-lg-pull-8 col-md-3 col-md-pull-9">
				<div class="left">
					<?php
					include_once ('kulinariya-ilmenskiy-dvorik.navbar.inc.php');
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