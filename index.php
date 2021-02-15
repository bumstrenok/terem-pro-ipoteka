<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php'); //подключаем битрикс

use Terem\AppBundle\Enum\Form;
use Terem\AppBundle\Enum\View;
use Terem\AppBundle\Tools\Globals;

?>

<!DOCTYPE html>
<html lang="ru" class="geolocation history svg audio canvas webgl video csspointerevents hashchange supports svgasimg no-touchevents cssvhunit backgroundblendmode objectfit object-fit cssanimations bgsizecover flexbox cssfilters csstransforms csstransforms3d csstransitions no-mobile touch-undetected">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Ипотека на строительство</title>
	<meta name="description" content="Строительство деревянных домов под ключ в короткие сроки от профессионалов в Москве и Московской области. Низкие цены и более 200 готовых проектов!">
	<meta name="resources-path" content="/ipoteka_doma/">
	<meta name="viewport" content="initial-scale=1">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="theme-color" content="#a32829">
	<meta name="robots" content="noindex, nofollow">
	<link rel="icon" href="/32.png">
	<link rel="shortcut icon" href="/32.png">
	<link rel="apple-touch-icon" href="/1024.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/180.png">
	<link href="//fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Vollkorn&display=swap" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" property="stylesheet" href="css/styles.css">
	<link rel="stylesheet" property="stylesheet" href="css/style.css">
	<?php
	if (isset($_GET["utm_source"]))  setcookie("utm2source", strip_tags($_GET["utm_source"]), time() + 3600, "/", $_SERVER['SERVER_NAME']);
	if (isset($_GET["utm_medium"]))  setcookie("utm2medium", strip_tags($_GET["utm_medium"]), time() + 3600, "/", $_SERVER['SERVER_NAME']);
	if (isset($_GET["utm_campaign"]))   setcookie("utm2campaign", strip_tags($_GET["utm_campaign"]), time() + 3600, "/", $_SERVER['SERVER_NAME']);
	if (isset($_GET["utm_content"]))  setcookie("utm2content", strip_tags($_GET["utm_content"]), time() + 3600, "/", $_SERVER['SERVER_NAME']);
	if (isset($_GET["utm_term"]))  setcookie("utm2term", strip_tags($_GET["utm_term"]), time() + 3600, "/", $_SERVER['SERVER_NAME']);
	if (isset($_SERVER["HTTP_REFERER"])) {
		if (!isset($_COOKIE['entrance2'])) {
			setcookie("entrance2", strip_tags($_SERVER["HTTP_REFERER"]), time() + 3600, "/", $_SERVER['SERVER_NAME']);
		}
	}
	?>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-WQQ9FS3');
	</script>
	<!-- End Google Tag Manager -->
	<style>
		.response .response-inner {
			font-size: 26px !important;
		}

		@media screen and (max-width: 999px) {
			header .logo .tp {
				margin-top: 10px;
			}
		}
	</style>
</head>

