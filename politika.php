<?php
$title = 'Ресторанно-гостиничный комплекс';
$description = 'Ресторанно-гостиничный комплекс расположен в центре города Миасс. Гостиница, ресторан, кафе, кулинария, фитнес - все в одном месте!';
$keywords = 'гостиница, отель, ресторан, кафе, кулинария, кофейня, фитнес-клуб';
$path = '/';
include_once ('index.header.inc.php');
?>

<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-6 col-lg-push-2 col-md-6 col-md-push-3">
				<div class="text_container">
				<h1><?= $title; ?></h1>
					<div class="text">
						<p><strong>Политика обработки персональных данных ООО “Ильмены Плюс”</strong></p>
						<ul>
							<li><a href="/img/politika/Scan1.pdf">Лист 1</a></li>
							<li><a href="/img/politika/Scan2.pdf">Лист 2</a></li>
							<li><a href="/img/politika/Scan3.pdf">Лист 3</a></li>
							<li><a href="/img/politika/Scan4.pdf">Лист 4</a></li>
							<li><a href="/img/politika/Scan5.pdf">Лист 5</a></li>
						</ul>
						<ul>
							<li><a href="/img/politika/Ocenka-uslovij-truda1.pdf">Оценка условий труда 1</a></li>
							<li><a href="/img/politika/Ocenka-uslovij-truda2.pdf">Оценка условий труда 2</a></li>
							<li><a href="/img/politika/Ocenka-uslovij-truda3.pdf">Оценка условий труда 3</a></li>
							<li><a href="/img/politika/Ocenka-uslovij-truda4.pdf">Оценка условий труда 4</a></li>
						</ul>
					</div>
				</div>
			</div>
			<?php
			include_once ('index.navbar.inc.php');
			?>
			<div class="col-lg-1"></div>
		</div>
	</div>
</div>

<?php
include_once ('index.footer.inc.php');
?>