<?php 
$file = file("count.txt");
$count = implode("", $file);
$count++;
$myfile = fopen("count.txt","w");
fputs($myfile,$count);
fclose($myfile);
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="ru"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="ru"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="ru"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru">
<!--<![endif]-->

<head>
	<meta charset="utf-8">

	<title>Portfolio - HTML/CSS/JS</title>
	<meta name="description" content="Верстка разной сложности: адаптивная, резиновая, статичная">
	<meta name="author" content="Eugene_Stone">
	<meta name='freelancehunt' content='0eade95d2f58729'>
	<link rel="shortcut icon" href="img/favicon/favicon.png" type="image/x-icon">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="libs/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="libs/animate/animate.css">
	<link rel="stylesheet" href="libs/magnific-popup-master/magnific-popup.css">

	<link rel="stylesheet" href="css/main.css">

	<style>
		body:not(.page-loaded) * {
			-webkit-transition: none !important;
			-o-transition: none !important;
			transition: none !important;
		}
		
		.preloader {
			/*display: none;*/
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #0092ff;
			z-index: 10000;
			background-position: center;
			background-size: 57px auto;
			background-repeat: no-repeat;
			background-image: url("img/fav-2.png");
		}
	</style>
</head>

<body id="body">
	<div id="preloader" class="preloader"></div>

	<header>
		<div class="header">
			<div class="container">

				<h1>
					<span class="eng">HTML/CSS/JS - Markup Developer</span>
					<span class="rus">HTML/CSS/JS - Верстальщик</span>
				</h1>
				
				<div class="row">
					<div class="my_info">
						<div class="col-md-3">
							<div class="profil-wrap">
								<div class="img-avatar">
									<img src="img/my_photo.jpg" alt="my_photo">
								</div>
								
								<div class="lang-switch">
									<ul>
										<li><a  class="eng-btn" href="index-eu.php" data-lang="eng">ENG</a></li>
										<li><a class="rus-btn" href="/" data-lang="rus">RUS</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="skills">
								<h3>
									<span class="eng">Skills:</span>
									<span class="rus">Навыки:</span>
								</h3>
								<ul>
									<li>
										<span class="eng">Responsive and cross-browser layout with HTML5 and CSS3</span>
										<span class="rus">Адаптивная и кроссбраузерная верстка с помощью HTML5 и CSS3</span>
									</li>
									<li>
										<span class="eng">Usage: Gulp, GIT, Bootstrap, SASS, SVG, jQuery</span>
										<span class="rus">Применение: Gulp, GIT, Bootstrap, SASS, SVG, jQuery</span>
									</li>
									<li>
										<span class="eng">Software used: Adobe Photoshop, Adobe XD, Figma, Prepros, FileZilla, Mamp, Open Server, and more</span>
										<span class="rus">Используемое ПО:  Adobe Photoshop, Adobe XD, Figma, Prepros, FileZilla, Mamp, Open Server, и многое другое</span>
									</li>
									<li>
										<span class="eng">I do it quickly and efficiently. More than 5 years experience in HTML layout</span>
										<span class="rus">Делаю быстро и качественно. Опыт в верстке более 5-ти лет</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contacts">
								<h3>
									<span class="eng">Contacts:</span>
									<span class="rus">Контакты:</span>
								</h3>
								<ul>
									<li>
										<span class="eng">Yevhen</span>
										<span class="rus">Евгений</span>
									</li>
									<li>
										<span class="eng">Ukraine</span>
										<span class="rus">Украина</span>
									</li>
									<li>
										<i class="top-lst-ic" style="background-image: url(img/_svg/telegram.svg);"></i>
										<a href="https://t.me/eugene_stone" target="_blank">t.me/eugene_stone</a>
									</li>
									<li>
										<i class="top-lst-ic" style="background-image: url(img/_svg/mail.svg);"></i>
										<a href="mailto:www.kraiser@gmail.com">www.kraiser@gmail.com</a>
									</li>
									<li>
										<i class="top-lst-ic" style="background-image: url(img/_svg/github.svg);"></i>
										<a href="http://github.com/Eugene-Stone" target="_blank">github.com/Eugene-Stone</a>
									</li>
									<li>
										<i class="top-lst-ic" style="background-image: url(img/_svg/linkedin.svg);"></i>
										<a href="https://www.linkedin.com/in/eugene-stone/" target="_blank">www.linkedin.com/eugene-stone</a>
									</li>
									<li>
										<i class="top-lst-ic" style="background-image: url(img/_svg/freelancehunt-sm.svg);"></i>
										<a href="https://freelancehunt.com/freelancer/Eugene_Stone.html" target="_blank">freelancehunt.com/Eugene_Stone</a>
									</li>
								</ul>
								<!-- 
								<div class="button-wrap">
									<a href="/Evgenij_Resume.pdf" class="basic-btn" target="_blank">Скачать Резюме</a>
								</div>
							-->
						</div>
					</div>
				</div>
			</div>

			<div class="button-wrap header-btn">
				<span class="basic-btn">Portfolio</span>
			</div>

		</div>
	</div>
