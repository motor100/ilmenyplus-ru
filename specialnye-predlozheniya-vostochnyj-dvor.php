<?php
$title = 'Спецпредложения | Ресторан &quot;Восточный двор&quot;';
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
				<div class="text">
					<h2>Наливки на ягодах</h2>
					<img class="left-img-special" src="/img/special-vostochnyj-dvor/nalivka.jpg" alt="наливка">
				</div>
				<div class="text">
					<h2>Травяные чаи</h2>
					<img class="left-img-special" src="/img/special-vostochnyj-dvor/herbaltea.jpg" alt="чай">
				</div>
				<div class="text">
					<h2>Варенье</h2>
					<img class="left-img-special" src="/img/special-vostochnyj-dvor/jam.jpg" alt="варенье">
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