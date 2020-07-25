<?php
$title = 'Забронировать номер | Гостиница &quot;Ильмень&quot;';
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
				<h1><?= $title . " Миасс"; ?></h1>
				<div id="widgetbron">
					<script type="text/javascript">
					    (function(k,o,t,e,l){
					        l = document.createElement("script");
					        l.type = "text/javascript";
					        l.src = "https://bookonline24.ru/widget.js";
					        l.async = !0;
					        l.onload = l.onreadystatechange = function() {
					            e = this.readyState;
					            !o && (!e || e === "complete") && (o = 1) && k();
					        };
					        t = document.getElementsByTagName("script")[0];
					        t.parentNode.insertBefore(l, t);
					    })(function(){
					        HotelWidget.init({
					            id: "9a7fea44-5c23-44d8-aab4-d5fe7b1d74e3",
					            type: "verticalBlock",
					            form: {
					                // Замените ID элемента для виджета здесь
					                container: "widgetbron",
					            }
					        }, "https://bookonline24.ru/");
					    });
					</script>
				</div>

				<!-- <div class="frm_bron">
					<h4>Заполните форму бронирования номера</h4>
					<form action="sendmail.php" method="post">
						<div class="bron_row">
							<p>ФИО*</p>
							<input type="text" class="inp_fio" name="fio" id="fio" required>
						</div>
						<hr>
				
						<div class="wr_calendar">
							<div class="bron_row_cal">
								<div class="inp_col">
									<p>Дата заезда*:</p>
									<input type="text" name="starting" id="d_start" class="input-width" value="30.06.2019" required onchange="return HowDays(this.form)">
									<input type="text" name="starting" id="d_start" class="input-width" required onchange="return HowDays(this.form)">
								</div>
								<div class="inp_col">
									<p>Заезд после 12 часов?</p>
									<div class="radiobtn">
										<input type="radio" name="zaezd" value="Да">Да
										<input type="radio" checked="checked" name="zaezd" value="Нет">Нет
									</div>
								</div>
							</div>
							<div class="bron_row_cal">
								<div class="inp_col">
									<p>Дата выезда*:</p>
									<input name="finishing" id="d_finish" class="input-width" type="text" placeholder="Дата выезда" value="01.07.2019" required onchange="return HowDays(this.form)">
								</div>
								<div class="inp_col">
									<p>Выезд после 12 часов?</p>
									<div class="radiobtn">
										<input type="radio" name="viezd" value="Да">Да
										<input type="radio" checked="checked" name="viezd" value="Нет">Нет
									</div>
								</div>
							</div>
						</div>
						<div class="msg_days">
							<p>Количество полных дней проживания:</p>
							<div id="msg_days_data">1</div>
						</div>
				
						<hr>
						<div class="bron_row">
							<div class="inp_col2">
								<p>Категория номера:</p>
								<select name="nomer" class="kat_room input-width">
									<option value="1" >Люкс "Екатерина"</option>
									<option value="2" >Люкс "Симонов"</option>
									<option value="3" >Двухкомнатный номер 1 категории</option>
									<option value="4" >Однокомнатный номер 1 категории</option>
									<option value="5" >Джуниор сюит, комфорт</option>
								</select>
							</div>
							<div class="inp_col2">
								<p>Тип размещения:</p>
								<div class="radiobtn">
									<input type="radio" name="typerazm" value="Одноместный" checked="checked">Одноместный
									<input type="radio" name="typerazm" value="Двухместный">Двухместный
								</div>
							</div>
						</div>
				
						<hr>
						<div class="bron_row">
							<div class="inp_col2">
								<p>Ваш город:</p>
								<input type="text" class="inp_s input-width" name="sity">
							</div>
							<div class="inp_col2">
								<p>Телефон*:</p>
								<input type="text" class="inp_t input-width" id="phone" name="phone">
							</div>
						</div>
				
						<div class="bron_row">
							<div class="inp_col2">
								<p>Способ оплаты:</p>
								<select name="oplata" class="kat_room input-width">
									<option value="Наличными" class="imagebacked" selected>Наличными</option>
									<option value="Картой" class="imagebacked">Картой</option>
									<option value="Выставить счет" class="imagebacked">Выставить счет</option>
								</select>
							</div>
							<div class="inp_col2">
								<p>Ваш e-mail:</p>
								<input type="text" class="inp_t input-width" name="email">
							</div>
						</div>
				
						<hr>
						<div class="bron_sub">
							<input type="submit" value="Забронировать" class="buttonbron input-width" onClick="return Formdata(this.form)">
						</div>
						<p>* - поля обязательные для заполнения</p>
					</form>
				</div>
				 -->
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