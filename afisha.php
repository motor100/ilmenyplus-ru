<?php
$title = 'Афиша ресторанно-гостиничного комплекса &quot;Ильмень&quot;';
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
				<img class="center-img" src="/img/1500p.jpg">
				<div class="text"><p></p></div>
				<img class="center-img" src="/img/1550p.jpg">
				<div class="text"><p></p></div>
				<img class="center-img" src="/img/2500p.jpg">
				<div class="text"><p></p></div>
				<img class="center-img" src="/img/afisha/afisha-bal.jpg">
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