<?php
$title = 'Специальные предложения | Кафе &quot;Кофейня Проспект&quot;';
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
				<div class="usluga">
					<div class="usluga_title">Десятая кружка кофе в подарок</div>
					<div class="usluga_text">Каждая десятая кружка кофе в подарок</div>
				</div>
				<img class="center-img" src="/img/special-kafe-kofejnya-prospekt/coffee.jpg" alt="Кофе"/>
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