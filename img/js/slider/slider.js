(function ($) {
$(document).ready(function(e) {
/*  Настройки Слайдера: */
var mainConfig = new Array();

mainConfig[0] = {
	hwSlideSpeed: 2000, // Скорость анимации смены слайда.
	hwTimeOut: 4000, // Задержка автоматической прокрутки.
	hwNeedLinks: false, // true - если нужны ссылки вперёд-назад, false - если не нужны.
	hwNeedBullets: false, // true - если нужны кнопки переходна на каждый слайд, иначе - false
	hwAutoRotate: true // true - автоматическая прокрутка включена, false - выключена.
	}
mainConfig[1] = {
	hwSlideSpeed: 2000,
	hwTimeOut: 4000,
	hwNeedLinks: false,
	hwNeedBullets: false,
	hwAutoRotate: false
	}
mainConfig[2] = {
	hwSlideSpeed: 2000,
	hwTimeOut: 4000,
	hwNeedLinks: false,
	hwNeedBullets: true,
	hwAutoRotate: false
	}
var activeSlide = new Array();
var slideCount = new Array();
var timerid = new Array();
var neddRotatr = new Array();
	
/* Для каждого .slider-wrap  */
$('.slider-wrap').each(function(index) {
	var mainThis = $(this)
	slideCount[index] = $(".slide", mainThis).size();
	activeSlide[index] = 0;
	$('.slide', mainThis).css({"position" : "absolute", "top":'0', "left": '0'}).hide().eq(0).show();

/* Обработчики ссылок */
$('.nextbutton', mainThis).click(function(){
		animSlide(index, "next");
		return false;
		})
		
$('.prewbutton', mainThis).click(function(){
		animSlide(index, "prew");
		return false;
		})
 
$('.control-slide', mainThis).click(function(){
	var goToNum = parseFloat($(this).text());
	animSlide(index, goToNum);
	});	
	
/* Включаем автоматическую прокрутку, если она нужна, с паузой при наведении курсора на слайдер.
   Используем jQuery плагин timers.
 */
if(mainConfig[index].hwAutoRotate){
mainThis.everyTime(mainConfig[index].hwTimeOut, timerid[index], function(){animSlide(index, 'next');});	
mainThis.hover(
function(){mainThis.stopTime(timerid[index]);},
function(){mainThis.everyTime(mainConfig[index].hwTimeOut, timerid[index], function(){animSlide(index, 'next');});}	
	);
}
	});
/* Для каждого .slider-wrap - конец */
	
/* Функция прокрутки */
var animSlide = function(id, arrow){
	var $containerNum = $('.slider-wrap').eq(id).find(".slide");
	var activeVar = activeSlide[id];
	var countVar = slideCount[id];
/* Запускаем анимацию только если выбран другой слайд (не показывающийся в данный момент). */
if(activeVar != arrow){ 
	$containerNum.eq(activeVar).fadeOut(mainConfig[id].hwSlideSpeed);
	$('.slider-wrap').eq(id).find(".control-slide").eq(activeVar).removeClass("active");
	if(arrow == "next"){
			if(activeVar == (countVar-1)){activeVar=0;}
			else{activeVar++}
		}
	else if(arrow == "prew")
		{
			if(activeVar == 0){activeVar=countVar-1;}	
			else{activeVar-=1}
		}
	else{
			activeVar = arrow;
		}
	$containerNum.eq(activeVar).fadeIn(mainConfig[id].hwSlideSpeed);
	activeSlide[id] = activeVar;
	$('.slider-wrap').eq(id).find(".control-slide").eq(activeVar).addClass("active");
	}}
/* Функция прокрутки - Конец */

});
})(jQuery);
