<?php
$title = 'Расписание занятий | Фитнес-клуб &quot;Ильмены GYM&quot;';
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
				<img class="center-img" src="/img/schedule/schedule1.jpg" alt="Расписание">
				<img class="center-img" src="/img/schedule/schedule2.jpg" alt="Расписание">
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