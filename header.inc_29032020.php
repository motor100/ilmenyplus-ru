<!DOCTYPE html>
<html class="no-js" lang="ru">
<head>

	<meta charset="utf-8">
	<title><?= $title . " Миасс"; ?></title>
	<meta name="description" content="<?= $description; ?>">
	<meta name="keywords" content="<?= $keywords; ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		
	<!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
<!-- 	<script>!function(e){"use strict";function t(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function n(t,n){return e.localStorage&&localStorage[t+"_content"]&&localStorage[t+"_file"]===n}function a(t,a){if(e.localStorage&&e.XMLHttpRequest)n(t,a)?o(localStorage[t+"_content"]):l(t,a);else{var s=r.createElement("link");s.href=a,s.id=t,s.rel="stylesheet",s.type="text/css",r.getElementsByTagName("head")[0].appendChild(s),r.cookie=t}}function l(e,t){var n=new XMLHttpRequest;n.open("GET",t,!0),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&(o(n.responseText),localStorage[e+"_content"]=n.responseText,localStorage[e+"_file"]=t)},n.send()}function o(e){var t=r.createElement("style");t.setAttribute("type","text/css"),r.getElementsByTagName("head")[0].appendChild(t),t.styleSheet?t.styleSheet.cssText=e:t.innerHTML=e}var r=e.document;e.loadCSS=function(e,t,n){var a,l=r.createElement("link");if(t)a=t;else{var o;o=r.querySelectorAll?r.querySelectorAll("style,link[rel=stylesheet],script"):(r.body||r.getElementsByTagName("head")[0]).childNodes,a=o[o.length-1]}var s=r.styleSheets;l.rel="stylesheet",l.href=e,l.media="only x",a.parentNode.insertBefore(l,t?a:a.nextSibling);var c=function(e){for(var t=l.href,n=s.length;n--;)if(s[n].href===t)return e();setTimeout(function(){c(e)})};return l.onloadcssdefined=c,c(function(){l.media=n||"all"}),l},e.loadLocalStorageCSS=function(l,o){n(l,o)||r.cookie.indexOf(l)>-1?a(l,o):t(e,"load",function(){a(l,o)})}}(this);</script> -->

	<!-- Load CSS Start -->
	<!-- <script>loadLocalStorageCSS( "webfonts", "css/fonts.min.css?ver=1.0.0" );</script> -->
	<!-- Load CSS End -->

	<!-- <link rel="stylesheet" href="css/body-first.min.css"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="css/fonts.min.css"> -->
	<!-- <link rel="stylesheet" href="css/hotel-ilmeny.min.css"> -->
	<link rel="stylesheet" href="css/hotel-ilmeny.css">

	<script src="/js/slider/jquery-1.10.2.min.js"></script>
	<script src="/js/slider/jquery.timers.js"></script>
	<script src="/js/slider/slider.js"></script>
	<script src="/js/feed.js"></script>
	<!-- <link rel="stylesheet" href="/js/slider/slider.css"/> -->

</head>

<body>

<!-- Yandex.Metrika counter -->
<script>
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(53645557, "init", {
        clickmap:false,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:false
   });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/53645557" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<header>
	<div class="main-head">
		<div class="container">
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-2 col-sm-3">
					<div class="logotype">
						<a href="<?= $path; ?>"><img src="<?= $logo; ?>" alt="<?= $title . " Миасс"; ?>"></a>
					</div>
				</div>
				<div class="col-lg-5 col-sm-5"></div>
				<div class="col-lg-3 col-sm-4">
					<div class="feedback">
						<p class="fline">Миасс, пр. Автозаводцев, 34</p>
						<a class="fline-number" href="tel:+73513571323">(3513) 57-13-23</a>
						<a class="fline-number" href="tel:+79000861323">89000861323</a>
						<a class="fline-social-links" href="http://vk.com/restoranmiass" target="_blank"><img src="/img/vk.png" alt="вконтакте"> мы вконтакте</a>
						<a class="fline-social-links" href="https://www.instagram.com/vostochnyj_dvor_miass/" target="_blank"><img src="/img/insta.png" alt="инстаграм"> мы в инстаграм</a>
						<div id="feed_link" class="fline-feedback-link">Свяжитесь с нами</div>
					</div>
				</div>
				<div class="col-lg-1"></div>
			</div>
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-10">
					<div class="gmenu">
						<a href="/">Главная</a>
						<a href="https://2gis.ru/miass/firm/12244689767893316">Схема проезда</a>
					</div>
				</div>
				<div class="col-lg-1"></div>
			</div>
		</div>
	</div>
</header>