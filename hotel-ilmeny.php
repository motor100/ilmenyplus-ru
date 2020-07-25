<?php
$title = 'Гостиница &quot;Ильмень&quot;';
$description = 'Гостиница &quot;Ильмень&quot;. Гостиница Три звезды бизнес-класса в центре города';
$keywords = 'гостиница, отель, апартаменты, снять комнату';
$path = 'hotel-ilmeny.php';
$logo = '/img/hotel-ilmeny.png';
include_once ('header.inc.php');
?>

<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-8 col-lg-push-2 col-md-9 col-md-push-3">
				<h1 class="title"><?= $title . " Миасс"; ?></h1>
				<div class="slider">
					<div class="item">
						<img src="/img/slider/hotel-ilmeny/slide_8.jpg" alt="комната">
					</div>
					<div class="item">
						<img src="/img/slider/hotel-ilmeny/slide_9.jpg" alt="гостиница">
					</div>
					<div class="item">
						<img src="/img/slider/hotel-ilmeny/slide_4.jpg" alt="отель">
						<div class="slideText">Номера "Стандарт"</div>
					</div>
					<div class="item">
						<img src="/img/slider/hotel-ilmeny/slide_6.jpg" alt="номер">
					<div class="slideText">Номера "Стандарт"</div>
					</div>
					<div class="item">
						<img src="/img/slider/hotel-ilmeny/slide_3.jpg" alt="комната">
					  <div class="slideText">Номера "Люкс"</div>
					</div>
					<div class="item">
						<img src="/img/slider/hotel-ilmeny/slide_7.jpg" alt="гостиница">
					  <div class="slideText">Номера "Люкс"</div>
					</div>
					<div class="item"><img src="/img/slider/hotel-ilmeny/slide_5.jpg" alt="отель">
					  <div class="slideText">Номера "Люкс" 2014 года</div>
					</div>
					<div class="item">
						<img src="/img/slider/hotel-ilmeny/slide_1.jpg" alt="апартаменты">
						<div class="slideText">Апартаменты "Екатерина"</div>
					</div>
					<div class="item">
						<img src="/img/slider/hotel-ilmeny/slide_2.jpg" alt="апартаменты">
						<div class="slideText">Апартаменты "Симонов"</div>
					</div>
					<div class="slider-dots">
						<span class="slider-dots_item" onclick="currentSlide(1)"></span>
						<span class="slider-dots_item" onclick="currentSlide(2)"></span>
						<span class="slider-dots_item" onclick="currentSlide(3)"></span>
						<span class="slider-dots_item" onclick="currentSlide(4)"></span>
						<span class="slider-dots_item" onclick="currentSlide(5)"></span>
						<span class="slider-dots_item" onclick="currentSlide(6)"></span>
						<span class="slider-dots_item" onclick="currentSlide(7)"></span>
						<span class="slider-dots_item" onclick="currentSlide(8)"></span>
						<span class="slider-dots_item" onclick="currentSlide(9)"></span>
					</div>
				</div>
				<div class="small-image">
					<img src="/img/hotel-ilmeny/hotel-ilmeny-small.jpg" alt="гостиница">
				</div>
				<div class="text">
					<p>Всего в 10 минутах от городского вокзала разместилась известная в Миассе гостиница – Ильмень.</p> 
					<p>Здание имеет полувековую историю и хранит много легенд. В 2019 году мы успешно прошли аттестацию, в результате которой гостинице была присвоена категория «ТРИ звезды» и статус стал соответствовать уровню отеля бизнес-класса.</p>
						<div class="tour3d">
							<a href="tour3d.html"><img src="/img/hotel-ilmeny/tour3d.jpg" alt="3D тур Гостиница 'Ильмень' Миасс"></a>
						</div>
					<p>Номерной фонд гостиницы - 32 номера различных категорий, сочетающие в себе комфортные условия и домашний уют.</p>
					<p>Для вашего удобства <a href="/img/hotel-ilmeny/breakfast.jpg">завтрак</a> включен в стоимость проживания (обед и ужин могут быть поданы в номер).</p>
					<p>Для бронирования номера вы можете воспользоваться формой <a href="zabronirovat-nomer.php">онлайн-бронирования</a>. Либо звоните по телефону 8(3513)57-13-23 и мы с удовольствием поможем вам выбрать лучший номер.</p>
					<p>Режим работы: Круглосуточно</p>
				</div>
				
				<div class="usluga">
					<div class="usluga_title">Трансфер</div>
					<div class="usluga_text">Дополнительная услуга по встречи гостей из аэропорта или ЖД вокзала</div>
				</div>

				<div class="usluga">
					<div class="usluga_title">Доступ к интернету</div>
					<div class="usluga_text">Доступ к wi-fi бесплатно во всех номерах, на 1-ом этаже комплекса (зона Reception)</div>
				</div>

				<div class="usluga">
					<div class="usluga_title">Парковка</div>
					<div class="usluga_text">Парковка для ваших автомобилей</div>
				</div>

				<div class="usluga">
					<div class="usluga_title">Связь</div>
					<div class="usluga_text">Междугородняя и факсимильная связи</div>
				</div>

				<div class="usluga">
					<div class="usluga_title">Вызов такси</div>
					<div class="usluga_text">Вызов такси по вашему запросу</div>
				</div>

				<div class="usluga">
					<div class="usluga_title">Спортзал</div>
					<div class="usluga_text">Фитнес-клуб "Ильмены GYM"</div>
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