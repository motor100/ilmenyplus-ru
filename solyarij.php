<?php
$title = 'Солярий | Фитнес-клуб &quot;Ильмены GYM&quot;';
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
				<div class="text">
					<p>Летнее солнце щедро дарит нам ощущение праздника, красоты и молодости - все, чего нам так не хватает долгими зимними днями. В нашем <a href="fitnes-club-ilmeny-gym.php">фитнес-клубе</a> работает вертикальный <strong>турбо-солярий</strong>, позволяющий получить естественный и идеальный загар в любую погоду.</p>
					<img class="left-img" src="/img/solarium/solyarium-fitnes-club-ilmeny-gym.jpg" alt="Солярий Ильмены GYM Миасс">
					<p>Знаете ли вы, что всего несколько сеансов в солярии перед поездкой в страну с жарким климатом позволит сохранить красоту и здоровье кожи? Все дело в том, что загар - это естественная защитная реакция кожи на воздействие солнечных лучей.<br>Клетки эпидермиса вырабатывают меланиновые пигменты, которые окрашиваются в коричневый цвет, и способствуют утолщению эпидермиса и образованию «солнечных мозолей», служащих защитой от ультрафиолета на 40%!<br>
					<strong>Солярий</strong> хорош не только тем, что придает нашей коже приятный загорелый оттенок.В нем достигается неплохой косметический и лечебный эффект: очищается кожа, прогреваются мышцы, что способствует релаксации, обеззараживаются легкие.</p>
					<p>И все это благодаря тому, что энергия света оказывает благоприятное действие на ряд процессов, протекающих в организме, например, на обмен веществ, что издавна используется даже при лечении различных заболеваний.</p>
					<h2>Расценки на солярий "Ильмены GYM" Миасс</h2>
					<table>
						<tr>
							<td colspan="2">Разовое посещение</td>
						</tr>
						<tr>
							<td>1 минута</td>
							<td>12 рублей</td>
						</tr>
						<tr>
							<td colspan="2">Абонементы</td>
						</tr>
						<tr>
							<td>50 минут</td>
							<td>550 рублей</td>
						</tr>
						<tr>
							<td>100 минут</td>
							<td>1000 рублей </td>
						</tr>
						<tr>
							<td>200 минут</td>
							<td>1900 рублей</td>
						</tr>
					</table>
				</div>
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