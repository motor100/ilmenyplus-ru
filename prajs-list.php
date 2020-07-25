<?php
$title = 'Прайс-лист | Фитнес-клуб &quot;Ильмены GYM&quot;';
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

				<div class="text"><h2>На услуги фитнес-клуба «Ильмены GYM»</h2></div>
				<img class="center-img" src="/img/fitnes-club-ilmeny-gym/price-ilmeny-gym.jpg">

				<!-- <table>
				<tr>
					<td width="8%">№</td>
					<td>Наименование услуги</td>
					<td width="18%">Стоимость, руб.</td>
				</tr>
				<tr>
					<td colspan="4" height="30px"><strong>Тренажерный зал</strong></td>
				</tr>
				<tr>
					<td>1.</td>
					<td>Разовое посещение</td>
					<td>200</td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Абонемент на 1 месяц 8 занятий (2 раза в неделю)</td>
					<td>1300 (162) / 1000*</td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Абонемент на 1 месяц 12 занятий (3 раза в неделю)</td>
					<td>1700 (142) / 1400*</td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Абонемент на 1 месяц 8 занятий (2 раза в неделю + баня)</td>
					<td>2200 (275)</td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Абонемент на 1 месяц 12 занятий (3 раза в неделю + баня)</td>
					<td>3300 (275)</td>
				</tr>
				<tr>
					<td colspan="4" height="30px"><strong>Групповые занятия (Йога, Степ, Pilates)</strong></td>
				</tr>
				<tr>
					<td>6.</td>
					<td>Разовое посещение</td>
					<td>300</td>
				</tr>
				<tr>
					<td>7.</td>
					<td>Абонемент на 1 месяц 8 занятия (2 раза в неделю)</td>
					<td>1600 (200)</td>
				</tr>
				<tr>
					<td>8.</td>
					<td>Абонемент на 1 месяц 12 занятий (3 раза в неделю)</td>
					<td>2000 (170)</td>
				</tr>
				<tr>
					<td colspan="4" height="30px"><strong>ВИН-ЧУН</strong></td>
				</tr>
				<tr>
					<td>9.</td>
					<td>Разовое посещение</td>
					<td>200</td>
				</tr>
				<tr>
					<td>10.</td>
					<td>Абонемент на 1 месяц 12 занятий (3 раза в неделю)</td>
					<td>1500 (125)</td>
				</tr>
				<tr>
					<td colspan="4" height="30px"><strong>Стрип-пластика</strong></td>
				</tr>
				<tr>
					<td>11.</td>
					<td>Разовое посещение (продолжительность 1 час)</td>
					<td>250</td>
				</tr>
				<tr>
					<td>12.</td>
					<td>Абонемент на 1 месяц 4 занятий (продолжительность 1 час)</td>
					<td>800 (200)</td>
				</tr>
				<tr>
					<td>13.</td>
					<td>Абонемент на 1 месяц 8 занятий (продолжительность 1 час)</td>
					<td>1600 (200)</td>
				</tr>
				<tr>
					<td>14.</td>
					<td>Разовое посещение (продолжительность 1,5 час)</td>
					<td>300</td>
				</tr>
				<tr>
					<td>15.</td>
					<td>Абонемент на 1 месяц 4 занятий (продолжительность 1,5 час)</td>
					<td>1200 (300)</td>
				</tr>
				<tr>
					<td>16.</td>
					<td>Абонемент на 1 месяц 8 занятий (продолжительность 1,5 час)</td>
					<td>2400 (300)</td>
				</tr>
				<tr>
					<td colspan="4" height="30px"><strong>Индивидуальные занятия</strong></td>
				</tr>
				<tr>
					<td>17.</td>
					<td>Разовое посещение / консультация по питанию</td>
					<td>600</td>
				</tr>
				<tr>
					<td>18.</td>
					<td>Абонемент на 1 месяц 8 занятий (2 раза в неделю)</td>
					<td>3200 (400)</td>
				</tr>
				<tr>
					<td>19.</td>
					<td>Абонемент на 1 месяц 12 занятий (3 раза в неделю)</td>
					<td>4500 (375)</td>
				</tr>
				<tr>
					<td colspan="4" height="30px"><strong>Индивидуальные занятия «Дуэт» (абонемент на 2 человека)</strong></td>
				</tr>
				<tr>
					<td>20.</td>
					<td>Разовое посещение</td>
					<td>900 (450)</td>
				</tr>
				<tr>
					<td>21.</td>
					<td>Абонемент на 1 месяц 8 занятий (2 раза в неделю)</td>
					<td>5500 (687)</td>
				</tr>
				<tr>
					<td>22.</td>
					<td>Абонемент на 1 месяц 12 занятий (3 раза в неделю)</td>
					<td>7000 (584)</td>
				</tr>
				</table>
				
				<div class="text"><h2>Карты фитнес клуба</h2></div>

				<table>
				<tr>
					<td>Индивидуальная карта (полного дня) на 1 месяц</td>
					<td>3500</td>
				</tr>
				<tr>
					<td>Дневная карта на 1 месяц (до 17:00)</td>
					<td>3000</td>
				</tr>
				<tr>
					<td>Индивидуальная карта (полного дня) на 12 месяцев</td>
					<td>20000</td>
				</tr>
				<tr>
					<td>Дневная карта на 12 месяцев (до 16:00)</td>
					<td>15000</td>
				</tr>
				</table>

				<div class="text"><h2>Турецкая Баня</h2></div>

				<table>
				<tr>
					<td>Посещение турецкой бани 1 час</td>
					<td>300</td>
				</tr>
				</table>

				<div class="text"><p>* - для школьников и студентов очной формы до 17.00</p></div> -->
					
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