<body class="">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQQ9FS3" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="svg-defs non-critical">
		<svg>
			<defs>
				<path id="logo_rc" d="M26.944,0.5L13.111,5.058l5.033,4.974,9.213-9.111ZM0.516,0.5L14.35,5.058,9.317,10.032,0.1,0.921Z" transform="translate(-0.094 -0.5)" />
				<path id="ico-tw" fill-rule="evenodd" d="M15.99 1.55a6.227 6.227 0 0 1-1.83.52 3.49 3.49 0 0 0 1.37-1.8 5.257 5.257 0 0 1-2.06.73 3.3 3.3 0 0 0-5.68 2.29 3.474 3.474 0 0 0 .08.73A9.1 9.1 0 0 1 1.07.6a3.288 3.288 0 0 0 1 4.36 2.1 2.1 0 0 1-1.44-.38 3.175 3.175 0 0 0 2.54 3.23 2.527 2.527 0 0 1-1.37.1 3.1 3.1 0 0 0 2.95 2.24 5.865 5.865 0 0 1-4.76 1.38 9.95 9.95 0 0 0 5.16 1.45 9.167 9.167 0 0 0 9.24-9.64v-.1a5.828 5.828 0 0 0 1.6-1.69z" />
				<path id="ico-vk" fill-rule="evenodd" d="M10.51 12.37h1.28a1.147 1.147 0 0 0 .59-.26.993.993 0 0 0 .18-.57s-.03-1.76.77-2.02 1.8 1.68 2.88 2.43a1.955 1.955 0 0 0 1.43.42h2.87s1.5-.12.79-1.31a9.781 9.781 0 0 0-2.14-2.49c-1.8-1.69-1.56-1.42.61-4.34 1.32-1.78 1.85-2.86 1.69-3.32a1.28 1.28 0 0 0-1.13-.37h-3.24a.7.7 0 0 0-.41.08.92.92 0 0 0-.29.38 18.629 18.629 0 0 1-1.19 2.57c-1.44 2.47-2.02 2.6-2.25 2.44-.55-.35-.41-1.43-.41-2.2 0-2.39.36-3.39-.7-3.64a5.278 5.278 0 0 0-1.51-.16 7.048 7.048 0 0 0-2.69.28c-.36.18-.65.59-.47.61a1.435 1.435 0 0 1 .95.49 3.161 3.161 0 0 1 .32 1.47s.19 2.82-.45 3.17c-.43.24-1.03-.25-2.31-2.49A20.6 20.6 0 0 1 4.52 1.1a.881.881 0 0 0-.26-.36 1.312 1.312 0 0 0-.5-.21L.69.54a1.04 1.04 0 0 0-.63.21.676.676 0 0 0-.01.55s2.4 5.73 5.12 8.59a7.429 7.429 0 0 0 5.34 2.48z" />
				<path id="ico-yt" fill-rule="evenodd" d="M.01 0v16l13.2-8z" />
				<path id="ico-fb" fill-rule="evenodd" d="M5.448 2.51h1.531V.01H5.1v.02c-2.937.1-3.54 1.75-3.592 3.48h-.006v2.01h-1.5v2.5h1.5v7.99h3V8.02h2.249l.445-2.5H4.5V3.71a1.124 1.124 0 0 1 .948-1.2z" />
				<path id="ico-ok" fill-rule="evenodd" d="M9.82 9.4a1.042 1.042 0 0 0-1.77-.2 5.33 5.33 0 0 1-6.16 0 1.042 1.042 0 0 0-1.77.2c-.41.87.05 1.29 1.11 2.01a6.845 6.845 0 0 0 2.94.92l-.67.7c-.94.99-1.85 1.95-2.48 2.61a1.073 1.073 0 0 0 0 1.44l.12.12a.955.955 0 0 0 .68.29.955.955 0 0 0 .68-.29l2.48-2.61c.94.99 1.85 1.94 2.48 2.61a.937.937 0 0 0 1.36 0l.12-.12a1.052 1.052 0 0 0 0-1.44l-2.48-2.61-.67-.7a6.864 6.864 0 0 0 2.92-.92c1.06-.72 1.52-1.14 1.11-2.01zM4.97 2.25A2.183 2.183 0 1 1 2.9 4.43a2.125 2.125 0 0 1 2.07-2.18zm0 6.61A4.436 4.436 0 1 0 .76 4.43a4.332 4.332 0 0 0 4.21 4.43z" />
				<path id="ico-ig" fill-rule="evenodd" d="M13 16H3a3 3 0 0 1-3-3V3a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3zM1 13a2.006 2.006 0 0 0 2 2h10a2.006 2.006 0 0 0 2-2V5H1v8zM12.5 1.5h1a1 1 0 0 1 1 1V3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-.5a1 1 0 0 1 1-1zM8 3.92A4.08 4.08 0 1 1 3.92 8 4.084 4.084 0 0 1 8 3.92zm0 1.53A3.05 3.05 0 1 1 4.95 8.5 3.056 3.056 0 0 1 8 5.45zM1-.5h1v6H1v-6zM3-1h1v6.5H3V-1zm5 7.47A2.03 2.03 0 1 1 5.97 8.5 2.031 2.031 0 0 1 8 6.47z" />
				<path id="ico-search" fill="190C0C" fill-rule="evenodd" stroke="none" d="M16.7,15.3l-4.1-4.1C13.5,10,14,8.6,14,7c0-3.9-3.1-7-7-7S0,3.1,0,7s3.1,7,7,7c1.6,0,3-0.5,4.2-1.4l4.1,4.1L16.7,15.3z M2,7c0-2.8,2.2-5,5-5s5,2.2,5,5s-2.2,5-5,5S2,9.7,2,7z" />
				<path id="ico-phone" d="M22.6,17c-1.5-1.1-2.1-1.1-2.9-0.7c-0.8,0.3-2.3,3.9-3.4,3.9c-0.9,0.1-2-0.9-2.6-1.4c-1.2-0.9-2.4-2-3.4-3.1c-0.8-0.9-2.7-2.6-2.5-3.9c0-1,3.6-2.5,4-3.3C12,7.6,12,6.9,11,5.5S7.1,0,5.8,0C4.4,0,0.6,2.4,0.1,4.6c-0.4,1.8,0.2,4,0.8,5.7c2,6.5,6.9,11.8,12.8,15c0.4,0.2,0.9,0.5,1.4,0.7c2.2,1,4.7,1.9,7.1,2c0.4,0,0.7,0,1.1-0.1c2.2-0.4,4.6-4.2,4.7-5.6C28,21,24.1,18,22.6,17z" />
				<path id="ico-bath" d="M17.013 2.57a3.373 3.373 0 0 0-3.4 3.33v1.49H15.2V5.9a1.819 1.819 0 0 1 3.638 0v5.07H.791a.778.778 0 0 0-.791.77.786.786 0 0 0 .791.78h.562v1a5.986 5.986 0 0 0 3.3 5.32l-.644.89a.765.765 0 0 0 .183 1.08.855.855 0 0 0 .459.14.8.8 0 0 0 .645-.32l.9-1.24a6.076 6.076 0 0 0 1.287.13h6.8a5.884 5.884 0 0 0 .731-.04l.836 1.15a.8.8 0 0 0 .644.32.852.852 0 0 0 .459-.14.765.765 0 0 0 .184-1.08l-.487-.67a6.016 6.016 0 0 0 3.765-5.54V5.9a3.373 3.373 0 0 0-3.402-3.33zM8.961 7.13A1.24 1.24 0 1 0 10.2 5.92a1.232 1.232 0 0 0-1.239 1.21zm-4.966-.12a.82.82 0 1 0-.84-.82.832.832 0 0 0 .845.82zm3.894-3.64a1.685 1.685 0 1 0-1.72-1.69 1.707 1.707 0 0 0 1.72 1.69z" />
				<path id="ico-bed" d="M16.951 7.74H3.061a3.327 3.327 0 0 0-3.049 3.54v5.93a.759.759 0 1 0 1.516 0v-.82h16.956v.82a.759.759 0 1 0 1.516 0v-5.93a3.327 3.327 0 0 0-3.049-3.54zm-12-2.55h2.568a1.911 1.911 0 0 1 1.846 2.05h1.332a1.911 1.911 0 0 1 1.847-2.05h2.568a1.911 1.911 0 0 1 1.846 2.05h2.287v-5a2.267 2.267 0 0 0-2.218-2.25H3.035A2.266 2.266 0 0 0 .818 2.24v5H3.1a1.911 1.911 0 0 1 1.848-2.05z" />
				<path id="ico-brick" d="M20.9 1H0m20.9 5.6H0m20.9 5.6H0m20.9 5.6H0M5.1 1v5.6M16.4 1v5.6m-6 0v5.6M5.1 12.2v5.6m11.3-5.6v5.6" />
				<path id="ico-carcass" d="M1 1h19.5v5.6H1zM1 12.2h3.4v5.6H1zM17.1 12.2h3.4v5.6h-3.4zM2.7 12.2V6.6M18.8 12.2V6.6M4.4 17.8h12.7M4.4 12.2l5.5-5.5M17.1 12.2l-5.4-5.4M10.7 6.6V1" />
				<g id="ico-trunk">
					<circle cx="3.8" cy="3.8" r="2.8" />
					<circle cx="3.8" cy="9.4" r="2.8" />
					<circle cx="3.8" cy="15" r="2.8" />
					<path d="M17.7 1c1.5 0 2.8 1.3 2.8 2.8s-1.3 2.8-2.8 2.8m0 0c1.5 0 2.8 1.3 2.8 2.8s-1.3 2.8-2.8 2.8m0 0c1.5 0 2.8 1.3 2.8 2.8 0 1.5-1.3 2.8-2.8 2.8m0-16.8H3.8m13.9 5.6H3.8m13.9 5.6H3.8m13.9 5.6H3.8" />
					<circle cx="3.8" cy="3.8" r="2.8" />
					<circle cx="3.8" cy="9.4" r="2.8" />
					<circle cx="3.8" cy="15" r="2.8" />
					<path d="M17.7 1c1.5 0 2.8 1.3 2.8 2.8s-1.3 2.8-2.8 2.8m0 0c1.5 0 2.8 1.3 2.8 2.8s-1.3 2.8-2.8 2.8m0 0c1.5 0 2.8 1.3 2.8 2.8 0 1.5-1.3 2.8-2.8 2.8m0-16.8H3.8m13.9 5.6H3.8m13.9 5.6H3.8m13.9 5.6H3.8" />
				</g>
				<g id="ico-summer">
					<circle cx="10.5" cy="10.5" r="5.4" />
					<path d="M10.5 3.1V1M10.5 20v-2.2M17.8 10.5H20M1 10.5h2.1M15.7 5.3l1.5-1.5M3.8 17.2l1.5-1.5M15.7 15.7l1.5 1.5M3.8 3.8l1.5 1.5" />
				</g>
				<path id="ico-winter" d="M11.8 11.7V8.3l-3-1.8-3 1.8v3.4l3 1.7zM8.8 6.5V1M5.8 2.7l3 1.6M11.8 2.7l-3 1.6M8.8 13.4V19M11.8 17.3l-3-1.7M5.8 17.3l3-1.7M5.8 8.3L1 5.5M1 8.9l2.9-1.7M4 3.8l-.1 3.4M11.8 11.7l4.8 2.8M16.6 11l-2.9 1.8M13.6 16.2l.1-3.4M5.8 11.7L1 14.5M4 16.2l-.1-3.4M1 11l2.9 1.8M11.8 8.3l4.8-2.8M13.6 3.8l.1 3.4M16.6 8.9l-2.9-1.7" />
				<g id="ico-summerwinter">
					<circle cx="10.5" cy="10.5" r="5.4" />
					<path d="M10.5 3.1V1M10.5 20v-2.2M17.8 10.5H20M1 10.5h2.1M15.7 5.3l1.5-1.5M3.8 17.2l1.5-1.5M15.7 15.7l1.5 1.5M3.8 3.8l1.5 1.5M21.2 13.9l2.9-1.7V8.8l-2.9-1.7M21.2 7.1V1.5M24.1 3.2l-2.9 1.6M21.2 13.9v5.6M24.1 17.8l-2.9-1.7M24.1 12.2l4.8 2.8M29 11.6l-2.9 1.7M26 16.7l.1-3.4M24.1 8.8L28.9 6M26 4.3l.1 3.4M29 9.4l-2.9-1.7" />
				</g>
				<g id="ico-user">
					<path fill="none" fill-rule="evenodd" stroke-miterlimit="10" stroke-width="2" d="M10 9.8c-.7.8-1.5 1.3-2.5 1.3-.9 0-1.8-.5-2.4-1.3-2.4.6-4.1 2.3-4.1 4.4v3h13.5v-3c0-2.1-1.9-3.8-4.5-4.4z" clip-rule="evenodd" />
					<path fill="none" fill-rule="evenodd" stroke-miterlimit="10" stroke-width="2" d="M10 9.8c1.1-1.2 1.8-3.1 1.8-4.5C11.8 2.9 9.9 1 7.6 1S3.3 2.9 3.3 5.3c0 1.4.7 3.3 1.8 4.5M5.1 9.8c.7.8 1.5 1.3 2.4 1.3.9 0 1.8-.5 2.5-1.3" class="st1" />
				</g>
			</defs>
		</svg>
	</div>
	<page-transition></page-transition>
	<popup-overlay></popup-overlay>
	<popup-component class="popup side-popup menu-popup l-fixed" data-id="menu-popup" data-indent="padding" role="dialog" aria-modal="true" style="padding-right: 17px;">
		<div class="inner overflow">
			<div class="additional l-fixed" data-indent="margin" style="margin-right: 17px;">
				<div class="other-wrapper">
					<a class="ico-phone" href="tel:+74954610775" aria-label="Контактный телефон">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 27.9" width="19px" height="19px">
							<use xlink:href="#ico-phone"></use>
						</svg>
					</a>
				</div>
			</div>
			<div class="l-center">
				<nav is="menu-component" class="popup-content" role="menu">
					<div class="mobile">
						<ul class="big-menu">
							<li><a href="#order" class="item mobile-item non-focusable">Условия по ипотеке</a></li>
							<li><a href="#catalog" class="item mobile-item non-focusable">Дома по ипотеке</a></li>
							<li><a href="#contact" class="item mobile-item non-focusable">Контакты</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</popup-component>
	<div class="additional-content j-replaceable" data-id="additional-content">
		<popup-component class="popup center-popup l-fixed" data-id="REQUEST_TAXI-popup" data-indent="padding">
			<div class="overflow">
				<div class="l-center">
					<div class="content inner text small-text">
						<div class="popup-top">
							<button is="popup-close" class="close s-circle">
								<div class="b b1"></div>
								<div class="b b2"></div>
							</button>
						</div>
						<div class="form-section">
							<div class="tx">
								<div div class="h2">Бесплатное такси в Теремъ</div>
								<p></p>
							</div>
							<div class="form-wrapper">
								<form-response class="response" data-id="form-15">
									<div class="h5 response-inner"></div>
								</form-response>
								<form is="form-component" action="/assets/components/request_handler.php" data-id="form-15" method="post" id="form2">
									<input type="hidden" name="request_type" value="15">
									<input type="hidden" name="page" value="<?php echo dirname($_SERVER['PHP_SELF']); ?>/">
									<div class="ln">
										<label is="input-wrapper" class="input-wrapper">
											<span class="placeholder">Имя</span>
											<input class="text" required type="text" name="name">
										</label>
									</div>
									<div class="ln">
										<label is="input-wrapper" class="input-wrapper">
											<span class="placeholder">Телефон</span>
											<input class="text" required type="tel" name="phone">
										</label>
									</div>
									<div class="ln">
										<label is="input-wrapper" class="input-wrapper">
											<span class="placeholder">Адрес подачи машины</span>
											<input class="text" type="text" name="address">
										</label>
									</div>
									<div class="ln-wrapper-inline">
										<div class="ln">
											<label is="input-wrapper" class="input-wrapper">
												<span class="placeholder">Дата</span>
												<input class="text datepicker-here" placeholder="" required type="text" name="date" max-date="2" sync-name="party-time-15" autocomplete="off" />
											</label>
										</div>
										<div class="ln">
											<label is="input-wrapper" class="input-wrapper">
												<select name="time" min-hour="11:30" max-hour="19:30" step="15" weekend-max-hour="18:30" sync-name="party-time-15" autocomplete="off" required>
													<option disabled selected>Время</option>
													<option value="11:30">11:30</option>
													<option value="11:45">11:45</option>
													<option value="12:00">12:00</option>
													<option value="12:15">12:15</option>
													<option value="12:30">12:30</option>
													<option value="12:45">12:45</option>
													<option value="13:00">13:00</option>
													<option value="13:15">13:15</option>
													<option value="13:30">13:30</option>
													<option value="13:45">13:45</option>
													<option value="14:00">14:00</option>
													<option value="14:15">14:15</option>
													<option value="14:30">14:30</option>
													<option value="14:45">14:45</option>
													<option value="15:00">15:00</option>
													<option value="15:15">15:15</option>
													<option value="15:30">15:30</option>
													<option value="15:45">15:45</option>
													<option value="16:00">16:00</option>
													<option value="16:15">16:15</option>
													<option value="16:30">16:30</option>
													<option value="16:45">16:45</option>
													<option value="17:00">17:00</option>
													<option value="17:15">17:15</option>
													<option value="17:30">17:30</option>
													<option value="17:45">17:45</option>
													<option value="18:00">18:00</option>
													<option value="18:15">18:15</option>
													<option value="18:30">18:30</option>
													<option value="18:45">18:45</option>
													<option value="19:00">19:00</option>
													<option value="19:15">19:15</option>
													<option value="19:30">19:30</option>
												</select>
											</label>
										</div>
									</div>
									<div class="ln"> <b>Внимание!</b> Все поля обязательны для заполнения. Отправляя форму Вы соглашаетесь с <a href="/privacy-policy/" target="_blank">Политикой обработки данных</a>. </div>
									<div class="btn-wrapper">
										<button class="button submit">Отправить</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</popup-component>
		<popup-component class="popup center-popup l-fixed" data-id="REQUEST_IPOTEKA_POPUP-popup" data-indent="padding">
			<div class="overflow">
				<div class="l-center">
					<div class="content inner text small-text">
						<div class="popup-top">
							<button is="popup-close" class="close s-circle">
								<div class="b b1"></div>
								<div class="b b2"></div>
							</button>
						</div>

						<div class="form-section">
							<div class="tx">
								<div div="" class="h2">Заказать звонок</div>
								<p></p>
							</div>

							<div class="form-wrapper">
								<form-response class="response" data-id="form-47">
									<div class="h5 response-inner"></div>
								</form-response>
								<form is="form-component" action="/assets/components/request_handler.php" data-id="form-47" method="post" class="waiting">
									<input type="hidden" name="request_type" value="47">
									<input type="hidden" name="page" value="<?php echo dirname($_SERVER['PHP_SELF']); ?>/">
									<div class="ln">
										<label is="input-wrapper" class="input-wrapper">
											<span class="placeholder">Имя</span>
											<input class="text" required="" type="text" name="name">
										</label>
									</div>
									<div class="ln">
										<label is="input-wrapper" class="input-wrapper">
											<span class="placeholder">Телефон</span>
											<input class="text" required="" type="tel" name="phone">
										</label>
									</div>
									<div class="ln">
										<label is="input-wrapper" class="input-wrapper not-empty">
											<span class="placeholder">Город</span>
											<input class="text" required="" type="text" name="city" value="Москва">
										</label>
									</div>
									<div class="ln-wrapper-inline">
										<div class="ln">
											<label is="input-wrapper" class="input-wrapper">
												<span class="placeholder">Дата</span>
												<input class="text datepicker-here" placeholder="" required type="text" name="date" max-date="2" sync-name="party-time-47" autocomplete="off" />
											</label>
										</div>
										<div class="ln">
											<label is="input-wrapper" class="input-wrapper">
												<select name="time" min-hour="10:30" max-hour="19:30" step="15" sync-name="party-time-47" autocomplete="off" required>
													<option disabled selected>Время</option>
													<option value="10:30">10:30</option>
													<option value="10:45">10:45</option>
													<option value="11:00">11:00</option>
													<option value="11:15">11:15</option>
													<option value="11:30">11:30</option>
													<option value="11:45">11:45</option>
													<option value="12:00">12:00</option>
													<option value="12:15">12:15</option>
													<option value="12:30">12:30</option>
													<option value="12:45">12:45</option>
													<option value="13:00">13:00</option>
													<option value="13:15">13:15</option>
													<option value="13:30">13:30</option>
													<option value="13:45">13:45</option>
													<option value="14:00">14:00</option>
													<option value="14:15">14:15</option>
													<option value="14:30">14:30</option>
													<option value="14:45">14:45</option>
													<option value="15:00">15:00</option>
													<option value="15:15">15:15</option>
													<option value="15:30">15:30</option>
													<option value="15:45">15:45</option>
													<option value="16:00">16:00</option>
													<option value="16:15">16:15</option>
													<option value="16:30">16:30</option>
													<option value="16:45">16:45</option>
													<option value="17:00">17:00</option>
													<option value="17:15">17:15</option>
													<option value="17:30">17:30</option>
													<option value="17:45">17:45</option>
													<option value="18:00">18:00</option>
													<option value="18:15">18:15</option>
													<option value="18:30">18:30</option>
													<option value="18:45">18:45</option>
													<option value="19:00">19:00</option>
													<option value="19:15">19:15</option>
													<option value="19:30">19:30</option>
												</select>
											</label>
										</div>
									</div>
									<div class="l-clear"></div>
									<div class="ln">
										<b>Внимание!</b> Все поля обязательны для заполнения. Отправляя форму Вы соглашаетесь с <a href="/privacy-policy/" target="_blank">Политикой обработки данных</a>.
									</div>
									<div class="btn-wrapper">
										<button class="button submit">Отправить</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</popup-component>
	</div>
	<div class="page-wrapper l-fixed no-outline load-complete-once load-complete first-scroll small-header">
		<button is="menu-button" class="menu-btn l-fixed j-popup-focusable j-close-all" data-id="menu-popup" data-indent="margin" aria-label="открыть меню" aria-haspopup="true" aria-expanded="false"> <span class="b b1"></span> <span class="b b2"></span> <span class="b b3"></span> <span class="b b4"></span> <span class="b b5"></span> </button>
		<header role="banner" is="header-component" class="top l-fixed" data-indent="right" style="right: 0px;">
			<div class="bt">
				<div class="wrapper max-wrapper">
					<a href="/" class="logo" aria-label="на главную">
						<div class="tp"></div>
					</a>
					<div class="big-menu">
						<nav> <a class="menu-item item active" href="#order">Условия по ипотеке</a> <a class="menu-item item" href="#catalog">Дома по ипотеке</a> <a class="menu-item item" href="#contact">Контакты</a> </nav>
					</div>
					<div class="additional">
						<div class="other-wrapper">
							<button class="button callback-button" href="#contact">Обратный звонок</button> <a class="phone header-phone" href="tel:+74954610775">+7 (495) 461–07–75</a> </div>
					</div>
				</div>
			</div>
		</header>
		<main class="j-replaceable" data-id="main-content">
			<section class="home">
				<div class="wrapper l-shift-inner j-trigger">
					<h1>Ипотека <br> на строительство</h1>
				</div>
			</section>
			<div class="page-content">

				<section class="about">
					<div class="bg">
						<div class="wrapper">
							<img src="images/Bitmap.png" alt="">
						</div>
					</div>
					<div class="wrapper">
						<div class="l-l">
							<div class="tx">
								<div class="h2 rate-title">Ипотека от 8,8%<br> на строительство жилого дома</div>
								<button class="rate-button button submit" is="popup-toggle" data-id="REQUEST_IPOTEKA_POPUP-popup">Бесплатная консультация</button>
							</div>
						</div>
						<div class="l-clear"></div>
					</div>
				</section>


				<section class="credit scrollspy" id="order">
					<div class="wrapper">
						<div class="credit-item-wrapper">
							<div class="credit-item j-trigger">
								<div class="credit-item-num">от 25%</div>
								<div class="credit-item-description">первый взнoс</div>
							</div>
							<div class="credit-item j-trigger">
								<div class="credit-item-num">от 8,8%</div>
								<div class="credit-item-description">прoцентная ставка</div>
							</div>
							<div class="credit-item j-trigger">
								<div class="credit-item-num">до 30 лет</div>
								<div class="credit-item-description">срок кредита</div>
							</div>
						</div>
						<?
            				$APPLICATION->IncludeComponent('terem:standard.blocks', 'personal.manager', [
            				'CODE' => 'personal_manager',
            				'CACHE_TYPE' => 'Y',
            				'CACHE_TIME' => 3600000
            				], false, ['HIDE_ICONS' => 'Y']);
        				?>
					</div>
				</section>


				<section class="journal">
					<div class="wrapper">
						<div class="l-l">
							<div class="h2">Ипотека на загородный дом</div>
							<p>Кредит на покупку дачи или земельного участка</p>
							<button class="journal-button button submit" is="popup-toggle" data-id="REQUEST_IPOTEKA_POPUP-popup">Оставить предварительную заявку</button>
						</div>
						<div class="l-r">
						<div class="journal-item">
							<div class="journal-item-title">от 25%</div>
							<div class="journal-item-desc">первоначальный взнoс</div>
						</div>
						<div class="journal-item">
							<div class="journal-item-title">от 8,8%</div>
							<div class="journal-item-desc">прoцентная ставка</div>
						</div>
						<div class="journal-item">
							<div class="journal-item-title">от 300 000 ₽</div>
							<div class="journal-item-desc">сумма кредита</div>
						</div>

						</div>
						<div class="l-clear"></div>
					</div>
				</section>

				<section id="catalog" class="catalog j-catalog-replaceable s-top scrollspy" data-id="catalog-container">
					<div class="wrapper">
						<div class="text-wrapper">
							<h3 class="catalog-title">Выберите дом с выгодной ипотекой</h3>
							<p class="catalog-description">Получите индивидуальные выгодные условия от Сбербанка для клиентов «Теремъ»</p>
						</div>
						<div class="container catalog-container uncut l-col-2">
							<div class="item catalog-item j-link-group">
								<div class="catalog-img slider-wrapper j-trigger">
									<slider-component class="header-slider slider initialized" data-id="catalog-slider-1" aria-labelledby="s2-header" aria-describedby="s2-description" data-not-continuous="true" tabindex="0">
										<div class="inner">
											<div class="slide to-center"><img src="images/Маршал/s_640x475_Marshal_1new_7_color_correction_SKY.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Маршал/s_640x475_marshal_3.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Маршал/s_640x475_marshal_4_color_correction.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Маршал/s_640x475_marshal_5.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Маршал/s_640x475_Маршал2.jpg" alt=""></div>
										</div>
									</slider-component>
									<div class="slider-controls s-sh-r s-b">
										<button data-id="catalog-slider-1" aria-label="Предыдущий проект" is="slider-control" class="next" data-to="next"> <span class="b b1"></span> <span class="b b2"></span> </button>
										<button data-id="catalog-slider-1" aria-label="Следующий проект" is="slider-control" class="prev disabled" data-to="prev" aria-disabled="true"> <span class="b b1"></span> <span class="b b2"></span> </button>
									</div>
								</div>
								<div class="catalog-data j-trigger">
									<div class="text-left">
										<div class="h4"><a href="/" class="">Маршал</a></div>
										<span>306,3 м<sup>2</sup></span>
									</div>
									<div class="text-right">
										<p>в кредит: <span class="credit-price">от 24 923 Р/мес.*</span></p>
									</div>

									<div class="catalog-item-btn">
										<button class="button catalog-button" is="popup-toggle" data-id="REQUEST_IPOTEKA_POPUP-popup" aria-haspopup="true" aria-expanded="false">Оставить заявку</button>
									</div>
								</div>
							</div>
							<div class="item catalog-item j-link-group">
								<div class="catalog-img slider-wrapper j-trigger">
									<slider-component class="header-slider slider initialized" data-id="catalog-slider-2" aria-labelledby="s3-header" aria-describedby="s3-description" data-not-continuous="true" tabindex="0">
										<div class="inner">
											<div class="slide to-center"><img src="images/Боярин/s_640x475_Boyarin_1_new.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Боярин/s_640x475_Boyarin_2.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Боярин/s_640x475_boyarin_3.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Боярин/s_640x475_boyarin_4.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Боярин/s_640x475_boyarin_5_34_на-воде.jpg" alt=""></div>
										</div>
									</slider-component>
									<div class="slider-controls s-sh-r s-b">
										<button data-id="catalog-slider-2" aria-label="Предыдущий проект" is="slider-control" class="next" data-to="next"> <span class="b b1"></span> <span class="b b2"></span> </button>
										<button data-id="catalog-slider-2" aria-label="Следующий проект" is="slider-control" class="prev disabled" data-to="prev" aria-disabled="true"> <span class="b b1"></span> <span class="b b2"></span> </button>
									</div>
								</div>
								<div class="catalog-data j-trigger">
									<div class="text-left">
										<div class="h4"><a href="/" class="">Боярин</a></div>
										<span>306,3 м<sup>2</sup></span>
									</div>
									<div class="text-right">
										<p>в кредит: <span class="credit-price">от 29 034 Р/мес.*</span></p>
									</div>

									<div class="catalog-item-btn">
										<button class="button catalog-button" is="popup-toggle" data-id="REQUEST_IPOTEKA_POPUP-popup" aria-haspopup="true" aria-expanded="false">Оставить заявку</button>
									</div>
								</div>
							</div>
							<div class="item catalog-item j-link-group">
								<div class="catalog-img slider-wrapper j-trigger">
									<slider-component class="header-slider slider initialized" data-id="catalog-slider-3" aria-labelledby="s4-header" aria-describedby="s4-description" data-not-continuous="true" tabindex="0">
										<div class="inner">
											<div class="slide to-center"><img src="images/Песня/s_640x475_Песня_1.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Песня/s_640x475_Песня_2.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Песня/s_640x475_Песня_3.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Песня/s_640x475_Песня_4.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Песня/s_640x475_Песня_5.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Песня/s_Pesnya-6_640x475.jpg" alt=""></div>
										</div>
									</slider-component>
									<div class="slider-controls s-sh-r s-b">
										<button data-id="catalog-slider-3" aria-label="Предыдущий проект" is="slider-control" class="next" data-to="next"> <span class="b b1"></span> <span class="b b2"></span> </button>
										<button data-id="catalog-slider-3" aria-label="Следующий проект" is="slider-control" class="prev disabled" data-to="prev" aria-disabled="true"> <span class="b b1"></span> <span class="b b2"></span> </button>
									</div>
								</div>
								<div class="catalog-data j-trigger">
									<div class="text-left">
										<div class="h4"><a href="/" class="">Песня</a></div>
										<span>306,3 м<sup>2</sup></span>
									</div>
									<div class="text-right">
										<p>в кредит: <span class="credit-price">от 25 431 Р/мес.*</span></p>
									</div>

									<div class="catalog-item-btn">
										<button class="button catalog-button" is="popup-toggle" data-id="REQUEST_IPOTEKA_POPUP-popup" aria-haspopup="true" aria-expanded="false">Оставить заявку</button>
									</div>
								</div>
							</div>
							<div class="item catalog-item j-link-group">
								<div class="catalog-img slider-wrapper j-trigger">
									<slider-component class="header-slider slider initialized" data-id="catalog-slider-4" aria-labelledby="s5-header" aria-describedby="s5-description" data-not-continuous="true" tabindex="0">
										<div class="inner">
											<div class="slide to-center"><img src="images/Добрыня/s_640x475_dobrinya_1_new.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Добрыня/s_640x475_добрыня-2_RGB_color.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Добрыня/s_640x475_добрыня-3.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Добрыня/s_640x475_добрыня-4_RGB_color.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Добрыня/s_640x475_добрыня-5_RGB_color.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Добрыня/s_640x475_добрыня_1_7Х9.RGB_color.jpg" alt=""></div>
										</div>
									</slider-component>
									<div class="slider-controls s-sh-r s-b">
										<button data-id="catalog-slider-4" aria-label="Предыдущий проект" is="slider-control" class="next" data-to="next"> <span class="b b1"></span> <span class="b b2"></span> </button>
										<button data-id="catalog-slider-4" aria-label="Следующий проект" is="slider-control" class="prev disabled" data-to="prev" aria-disabled="true"> <span class="b b1"></span> <span class="b b2"></span> </button>
									</div>
								</div>
								<div class="catalog-data j-trigger">
									<div class="text-left">
										<div class="h4"><a href="/" class="">Добрыня</a></div>
										<span>306,3 м<sup>2</sup></span>
									</div>
									<div class="text-right">
										<p>в кредит: <span class="credit-price">от 11 742 Р/мес.*</span></p>
									</div>

									<div class="catalog-item-btn">
										<button class="button catalog-button" is="popup-toggle" data-id="REQUEST_IPOTEKA_POPUP-popup" aria-haspopup="true" aria-expanded="false">Оставить заявку</button>
									</div>
								</div>
							</div>
							<div class="item catalog-item j-link-group">
								<div class="catalog-img slider-wrapper j-trigger">
									<slider-component class="header-slider slider initialized" data-id="catalog-slider-5" aria-labelledby="s6-header" aria-describedby="s6-description" data-not-continuous="true" tabindex="0">
										<div class="inner">
											<div class="slide to-center"><img src="images/Варяг/s_640x475_Варяг-1_ex&_7х7-big.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Варяг/s_640x475_Varyag_8_9х11м_Н_6х3,5м_Cam001_1.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Варяг/s_640x475_Варяг-2_ex8_edit.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Варяг/s_640x475_Варяг-3_ex1_edit.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Варяг/s_640x475_Варяг-4_ex2_edit.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Варяг/s_640x475_Варяг-7_ex5.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Варяг/s_640x475_варяг6_ex4_9х9_brus.jpg" alt=""></div>
											<div class="slide to-center"><img src="images/Варяг/s_640x475_Варяг_5_ex3_8х10.jpg" alt=""></div>
										</div>
									</slider-component>
									<div class="slider-controls s-sh-r s-b">
										<button data-id="catalog-slider-5" aria-label="Предыдущий проект" is="slider-control" class="next" data-to="next"> <span class="b b1"></span> <span class="b b2"></span> </button>
										<button data-id="catalog-slider-5" aria-label="Следующий проект" is="slider-control" class="prev disabled" data-to="prev" aria-disabled="true"> <span class="b b1"></span> <span class="b b2"></span> </button>
									</div>
								</div>
								<div class="catalog-data j-trigger">
									<div class="text-left">
										<div class="h4"><a href="/" class="">Варяг</a></div>
										<span>306,3 м<sup>2</sup></span>
									</div>
									<div class="text-right">
										<p>в кредит: <span class="credit-price">от 12 728 Р/мес.*</span></p>
									</div>

									<div class="catalog-item-btn">
										<button class="button catalog-button" is="popup-toggle" data-id="REQUEST_IPOTEKA_POPUP-popup" aria-haspopup="true" aria-expanded="false">Оставить заявку</button>
									</div>
								</div>
							</div>
							<div class="item catalog-item j-link-group">
								<div class="catalog-img slider-wrapper j-trigger">
									<slider-component class="header-slider slider initialized" data-id="catalog-slider-6" aria-labelledby="s7-header" aria-describedby="s7-description" data-not-continuous="true" tabindex="0">
										<div class="inner">
											<div class="slide to-center"><img src="images/Терем-лк/s_640x475_Terem_1LK_6х9.jpg" alt=""></div>
										</div>
									</slider-component>
									<div class="slider-controls s-sh-r s-b">
										<button data-id="catalog-slider-6" aria-label="Предыдущий проект" is="slider-control" class="next" data-to="next"> <span class="b b1"></span> <span class="b b2"></span> </button>
										<button data-id="catalog-slider-6" aria-label="Следующий проект" is="slider-control" class="prev disabled" data-to="prev" aria-disabled="true"> <span class="b b1"></span> <span class="b b2"></span> </button>
									</div>
								</div>
								<div class="catalog-data j-trigger">
									<div class="text-left">
										<div class="h4"><a href="/" class="">Терем ЛК</a></div>
										<span>306,3 м<sup>2</sup></span>
									</div>
									<div class="text-right">
										<p>в кредит: <span class="credit-price">от 11 109 Р/мес.*</span></p>
									</div>

									<div class="catalog-item-btn">
										<button class="button catalog-button" is="popup-toggle" data-id="REQUEST_IPOTEKA_POPUP-popup" aria-haspopup="true" aria-expanded="false">Оставить заявку</button>
									</div>
								</div>
							</div>
						</div>
						<div class="catalog-link simple-menu"> <a href="/catalog/">Смотреть весь каталог домов</a> </div>
						<div class="catalog-footer-text">
							<p>* Кредит расчитан в ПАО «Сбербанк России» (Генеральная лицензия Банка России №1481 от 11.08.2015г.) по ипотечной программе «Строительство жилого дома». Первоначальный взнос - от 25%, кредит выдается сроком на 30 лет со ставкой от 11% годовых, в рублях РФ действуют для клиентов, получающих зарплату на счет карты/вклада в Сбербанке, при условии страхования жизни и здоровья заемщика. Конечная процентная ставка по кредиту определяется на основании выбранных клиентом параметров. Расчет произведен от базовой цены дома для «Постоянного проживание» К-200.</p>
						</div>
					</div>
				</section>
				<?
            		$APPLICATION->IncludeComponent('terem:standard.blocks', 'ipoteka.request', [
            		'CODE' => 'ipoteka_request',
            		'CACHE_TYPE' => 'Y',
            		'CACHE_TIME' => 3600000
            		], false, ['HIDE_ICONS' => 'Y']);
        		?>
				<section class="map">
					<div id="map" class="map-background"></div>
					<div class="map-wrapper wrapper scrollspy" id="contact">
						<div class="s-red map-form">
							<div class="map-form-wrapper form-wrapper">
								<h4 class="map-title">Запишитесь на бесплатную экскурсию</h4>
								<h5 class="hidden-xs map-title sub-title">и найдите свой идеальный дом</h5>
								<form-response class="response" data-id="form-30">
									<div class="h5 response-inner"></div>
								</form-response>
								<form is="form-component" action="/assets/components/request_handler.php" data-id="form-30" method="post" id="form3">
									<input type="hidden" name="request_type" value="48">
									<input type="hidden" name="page" value="<?php echo dirname($_SERVER['PHP_SELF']); ?>/">
									<div class="ln">
										<label is="input-wrapper" class="input-wrapper"> <span class="placeholder">Имя</span>
											<input class="text" required="" type="text" name="name"> </label>
									</div>
									<div class="ln">
										<label is="input-wrapper" class="input-wrapper"> <span class="placeholder">Телефон</span>
											<input class="text" required="" type="tel" name="phone"> </label>
									</div>
									<div class="btn-wrapper">
										<button class="button subscribe-button-submit submit">Отправить заявку</button>
									</div>
									<div class="ln map-privacy-info"> <b>Внимание!</b> Отправляя форму Вы соглашаетесь с <a href="/privacy-policy/" target="_blank">Пользовательским соглашением</a> и <a href="/privacy-policy/" target="_blank">Политикой обработки данных</a> </div>
								</form>
							</div>
							<div class="map-form-wrapper map-contact-wrapper">
								<h5 class="map-contact-title sub-title">Выставочный центр находится по адресу:</h5>
								<p>г. Москва, ул. Зеленодольская, вл. 42
									<br>рядом со станцией метро «Кузьминки»</p>
								<p>ЕЖЕДНЕВНО С 10:00 ДО 20:00</p>
							</div>
						</div>
					</div>
					<div class="l-clear"></div>
				</section>	
				
				<?

                    $APPLICATION->IncludeComponent('terem:standard.blocks', 'taxi.white', [
	                'CODE' => 'request_taxi_ipoteka',
	                'CACHE_TYPE' => 'Y',
	                'CACHE_TIME' => 3600000
	                ], false, ['HIDE_ICONS' => 'Y']); 

            		$APPLICATION->IncludeComponent('terem:standard.blocks', '', [
            		'CODE' => 'consultation_red_ipoteka',
            		'CACHE_TYPE' => 'Y',
            		'CACHE_TIME' => 3600000
					], false, ['HIDE_ICONS' => 'Y']);
        		?>
			
				<section class="form-section">
					<div class="wrapper">
						<div class="tx j-trigger">
							<div class="h3">Обратная связь</div>
							<p></p>
						</div>
						<div class="form-wrapper j-trigger">
							<form-response class="response" data-id="form-31">
								<div class="h5 response-inner"></div>
							</form-response>
							<form is="form-component" action="/assets/components/request_handler.php" data-id="form-31" class="waiting">
								<input type="hidden" name="request_type" value="48">
								<input type="hidden" name="page" value="<?php echo dirname($_SERVER['PHP_SELF']); ?>/">
								<div class="ln">
									<label is="input-wrapper" class="input-wrapper"> <span class="placeholder">Имя</span>
										<input class="text" required="" type="text" name="name"> </label>
								</div>
								<div class="ln">
									<label is="input-wrapper" class="input-wrapper"> <span class="placeholder">Телефон</span>
										<input class="text" required="" type="tel" name="phone"> </label>
								</div>
								<div class="btn-wrapper">
									<button class="button submit">Отправить</button>
								</div>
								<div class="ln"> <b class="red">Внимание!</b> Все поля обязательны для заполнения. Отправляя форму Вы соглашаетесь с <a href="/privacy-policy/" target="_blank">Политикой обработки данных</a>. </div>

							</form>
						</div>
					</div>
				</section>
				<footer role="contentinfo">
					<div class="wrapper j-trigger">
						<div class="tp">
							<div class="l-l">
								<nav class="container l-col-4 s-tablet-container" role="menu">
									<ul class="item simple-menu s-main">
										<li><a href="/catalog/dachnye-doma/" class="item" target="_blank">Дачные дома</a></li>
										<li><a href="/catalog/bani/" class="item" target="_blank">Бани и Беседки</a></li>
										<li><a href="/catalog/sadovye-doma/" class="item" target="_blank">Садовые дома</a></li>
										<li><a href="/catalog/kottedzhi/" class="item" target="_blank">Коттеджи</a></li>
										<li><a href="/catalog/premium/" class="item" target="_blank">Премиум</a></li>
									</ul>
									<ul class="item simple-menu">
										<li><a href="/services/" class="item" target="_blank">Услуги</a></li>
										<li><a href="/services/individual_projects/" class="item" target="_blank">Индивидуальные проекты</a></li>
										<li><a href="/services/enginering_communications/" class="item" target="_blank">Инженерные системы</a></li>
										<li><a href="/services/dostroika/" class="item" target="_blank">Достройка и реконструкция</a></li>
										<li><a href="/services/credit-calculator/" class="item" target="_blank">Кредитование и страхование</a></li>
									</ul>
									<ul class="item simple-menu">
										<li><a href="/promotion/" class="item" target="_blank">Новости и акции</a></li>
										<li><a href="/reviews/" class="item" target="_blank">Отзывы</a></li>
										<li><a href="/about/faq/" class="item" target="_blank">Ответы на вопросы</a></li>
										<li><a href="/about/useful/" class="item" target="_blank">Полезная информация</a></li>
										<li><a href="/contacts/" class="item" target="_blank">Контакты</a></li>

									</ul>
								</nav>
							</div>
							<div class="l-r">
								<div class="social">
									<a href="https://www.facebook.com/terempro" class="fb s-circle s-fill" aria-label="facebook" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" width="7.188" height="16" viewBox="0 0 7.188 16">
											<use xlink:href="#ico-fb"></use>
										</svg>
									</a>
									<a href="https://twitter.com/ProTerem" class="fb s-circle s-fill" aria-label="twitter" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="12.97" viewBox="0 0 16 12.97">
											<use xlink:href="#ico-tw"></use>
										</svg>
									</a>
									<a href="http://instagram.com/pro_terem" class="fb s-circle s-fill" aria-label="instagram" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
											<use xlink:href="#ico-ig"></use>
										</svg>
									</a>
									<a href="https://www.youtube.com/c/terempro" class="fb s-circle s-fill" aria-label="youtube" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" width="13.22" height="16" viewBox="0 0 13.22 16">
											<use xlink:href="#ico-yt"></use>
										</svg>
									</a>
									<a href="http://vk.com/pro_terem" class="fb s-circle s-fill" aria-label="vkontakte" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="12.53" viewBox="0 0 21.5 12.53">
											<use xlink:href="#ico-vk"></use>
										</svg>
									</a>
									<a href="http://ok.ru/proterem" class="fb s-circle s-fill" aria-label="однокласники" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" width="9.94" height="17.5" viewBox="0 0 9.94 17.5">
											<use xlink:href="#ico-ok"></use>
										</svg>
									</a>
								</div>
								<div class="nt">Доступность цен на дома — один из основных принципов нашей работы</div>
							</div>
							<div class="l-clear"></div>
						</div>
						<div class="bt">
							<div class="l-l">
								<div class="cr">© Теремъ-про, 2009 - 2019. Все материалы данного сайта являются объектами авторского права (в том числе дизайн). Запрещается копирование, распространение (в том числе путем копирования на другие сайты и ресурсы в Интернете) или любое иное использование информации и объектов без предварительного согласия правообладателя. Cайт не является публичной офертой.</div>
							</div>
							<div class="dev"> Сделано в
								<a class="s-circle" href="http://redcollar.digital/" target="_blank" rel="nofollow" title="Сдано без технической документации и описания API"> <span class="i">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.25 9.531" width="27.25px" height="9.531px">
											<use xlink:href="#logo_rc"></use>
										</svg> </span> Red Collar </a>
							</div>
							<div class="l-clear"></div>
						</div>
					</div>
				</footer>
			</div>
		</main>
	</div>
	<script src="//code.jquery.com/jquery-2.1.3.min.js" integrity="sha256-ivk71nXhz9nsyFDoYoGf2sbjrR9ddh+XDkCcfZxjvcM=" crossorigin="anonymous"></script>
	<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
	<script defer src="/ipoteka_doma/js/libs/modernizr.js"></script>
	<script defer src="//cdn.polyfill.io/v2/polyfill.min.js"></script>
	<script defer src="/ipoteka_doma/js/libs/classList.min.js"></script>
	<script defer src="/ipoteka_doma/js/libs/webcomponents-lite.js"></script>
	<!--<script data-main="/ipoteka_doma/js/app" src="/ipoteka_doma/js/require.js"></script>-->
	<script defer src="/ipoteka_doma/js/build.js"></script>
	<script>
		(function($) {
			$(window).load(function() {
				var elems = $('.scrollspy'), //плавная прокрутка и переключение активных элементов меню
					header = $("header"),
					headerHeight = header.outerHeight() - 100,
					mobileMenu = $('.mobile .big-menu .item'),
					menuItems = header.find('.menu-item'),
					menuButton = $('.menu-btn');
				$.fn.toggleMenuButton = function() {
					var _this = this;
					if (_this.hasClass('active')) {
						_this.removeClass('active').attr('aria-expanded', false);
					} else {
						_this.addClass('active').attr('aria-expanded', true);
					};
				};
				$.fn.toggleMenu = function() {
					var _this = this,
						body = $('body'),
						pageWrapper = $('.page-wrapper'),
						popupOverlay = $('popup-overlay'),
						menuPopup = $('.menu-popup');
					if (!_this.hasClass('active')) {
						menuPopup.addClass('active').removeAttr('inert');
						_this.addClass('active').attr('aria-expanded', true);
						body.addClass('prevent-scroll');
						pageWrapper.addClass('popup-active');
						popupOverlay.addClass('active');
					} else {
						menuPopup.removeClass('active').attr('inert', '');
						_this.removeClass('active').attr('aria-expanded', false);
						body.removeClass('prevent-scroll');
						pageWrapper.removeClass('popup-active');
						popupOverlay.removeClass('active');
					}
				};
				
				$.fn.ClickScrollSpy = function() {
					$(this).click(function(e) {
						var href = $(this).attr("href"),
							offsetTop = href === "#" ? 0 : $(href).offset().top - headerHeight + 1;
						$('html, body').stop().animate({
							scrollTop: offsetTop
						}, 1350);
						if ($(this).hasClass('mobile-item') && $(window).width() < 1300) {
							menuButton.toggleMenu();
						};
						e.preventDefault();
					})
				};
				menuItems.ClickScrollSpy();
				mobileMenu.ClickScrollSpy();
				$('.callback-button').ClickScrollSpy();
				menuButton.click(function(e) {
					$(this).toggleMenu();
					e.preventDefault();
				});
				$('header').click(function(e) {
					if (menuButton.hasClass('active')) {
						menuButton.toggleMenuButton();
					}
				});
				$('button[is="popup-toggle"]').click(function(e) {
					if (!menuButton.hasClass('active')) {
						menuButton.toggleMenuButton();
					};
					e.preventDefault();
				});
				$('button[is="popup-close"]').click(function(e) {
					if (menuButton.hasClass('active')) {
						menuButton.toggleMenuButton();
					};
					e.preventDefault();
				});
				var scrolled = window.pageYOffset || document.documentElement.scrollTop; // fixed шапка при прокрутке
				if (scrolled > 50) {
					header.removeClass("top");
				} else {
					header.addClass("top");
				};
				$(window).scroll(function() {
					var currentTop = $(window).scrollTop() + 50;
					elems.each(function(index) { //отслеживание позиции и назначение активной ссылки в меню
						var elemTop = $(this).offset().top;
						var elemBottom = elemTop + $(this).height();
						if (currentTop >= elemTop && currentTop <= elemBottom) {
							var id = $(this).attr('id');
							var menuItem = menuItems.filter('[href="#' + id + '"]');
							var mobileMenuItem = mobileMenu.filter('[href="#' + id + '"]');
							menuItems.removeClass('active');
							menuItem.addClass('active');
							mobileMenu.removeClass('active');
							mobileMenuItem.addClass('active');
						}
					});
					scrolled = window.pageYOffset || document.documentElement.scrollTop; // fixed шапка при прокрутке
					if (scrolled > 50) {
						header.removeClass("top");
					} else {
						header.addClass("top");
					}
				});
				var width = $(document).width(); // отслеживание ширины документа
				ymaps.ready(init1); //инициализация яндекс карт
				function init1() {
					myMap1 = new ymaps.Map('map', {
							center: (width > 999) ? [55.702078, 37.760343] : [55.702078, 37.765275],
							zoom: 16,
							controls: []
						}),
						myMap1.behaviors.disable(['rightMouseButtonMagnifier', 'scrollZoom'])
					myPlacemark = new ymaps.Placemark([55.70200328, 37.76498550], {
						hintContent: [''].join('')
					}, {
						iconLayout: 'default#image',
						iconImageHref: '/assets/resources/images/map-pin.png',
						// iconImageSize: (width > 999) ? [127, 134] : [47, 54],
						iconImageSize: (width > 999) ? [47, 54] : [47, 54],
						iconImageOffset: [-24, -54]
					});
					myMap1.geoObjects.add(myPlacemark);
				}
			})
		})(jQuery);
	</script>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		let metrika_code = 937330;
		(function(m, e, t, r, i, k, a) {
			m[i] = m[i] || function() {
				(m[i].a = m[i].a || []).push(arguments)
			};
			m[i].l = 1 * new Date();
			k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
		})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(metrika_code, "init", {
			clickmap: true,
			trackLinks: true,
			accurateTrackBounce: true,
			webvisor: true
		});
	</script>
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/937330" style="position:absolute; left:-9999px;" alt="" /></div>
	</noscript>
	<!-- /Yandex.Metrika counter -->



	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55697220-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-55697220-1');
	</script>

</body>

</html>