<?php
$title = 'Акции | Ресторан &quot;Восточный двор&quot;';
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
				<h1 class="title"><?= $title . " Миасс"; ?></h1>
				<div class="usluga">
					<div class="usluga_title"><span>Номер для молодоженов в подарок!</span></div>
					<div class="usluga_text"><p>При заказе свадебного банкета в ресторане «Восточный Двор» номер в гостинице «Ильмень» для молодоженов в подарок.</p></div>
					<img src="/img/promo-vostochnyj-dvor/svadba.png">
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