</header>

<!-- Portfolio -->
<section id="portfolio">
	<div class="container">
		<div class="row">
			<h2>Portfolio</h2>

			<div class="selecter">

				<div class="selecterBtns">
					<ul class="nolist">
						<li>
							<a href="#" rel="all" class="active">
								<span class="eng">All works</span>
								<span class="rus">Все работы</span>
							</a>
						</li>
						<li>
							<a href="#" rel="commerc">
								<span class="eng">Commercial projects</span>
								<span class="rus">Коммерческие проекты</span>
							</a>
						</li>
						<li>
							<a href="#" rel="training">
								<span class="eng">Educational projects</span>
								<span class="rus">Учебные проекты</span>
							</a>
						</li>
					</ul>
				</div>

				<div class="selecterContent">
					<ul class="nolist">

						<li class="portfolio_item commerc">
							<img src="/_my_works/_raised-static/_preview-thumb.png" alt="layout-image">
							<a href="/_my_works/_raised-static/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive layout "Raised"</span>
										<span class="rus">Адаптивная Верстка "Raised"</span>	
									</p>
								</div>
							</a>
						</li>

						<li class="portfolio_item commerc">
							<img src="/_my_works/_mebel-sale-static/_preview-thumb.png" alt="layout-image">
							<a href="/_my_works/_mebel-sale-static/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive layout "Mebel sale"</span>
										<span class="rus">Адаптивная Верстка "Mebel sale"</span>	
									</p>
								</div>
							</a>
						</li>

						<li class="portfolio_item commerc">
							<img src="/_my_works/_cubox-static/_preview-thumb.png" alt="layout-image">
							<a href="/_my_works/_cubox-static/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive layout "Cubox"</span>
										<span class="rus">Адаптивная Верстка "Cubox"</span>	
									</p>
								</div>
							</a>
						</li>

						<!-- Block work Kiev-Guides-->
						<li class="portfolio_item commerc">
							<img src="img/preview-img/kiev-guides.jpg" alt="kiev-guides">
							<a href="/_my_works/kiev-guides/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive layout of the site "Kiev Guides"</span>
										<span class="rus">Адаптивная Верстка сайта "Kiev Guides"</span>	
									</p>
								</div>
							</a>
						</li>

						<!-- Block work People_in_white-->
						<li class="portfolio_item commerc">
							<img src="img/preview-img/people_in_white.jpg" alt="people_in_white">
							<a href="/_my_works/people_in_white/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive layout of the site "People in white"</span>
										<span class="rus">Адаптивная Верстка сайта "People in white"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work Axit-->
						<li class="portfolio_item training">
							<img src="img/preview-img/axit.jpg" alt="axit">
							<a href="/_my_works/axit/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive layout of the Landing Page "Axit"</span>
										<span class="rus">Адаптивная Верстка Landing Page "Axit"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work Activebox-->
						<li class="portfolio_item training">
							<img src="img/preview-img/activebox.jpg" alt="activebox">
							<a href="/_my_works/activebox/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive layout of the Landing Page "ActiveBox"</span>
										<span class="rus">Адаптивная Верстка Landing Page "ActiveBox"</span>
									</p>
								</div>
							</a>
						</li>

						<li class="portfolio_item commerc">
							<img src="/_my_works/_Greenwich/_preview-thumb.png" alt="layout-image">
							<a href="/_my_works/_Greenwich/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive layout "Greenwich"</span>
										<span class="rus">Адаптивная Верстка "Greenwich"</span>	
									</p>
								</div>
							</a>
						</li>

						<!-- Block work FoxAuto-->
						<li class="portfolio_item commerc">
							<img src="img/preview-img/foxauto.jpg" alt="foxauto">
							<a href="/_my_works/foxauto/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive layout of the site "FoxAuto"</span>
										<span class="rus">Адаптивная Верстка сайта "FoxAuto"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work Naturetour-->
						<li class="portfolio_item training">
							<img src="img/preview-img/naturetour.jpg" alt="naturetour">
							<a href="/_my_works/naturetour/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Layout from PSD "Naturetour"</span>
										<span class="rus">Верстка из PSD "Naturetour"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work Сomedy Central-->
						<li class="portfolio_item training">
							<img src="img/preview-img/сomedy_central.jpg" alt="сomedy_central">
							<a href="/_my_works/сomedy_central/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive Layout from PSD "Comedy Central"</span>
										<span class="rus">Адаптивная Верстка из PSD "Сomedy Central"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work Movie-Store-->
						<li class="portfolio_item training">
							<img src="img/preview-img/movie-store.jpg" alt="movie-store">
							<a href="/_my_works/movie-store/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive Layout from PSD "Movie-Store"</span>
										<span class="rus">Адаптивная Верстка из PSD "Movie-Store"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work Stream-Video-->
						<li class="portfolio_item training">
							<img src="img/preview-img/stream-video.jpg" alt="stream-video">
							<a href="/_my_works/stream-video/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive Layout from PSD "Stream-Video"</span>
										<span class="rus">Адаптивная Верстка из PSD "Stream-Video"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work Voyage_Template-->
						<li class="portfolio_item training">
							<img src="img/preview-img/voyage_template.jpg" alt="voyage_template">
							<a href="/_my_works/voyage_template/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive Layout "Voyage_Template"</span>
										<span class="rus">Адаптивная Верстка "Voyage_Template"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work Snowboarding-->
						<li class="portfolio_item training">
							<img src="img/preview-img/snowboarding.jpg" alt="snowboarding">
							<a href="/_my_works/snowboarding/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive Layout Landing Page "SnowBoarding"</span>
										<span class="rus">Адаптивная Верстка Landing Page "SnowBoarding"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work Loom Studio-->
						<li class="portfolio_item training">
							<img src="img/preview-img/studio.jpg" alt="studio">
							<a href="/_my_works/studio/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive Layout  "Studio"</span>
										<span class="rus">Адаптивная Верстка Макета "Studio"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work Shophia-->
						<li class="portfolio_item training">
							<img src="img/preview-img/shopia.jpg" alt="shophia">
							<a href="/_my_works/shophia/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive Layout Landing Page "Shophia"</span>
										<span class="rus">Адаптивная Верстка Landing Page "Shophia"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work I-robot-->
						<li class="portfolio_item training">
							<img src="img/preview-img/i-robot.jpg" alt="i-robot">
							<a href="/_my_works/i-robot/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive Layout Landing Page "I-Robot"</span>
										<span class="rus">Адаптивная Верстка Landing Page "I-Robot"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work Progress_Business-->
						<li class="portfolio_item training">
							<img src="img/preview-img/progress_business.jpg" alt="progress_business">
							<a href="/_my_works/progress_business/index.html" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive Layout "Progress_Business"</span>
										<span class="rus">Адаптивная Верстка "Progress_Business"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work green_pharm-->
						<li class="portfolio_item training">
							<img src="img/preview-img/green_pharm.jpg" alt="green_pharm">
							<a href="/_my_works/green_pharm/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive Layout "Green Pharm"</span>
										<span class="rus">Адаптивная Верстка Макета "Green Pharm"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work display-->
						<li class="portfolio_item training">
							<img src="img/preview-img/display.jpg" alt="display">
							<a href="/_my_works/display/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Layout of the "Display"</span>
										<span class="rus">Верстка Макета "Display"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work afg-->
						<li class="portfolio_item training">
							<img src="img/preview-img/afg.jpg" alt="afg">
							<a href="/_my_works/afg/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive Layout Landing Page "AFG"</span>
										<span class="rus">Адаптивная Верстка Landing Page "AFG"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work auto-service-->
						<li class="portfolio_item training">
							<img src="img/preview-img/auto-service.jpg" alt="auto-service">
							<a href="/_my_works/auto-service/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive Layout Landing Page "Auto-Service"</span>
										<span class="rus">Адаптивная Верстка Landing Page "Auto-Service"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work biz_theme-->
						<li class="portfolio_item training">
							<img src="img/preview-img/biz_theme.jpg" alt="biz_theme">
							<a href="/_my_works/biz_theme/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Layout of the "Biz_Theme"</span>
										<span class="rus">Верстка Макета "Biz_Theme"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work business_template-->
						<li class="portfolio_item training">
							<img src="img/preview-img/business_template.jpg" alt="business_template">
							<a href="/_my_works/business_template/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Layout "Business_Template"</span>
										<span class="rus">Верстка Макета "Business_Template"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work edu-web-->
						<li class="portfolio_item training">
							<img src="img/preview-img/edu-web.jpg" alt="edu-web">
							<a href="/_my_works/edu-web/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive Layout Landing Page "Educational Site"</span>
										<span class="rus">Адаптивная Верстка Landing Page "Образовательного сайта"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work example-->
						<li class="portfolio_item training">
							<img src="img/preview-img/example.jpg" alt="example">
							<a href="/_my_works/example/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Responsive Layout "Online Shop"</span>
										<span class="rus">Резиновая Верстка "Интернет Магазин"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work good-Inc-->
						<li class="portfolio_item training">
							<img src="img/preview-img/good-inc.jpg" alt="good-inc">
							<a href="/_my_works/good-inc/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Layout "Good-Inc"</span>
										<span class="rus">Верстка Макета "Good-Inc"</span>
									</p>
								</div>
							</a>
						</li>

						<!-- Block work online-store-->
						<li class="portfolio_item training">
							<img src="img/preview-img/online-store.jpg" alt="online-store">
							<a href="/_my_works/online-store/index.html" target="_blank" class="inner-case">
								<div class="align-middle">
									<p class="title-case">
										<span class="eng">Static layout of the "Online Store"</span>
										<span class="rus">Статичная верстка Макета "Интернет Магазин"</span>
									</p>
								</div>
							</a>
						</li>

					</ul>
				</div>

			</div>

		</div>
	</div>
