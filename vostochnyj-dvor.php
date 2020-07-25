<?php
$title = 'Ресторан &quot;Восточный двор&quot;';
$description = 'Ресторан &quot;Восточный двор&quot;. Классические европейский ресторан бизнес-класса в центре города Миасс.';
$keywords = 'ресторан, европейская кухня, классический ресторан, бизнес-ланчи, банкеты';
$path = 'vostochnyj-dvor.php';
$logo = '/img/vostochnyj-dvor.png';
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
						<img src="/img/slider/vostochnyj-dvor/slide_1.jpg" alt="">
					</div>
					<div class="item">
						<img src="/img/slider/vostochnyj-dvor/slide_2.jpg" alt="">
					</div>
					<div class="item">
						<img src="/img/slider/vostochnyj-dvor/slide_3.jpg" alt="">
					</div>
					<div class="item">
						<img src="/img/slider/vostochnyj-dvor/slide_4.jpg" alt="">
					</div>
					<div class="item">
						<img src="/img/slider/vostochnyj-dvor/slide_5.jpg" alt="">
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
					<img src="/img/vostochnyj-dvor/vostochnyj-dvor-small.jpg" alt="">
				</div>
				<div class="text">
					<p>Говорят, что роскошь где-то далеко?! Пусть говорят!</p>
					<p><strong>Ресторан «Восточный Двор»</strong> в городе Миасс предлагает меню в формате a la carte с 12:00 до 23:00 часов ежедневно. Меню включает в себя классику европейской гастрономии, а также несколько позиций авторских блюд от шеф-поваров, призеров конкурсов кулинарного искусства.Мы рады предложить вам различные аппетитные закуски и салаты. Любители мясной кухни будут приятно удивлены рибаем говядины, а также каре ягненка. На Ваш выбор блюда из рыбы: дорадо, осетр в различных вариантах приготовления, пельмени с семгой.Истинные гурманы найдут такие блюда, как сфольяттини с креветками, качукко из морепродуктов, перепела в гранатовом соусе.</p>
					<p>Одним из достоинств <strong>ресторана «Восточный Двор»</strong> является богатая винная карта, которая включает в себя самых популярных производителей. В карте напитков Вы найдете вина Франции, Италии, Испании, Чили, а также крепкие напитки такие, как виски, коньяк, текила и др.</p>
					<p>Основной зал, вместимостью до 80 человек, разделен на несколько интерьерных секций (картинная галерея с винотекой, уютная зона с мягкими диванами, европейская зона с классической сервировкой). VIP–зал с зимним садом рассчитан на компании до 25 человек.</p>
					<p>Ресторан "Восточный Двор" рад переложить вам НАЛИВКИ НА ЯГОДАХ, ТРАВЯНЫЕ ЧАИ и ВАРЕНЬЕ СОБСТВЕННОГО ПРОИЗВОДСТВА! Попробовав все это, Вы станете нашим постоянным гостем!!!</p>
					<h2>Выездная регистрация брака</h2>
					<p>У нас Вы можете проводить выездные регистрации, во дворе гостиницы "Ильмень"</p>
				</div>
				
				<div class="thumbs">
					<a href="img/vostochnyj-dvor/1b.jpg" rel="iLoad|group"><img src="img/vostochnyj-dvor/1.jpg" alt="Ресторан 'Восточный двор'"></a>
					<a href="img/vostochnyj-dvor/2b.jpg" rel="iLoad|group"><img src="img/vostochnyj-dvor/2.jpg" alt="Ресторан 'Восточный двор'"></a>
					<a href="img/vostochnyj-dvor/3b.jpg" rel="iLoad|group"><img src="img/vostochnyj-dvor/3.jpg" alt="Ресторан 'Восточный двор'"></a>
					<a href="img/vostochnyj-dvor/4b.jpg" rel="iLoad|group"><img src="img/vostochnyj-dvor/4.jpg" alt="Ресторан 'Восточный двор'"></a>
				</div>

				<div class="title_times"><p>Часы работы: 12 - 23 без выходных</p></div>
				
				<div class="usluga">
					<div class="usluga_title">Проведение праздников</div>
					<div class="usluga_text">Проведение банкетов и фуршетов для любого знаменательного события (день рождения, свадьба, юбилей, корпоративный вечер, выпускной)</div>
				</div>

				<div class="usluga">
					<div class="usluga_title">Поминальные обеды</div>
					<div class="usluga_text">Проведение поминальных обедов;</div>
				</div>

				<div class="usluga">
					<div class="usluga_title">Кондитерские заказы</div>
					<div class="usluga_text">Заказ тортов, пирогов с различными начинками;</div>
				</div>

				<div class="usluga">
					<div class="usluga_title">Catering</div>
					<div class="usluga_text">Catering (выездное обслуживание) с высококлассным сервисом от квалифицированного персонала</div>
				</div>
			</div>
			<div class="col-lg-2 col-lg-pull-8 col-md-3 col-md-pull-9">
				<div class="left">
					<?php
					include_once ('vostochnyj-dvor.navbar.inc.php');
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