</section>
<!-- Portfolio END -->



<a href="#count" class="count">&emsp;</a>
<!-- Button up -->
<div class="btn-top">&nbsp;</div>


<!-- Hidden elements -->
<div class="hidden">

	<!-- COUNTER CODE -->
	<div id="count" style="position: relative;">

		<span>Views: <?=$count ?></span> <!-- вывод счетчика -->

	</div>
	<!-- COUNTER CODE END -->

	<!-- Layout "Kiev-Guides" -->
	<div id="kiev-guides" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/kiev-guides.jpg" alt="kiev-guides">
		</div>
		<div class="work_descr commerc-descr">
			<h4>Адаптивная Верстка сайта "Kiev Guides"</h4>
			<p>Адаптивная верстка с помощью Bootstrap 3. При написания CSS, использовался препроцессор SASS. Были подключены Parallax, и анимация</p>
			<div class="button-wrap">
				<a href="/_my_works/kiev-guides/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
			</div>
		</div>
	</div>

	<!-- Layout "People_in_White" -->
	<div id="people_in_white" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/people_in_white.jpg" alt="people_in_white">
		</div>
		<div class="work_descr commerc-descr">
			<h4>Адаптивная Верстка сайта "People in white"</h4>
			<p>Адаптивная верстка с помощью Bootstrap 3. При написания CSS, использовался препроцессор SASS. Были подключены слайдер OWL carousel, и анимация</p>
			<div class="button-wrap">
				<a href="/_my_works/people_in_white/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
			</div>
		</div>
	</div>

	<!-- Layout "FoxAuto" -->
	<div id="foxauto" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/foxauto.jpg" alt="foxauto">
		</div>
		<div class="work_descr commerc-descr">
			<h4>Адаптивная Верстка сайта "FoxAuto"</h4>
			<p>Адаптивная верстка. При написания CSS, использовался препроцессор SASS. Были подключены JQuery плагины и произведена кастомизация select</p>
			<div class="button-wrap">
				<a href="/_my_works/foxauto/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
			</div>
		</div>
	</div>

	<!-- Layout "Axit" -->
	<div id="axit" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/axit.jpg" alt="axit">
		</div>
		<div class="work_descr">
			<h4>Адаптивная Верстка Landing Page "Axit"</h4>
			<p>Адаптивная верстка. Подключена анимация и различные jQuery плагины. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/axit/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/OlhNela3njSGj" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "Activebox" -->
	<div id="activebox" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/activebox.jpg" alt="activebox">
		</div>
		<div class="work_descr">
			<h4>Адаптивная Верстка Landing Page "ActiveBox"</h4>
			<p>Адаптивная верстка, выполнена с применением сетки Bootstrap 3. Подключены различные jQuery плагины. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/activebox/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/oEplBUiomLpRD" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "Naturetour" -->
	<div id="naturetour" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/naturetour.jpg" alt="naturetour">
		</div>
		<div class="work_descr">
			<h4>Верстка из PSD "Naturetour"</h4>
			<p>В данной работе был подключен слайдер, а также кастомизированые select. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/naturetour/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/YSDwaND-q8xgj" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "Сomedy_Central" -->
	<div id="сomedy_central" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/сomedy_central.jpg" alt="сomedy_central">
		</div>
		<div class="work_descr">
			<h4>Адаптивная Верстка из PSD "Сomedy Central"</h4>
			<p>Адаптивная верстка. Подключены различные jQuery плагины. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/сomedy_central/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/cNoKY9UwpzMHi" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "Movie-Store" -->
	<div id="movie-store" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/movie-store.jpg" alt="movie-store">
		</div>
		<div class="work_descr">
			<h4>Адаптивная Верстка из PSD "Movie-Store"</h4>
			<p>Адаптивная верстка. Подключены различные jQuery плагины. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/movie-store/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/yGXeqoxKoxKbF" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "Stream-Video" -->
	<div id="stream-video" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/stream-video.jpg" alt="stream-video">
		</div>
		<div class="work_descr">
			<h4>Адаптивная Верстка из PSD "Stream-Video"</h4>
			<p>Адаптивная верстка. Подключены различные jQuery плагины. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/stream-video/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/LpMl6VGRoaZDA" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "Voyage_Template" -->
	<div id="voyage_template" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/voyage_template.jpg" alt="voyage_template">
		</div>
		<div class="work_descr">
			<h4>Адаптивная Верстка "Voyage_Template"</h4>
			<p>Адаптивная верстка. Подключены различные jQuery плагины. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/voyage_template/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/nNCQXtX1oKAa6" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "Snowboarding" -->
	<div id="snowboarding" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/snowboarding.jpg" alt="snowboarding">
		</div>
		<div class="work_descr">
			<h4>Адаптивная Верстка Landing Page "SnowBoarding"</h4>
			<p>Адаптивная верстка. Подключены несколько слайдеров и различные jQuery плагины. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/snowboarding/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/tyhoLuExo2WQy" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "Loom Studio" -->
	<div id="studio" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/studio.jpg" alt="studio">
		</div>
		<div class="work_descr">
			<h4>Адаптивная Верстка Макета "Studio"</h4>
			<p>Адаптивная верстка, выполнена с применением сетки Bootstrap 3. Подключены различные jQuery плагины. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/studio/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/dxzrdIPsmXR7A" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "Shophia" -->
	<div id="shophia" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/shopia.jpg" alt="shophia">
		</div>
		<div class="work_descr">
			<h4>Адаптивная Верстка Landing Page "Shophia"</h4>
			<p>Адаптивная верстка, выполнена с применением сетки Bootstrap 3. Подключены различные jQuery плагины, а также присутствует SVG графика. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/shophia/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/1zBErQecmHBag" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "i-robot" -->
	<div id="i-robot" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/i-robot.jpg" alt="i-robot">
		</div>
		<div class="work_descr">
			<h4>Адаптивная Верстка Landing Page "I-Robot"</h4>
			<p>Адаптивная верстка, выполнена с применением сетки Bootstrap 3. Подключены различные jQuery плагины. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/i-robot/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/-MWHHapgm5zZu" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "progress_business" -->
	<div id="progress_business" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/progress_business.jpg" alt="progress_business">
		</div>
		<div class="work_descr">
			<h4>Адаптивная Верстка "Progress_Business"</h4>
			<p>Адаптивная верстка, выполнена с применением сетки Bootstrap 3. Подключены различные jQuery плагины. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/progress_business/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/TBgC0n18mrHAd" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "green_pharm" -->
	<div id="green_pharm" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/green_pharm.jpg" alt="green_pharm">
		</div>
		<div class="work_descr">
			<h4>Адаптивная Верстка макета "Green Pharm"</h4>
			<p>Адаптивная верстка, выполнена с применением сетки Bootstrap 3. Подключены различные jQuery плагины. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/green_pharm/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/IUQyTvFxmXR7U" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "Display" -->
	<div id="display" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/display.jpg" alt="display">
		</div>
		<div class="work_descr">
			<h4>Верстка макета "Display"</h4>
			<p>Простая статичная верстка. Подключен jQuery плагин карусели</p>
			<div class="button-wrap">
				<a href="/_my_works/display/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/xIOs3GRtjsntF" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "AFG" -->
	<div id="afg" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/afg.jpg" alt="afg">
		</div>
		<div class="work_descr">
			<h4>Адаптивная Верстка Landing Page "AFG"</h4>
			<p>Адаптивная верстка, выполнена с применением сетки Bootstrap 3. Подключены различные jQuery плагины, а также присутствует SVG графика. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/afg/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/UKGxoTANkzujC" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "auto-service" -->
	<div id="auto-service" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/auto-service.jpg" alt="auto-service">
		</div>
		<div class="work_descr">
			<h4>Адаптивная Верстка Landing Page "Auto-Service"</h4>
			<p>Адаптивная верстка, выполнена с применением сетки Bootstrap 3. Подключены различные jQuery плагины. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/auto-service/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/Ly3DJW0TkzujN" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "biz_theme" -->
	<div id="biz_theme" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/biz_theme.jpg" alt="biz_theme">
		</div>
		<div class="work_descr">
			<h4>Верстка макета "Biz_Theme"</h4>
			<p>Простая статичная верстка. Подключен jQuery плагин слайдер</p>
			<div class="button-wrap">
				<a href="/_my_works/biz_theme/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/UsL808zLjsnWh" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "business_template" -->
	<div id="business_template" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/business_template.jpg" alt="business_template">
		</div>
		<div class="work_descr">
			<h4>Верстка Макета "Business_Template"</h4>
			<p>Простая статичная верстка. Подключен jQuery плагин слайдер</p>
			<div class="button-wrap">
				<a href="/_my_works/business_template/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/XC5Z0ax_jsnib" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "edu-web" -->
	<div id="edu-web" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/edu-web.jpg" alt="edu-web">
		</div>
		<div class="work_descr">
			<h4>Адаптивная Верстка Landing Page "Образовательного сайта"</h4>
			<p>Адаптивная верстка, выполнена с применением сетки Bootstrap 3. Подключены различные jQuery плагины, Paralax эффект. При написания CSS, использовался препроцессор SASS.</p>
			<div class="button-wrap">
				<a href="/_my_works/edu-web/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/HFiAWZx1kzujt" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "example" -->
	<div id="example" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/example.jpg" alt="example">
		</div>
		<div class="work_descr">
			<h4>Резиновая Верстка "Интернет Магазин"</h4>
			<p>Простая резиновая верстка, с применением только HTML 5 и CSS 3</p>
			<div class="button-wrap">
				<a href="/_my_works/example/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/yXGO6_mrjsnyt" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "good-inc" -->
	<div id="good-inc" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/good-inc.jpg" alt="good-inc">
		</div>
		<div class="work_descr">
			<h4>Верстка макета "Good-Inc"</h4>
			<p>Простая статичная верстка, выполненная на чистом HTML 5 и CSS 3</p>
			<div class="button-wrap">
				<a href="/_my_works/good-inc/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/vNCh_Em6jso6r" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

	<!-- Layout "online-store" -->
	<div id="online-store" class="work_popup">
		<div class="img_hidden_wrap">
			<img src="img/preview-img/online-store.jpg" alt="online-store">
		</div>
		<div class="work_descr">
			<h4>Статичная Верстка макета "Интернет Магазин"</h4>
			<p>Статичная верстка, выполненная на HTML 5 и CSS 3. Подключены несколько jQuery плагинов.</p>
			<div class="button-wrap">
				<a href="/_my_works/online-store/index.html" target="_blank" class="basic-btn">Открыть Работу</a>
				<a href="https://yadi.sk/d/fOu6ZAb0jsoGL" target="_blank" class="basic-btn">Скачать Исходник</a>
			</div>
		</div>
	</div>

</div>
<!-- Hidden elemnts END -->

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
<![endif]-->

<!-- <script src="libs/jquery/jquery-1.11.2.min.js"></script> -->
<script src="libs/jquery-3.3.1/jquery-3.3.1.min.js"></script>
<script src="libs/jquery-3.3.1/jquery-migrate.min.js"></script>

<script src="libs/waypoints/waypoints.min.js"></script>
<script src="libs/animate/animate-css.js"></script>
<script src="libs/plugins-scroll/plugins-scroll.js"></script>
<script src="libs/magnific-popup-master/jquery.magnific-popup.min.js"></script>
<!-- <script src="libs/scrollto/jquery.scrollTo.min.js"></script> -->

<script src="libs/mobilyselect/mobilyselect.js"></script>

<script src="js/common.js"></script>

</body>

</html>