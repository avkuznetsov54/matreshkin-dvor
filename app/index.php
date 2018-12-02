<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>ЖК Матрёшкин двор</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->

	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#fff">
	<!-- Custom Browsers Color End -->

	<link rel="stylesheet" href="css/main.min.css">

</head>

<body>

	<header class="header">
		<div class="header__top">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="header__top-logo">
							<img class="header__top-logo-img" src="img/logo-matr-dvor.png" alt="">
							<img class="header__top-logo-img" src="img/logo-kva-black-bg-none.png" alt="">
						</div>
					</div>
					<div class="col-md-3">
						<div class="header__top-phone">
							<a class="header__top-phone-top" href="tel:+73832588444">
								<div class="animation-icon-box"><i class="fas fa-phone"></i></div> +7 (383) 258-84-44
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="header__top-button">
							<div class="button-move" data-toggle="modal" data-target="#myModal-ekskur">
								Записаться на экскурсию
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header__body">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-7 col-lg-7">
						<div class="header__body-text">
							<div>
								<h1 class="h1">Квартиры в<br>ЖК «Матрешкин Двор»</h1>
								<p class="fz2rem">от 9 630 руб./мес.*</p>
								<p class="fz2rem">Оформление ипотеки без комиссий</p>
								<p class="fz08rem">*Платеж по ипотечной программе от ПАО "Банк ВТБ", ставка 9,3 % годовых с первоначальным взносом 15 % на 20 лет</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-5 col-lg-5">
						<div class="header__body-form">
							<div>
								<form class="transparent form-zayvka gform">
									<div class="form-title">Мы расскажем, как выгодно купить квартиру!</div>

									<input type="hidden" name="utm_source" value="<?php $utm_source = $_GET['utm_source']; echo $utm_source; ?>">
									<input type="hidden" name="utm_medium" value="<?php $utm_medium = $_GET['utm_medium']; echo $utm_medium; ?>">
									<input type="hidden" name="utm_campaign" value="<?php $utm_campaign = $_GET['utm_campaign']; echo $utm_campaign; ?>">
									<input type="hidden" name="utm_content" value="<?php $utm_content = $_GET['utm_content']; echo $utm_content; ?>">
									<input type="hidden" name="utm_term" value="<?php $utm_term = $_GET['utm_term']; echo $utm_term; ?>">

									<div><input type="hidden" name="field2" value="Заказать звонок"></div>
									<div><input type="hidden" name="field3" value="header"></div>

									<div class="field">
										<input type="text" class="nameclient-form" placeholder="Ваше Имя" name="field5">
										<i class="fas fa-user"></i>
									</div>
									<div class="field">
										<input type="text" class="tel phone-form" placeholder="Ваш телефон" name="field6">
										<i class="fas fa-phone"></i>
									</div>
									<div class="field">
										<button class="button-move" type="submit">Отправить</button>
									</div>
									<p class="declaration">Нажимая на кнопку «ОТПРАВИТЬ», Вы соглашаетесь на обработку <a href="http://www.sasn.ru/about/personaldata/"
										target="_blank">персональных данных</a></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header__body-downtext">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="header__body-downtext-block">
									<img src="img/0procent.png" alt="" class="img-responsive">
									<div>
										<div class="header__body-downtext-block-title">
											Без комисии, без переплат!
										</div>
										<div class="header__body-downtext-block-anons">
											При покупке квартиры в ЖК «Матрешкин Двор», Вы не платитите комиссию агентству недвижимости.
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="header__body-downtext-block">
									<img src="img/clipboards.png" alt="" class="img-responsive">
									<div>
										<div class="header__body-downtext-block-title">
											ИПОТЕКА
										</div>
										<div class="header__body-downtext-block-anons">
											Помощь в подготовке пакета документации, чтобы купить квартиру на выгодных условиях ипотеки.
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="header__body-downtext-block">
									<img src="img/family.png" alt="" class="img-responsive">
									<div>
										<div class="header__body-downtext-block-title">
											Доступные цены
										</div>
										<div class="header__body-downtext-block-anons">
											Цены, не превышающают среднерыночные показатели. Наличие различных акций или скидок.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="advantages">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="advantages__title">
							<h2 class="h2">Основные преимущества ЖК «Матрешкин Двор»</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<div class="row">
						<div class="col-6 col-md-12">
						<div class="advantages__cart">
							<div class="advantages__cart-img">
								<i class="fas fa-key"></i>
							</div>
							<div class="advantages__cart-text">
								отделка под ключ
							</div>
						</div>
					</div>
					<div class="col-6 col-md-12">
						<div class="advantages__cart">
							<div class="advantages__cart-img">
								<i class="fas fa-hotel"></i>
							</div>
							<div class="advantages__cart-text">
								благоустроенный двор
							</div>
						</div>
					</div>
					<div class="col-6 col-md-12">
						<div class="advantages__cart">
							<div class="advantages__cart-img">
								<i class="fas fa-map-marker-alt"></i>
							</div>
							<div class="advantages__cart-text">
								развитая инфраструктура
							</div>
						</div>
					</div>
					<div class="col-6 col-md-12">
						<div class="advantages__cart">
							<div class="advantages__cart-img">
								<i class="fas fa-child"></i>
							</div>
							<div class="advantages__cart-text">
								детская площадка
							</div>
						</div>
					</div>
					<div class="col-6 col-md-12">
						<div class="advantages__cart">
							<div class="advantages__cart-img">
								<i class="fas fa-ruble-sign"></i>
							</div>
							<div class="advantages__cart-text">
								низкие ставки по ипотеке
							</div>
						</div>
					</div>
					<div class="col-6 col-md-12">
						<div class="advantages__cart">
							<div class="advantages__cart-img">
								<i class="fas fa-exchange-alt"></i>
							</div>
							<div class="advantages__cart-text">
								различные планировки
							</div>
						</div>
					</div>
					</div>
					</div>
					<div class="col-md-7">
						<div class="advantages__text">
							<p><b>«Матрешкин Двор»</b> – самый крупномасштабный проект компании «ВИРА-Строй». Его строительство ведется в Кировском районе на улицах Петухова и Шмонина. За 5 лет на земельном участке площадью более 16 Га было построено шесть жилых кварталов (21 дом), детский сад, проложена новая дорога и продлены транспортные маршруты, а в следующем году завершится строительство школы.</p>
							<p>При разработке новой концепции было учтено всё лучшее из воплощенных проектов и при этом добавлены изменения, исходя из пожеланий покупателей. «Матрешкин двор» постоянно растет и развивается со своими жителями.</p>
							<p><b>Жилой комплекс «Матрешкин Двор»</b> (застройщик компания «ВИРА-Строй») построен с привлечением новейших технологических решений и качественных материалов. Планировки квартир тщательно продуманы.</p>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>

		<div class="media">
			<div class="container">
				<div class="row">
						<div class="col-sm-6 col-md-3">
						<div class="media__item" id="object-video">
							<div class="media__item-wrap">
								<div class="media__item-icon"><i class="fab fa-youtube"></i></div>
								<div class="media__item-text">Видео</div>
							</div>
						</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="media__item" id="object-plan">
								<div class="media__item-wrap">
									<div class="media__item-icon"><i class="fas fa-image"></i></div>
									<div class="media__item-text">План</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="media__item" id="object-photo">
								<div class="media__item-wrap">
									<div class="media__item-icon"><i class="fas fa-image"></i></div>
									<div class="media__item-text">Фото</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="media__item" id="flats-repairs">
								<div class="media__item-wrap">
									<div class="media__item-icon"><i class="fas fa-image"></i></div>
									<div class="media__item-text">Ремонт</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="map">
				<div class="map__bg"></div>
				<div class="map__body">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-7">
								<div class="map__body-desc">
									<div class="map__body-desc-title">Расположение</div>
									<div class="map__body-desc-text">
										<b>Матрёшкин двор</b> - жилой микрорайон комплексной застройки в Новосибирске в Кировском районе,
										расположенный на улице Петухова и Дмитрия Шмонина.
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="map__body-icoloco">
									<div class="popup-link" data-toggle="modal" data-target="#myModal-map" id="create">
										<svg version="1.1" id="map-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;"
										xml:space="preserve">
										<g id="road">
											<path class="st0" d="M141.98,71.904l21.465,100.993" />
											<polyline class="st0" points="36.305,137.309 128.621,117.686 128.621,117.686 119.889,76.599 	" />
											<polyline class="st0" points="141.355,177.59 133.316,139.777 41.001,159.4 	" />
										</g>
										<g id="point">
											<circle class="st1" cx="72.462" cy="55.02" r="13.07" />
											<path class="st3" d="M102.463,55.02c0,16.569-30,54.98-30,54.98s-30-38.412-30-54.98s13.431-30,30-30 C89.031,25.02,102.463,38.451,102.463,55.02z" />
										</g>
									</svg>
								</div>
								<div class="modal" id="myModal-map" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
									<div class="modal-dialog map-modal modal-dialog-centered" role="dialog">
										<div class="modal-content">
											<button type="button" class="close clickclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4fd10a4170a7f50792281722706afb6b59a19e349b4c38ef3fe1b277e4cda996&amp;source=constructor"
											"></iframe>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fflats">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="fflats__thumbnail">
							<div class="owl-carousel">
								<img src="img/flats/1C_30,4.png" alt="Студия">
							</div>
							<div class="fflats__thumbnail-body">
								<div class="title-flat">1 комнатная студия</div>
								<div class="cost-flat">от 1 444 000 руб.</div>
							</div>
							<div class="fflats__thumbnail-button" data-toggle="modal" data-target="#myModal-cart">
								<div>Подробнее <i class="fas fa-key"></i></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="fflats__thumbnail">
							<div class="owl-carousel">
								<img src="img/flats/1K_33,69.jpg" alt="1 ком. квартира">
								<img src="img/flats/1K_35,7.png" alt="1 ком. квартира">
								<img src="img/flats/1K_35,73.png" alt="1 ком. квартира">
							</div>
							<div class="fflats__thumbnail-body">
								<div class="title-flat">1 комнатная квартира</div>
								<div class="cost-flat">от 1 700 000 руб.</div>
							</div>
							<div class="fflats__thumbnail-button" data-toggle="modal" data-target="#myModal-cart">
								<div>Подробнее <i class="fas fa-key"></i></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="fflats__thumbnail">
							<div class="owl-carousel">
								<img src="img/flats/2C_44,83.jpg" alt="2 студия">
								<img src="img/flats/2C_44,89.png" alt="2 студия">
								<img src="img/flats/2C_46,65.jpg" alt="2 студия">
								<img src="img/flats/2C_46,72.jpg" alt="2 студия">
								<img src="img/flats/2C_44.81.jpg" alt="2 студия">
							</div>
							<div class="fflats__thumbnail-body">
								<div class="title-flat">2 комнатная студия</div>
								<div class="cost-flat">от 2 151 000 руб.</div>
							</div>
							<div class="fflats__thumbnail-button" data-toggle="modal" data-target="#myModal-cart">
								<div>Подробнее <i class="fas fa-key"></i></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="fflats__thumbnail">
							<div class="owl-carousel">
								<img src="img/flats/2K_54.65.png" alt="2 ком. квартира">
								<img src="img/flats/2K_55,10.jpg" alt="2 ком. квартира">
								<img src="img/flats/2K_61,1.png" alt="2 ком. квартира">
								<img src="img/flats/2K_61,2.png" alt="2 ком. квартира">
								<img src="img/flats/2K_61,3.png" alt="2 ком. квартира">
								<img src="img/flats/2K_61,5.png" alt="2 ком. квартира">
								<img src="img/flats/2K_61,6.png" alt="2 ком. квартира">
								<img src="img/flats/2K_61,7.png" alt="2 ком. квартира">
								<img src="img/flats/2K_61,8.png" alt="2 ком. квартира">
								<img src="img/flats/2K_63,1.png" alt="2 ком. квартира">
								<img src="img/flats/2K_63,3.png" alt="2 ком. квартира">
								<img src="img/flats/2K_63,4.png" alt="2 ком. квартира">
								<img src="img/flats/2K_63,6.png" alt="2 ком. квартира">
								<img src="img/flats/2K_63,9.png" alt="2 ком. квартира">
								
							</div>
							<div class="fflats__thumbnail-body">
								<div class="title-flat">2 комнатная квартира</div>
								<div class="cost-flat">от 2 589 000 руб.</div>
							</div>
							<div class="fflats__thumbnail-button" data-toggle="modal" data-target="#myModal-cart">
								<div>Подробнее <i class="fas fa-key"></i></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="fflats__thumbnail">
							<div class="owl-carousel">
								<img src="img/flats/3C_67,7.png" alt="3 студия">
								<img src="img/flats/3C_67,8.png" alt="3 студия">
								<img src="img/flats/3C_67,9.png" alt="3 студия">
								<img src="img/flats/3C_68,1.png" alt="3 студия">
								<img src="img/flats/3C_68,2.png" alt="3 студия">
								<img src="img/flats/3C_68,4.png" alt="3 студия">
							</div>
							<div class="fflats__thumbnail-body">
								<div class="title-flat">3 комнатная студия</div>
								<div class="cost-flat">от 2 843 000 руб.</div>
							</div>
							<div class="fflats__thumbnail-button" data-toggle="modal" data-target="#myModal-cart">
								<div>Подробнее <i class="fas fa-key"></i></div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="purchase">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="purchase__title">
							<h2 class="h2">Как купить квартиру в ЖК «Матрёшкин двор»</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="purchase__method">
							<div class="purchase__method-title"><span>Ипотека</span></div>
							<div class="purchase__method-text">
								Наличие аккредитации компании у ведущих банков РФ гарантирует надежность и выгодные условия ипотечного кредитования.
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="purchase__method">
							<div class="purchase__method-title"><span>Рассрочка</span></div>
							<div class="purchase__method-text">
								Квартиры в ЖК «Матрёшкин двор» можно приобрести по программе рассрочки. Условия программы индивидуальны и
								предоставляються по запросу.
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="purchase__method">
							<div class="purchase__method-title"><span>Материнский капитал</span></div>
							<div class="purchase__method-text">
								Направить материнский капитал на дом для своей семьи - разумное решение. Сертификат можно внести в качестве погашения части платежа при приобретении жилья за счет собственных средств или первоначального взноса по ипотеке. Наша специалисты
								помогут разумно использовать материнский капитал и улучшить свои жилищные условия прямо сейчас.
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="purchase__method">
							<div class="purchase__method-title"><span>Военная ипотека*</span></div>
							<div class="purchase__method-text">
								Реализовать право на получение жилья военнослужащие могут в двух формах: - ипотечный кредит, оплачиваемый государством по накопительной системе; - единовременная выплата или государственный жилищный сертификат.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="request">
			<div class="request__bg"></div>
			<div class="request__body">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
							<div class="request__body-title">
								<h2>Сопровождение сделки бесплатно!</h2>
								<p>От выбора квартиры до регистрации договора.</p>
							</div>
						</div>
						<div class="col-md-10 offset-md-1">
							<div class="request__body-form">
								<form class="transparent form-zayvka gform">

									<input type="hidden" name="utm_source" value="<?php $utm_source = $_GET['utm_source']; echo $utm_source; ?>">
									<input type="hidden" name="utm_medium" value="<?php $utm_medium = $_GET['utm_medium']; echo $utm_medium; ?>">
									<input type="hidden" name="utm_campaign" value="<?php $utm_campaign = $_GET['utm_campaign']; echo $utm_campaign; ?>">
									<input type="hidden" name="utm_content" value="<?php $utm_content = $_GET['utm_content']; echo $utm_content; ?>">
									<input type="hidden" name="utm_term" value="<?php $utm_term = $_GET['utm_term']; echo $utm_term; ?>">

									<div><input type="hidden" name="field2" value="Заказать экскурсию"></div>
									<div><input type="hidden" name="field3" value="топ меню"></div>

									<div class="field">
										<input type="text" class="nameclient-form" placeholder="Ваше Имя" name="field5">
										<i class="fas fa-user"></i>
									</div>
									<div class="field phone">
										<input type="text" class="tel phone-form" placeholder="Ваш телефон" name="field6">
										<i class="fas fa-phone"></i>
									</div>
									<div class="field">
										<button class="button-move" type="submit">Отправить</button>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-8 offset-md-2">
							<span class="request__body-declaration">Нажимая на кнопку «отправить»,<br> Вы соглашаетесь на обработку <a href="http://www.sasn.ru/about/personaldata/" target="_blank">персональных данных</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>





		<footer class="footer">
			<div class="container">
				<div class="footer__body">
					<div class="row">
						<div class="col-md-7">
							<div class="footer__body-text">
								<p>1994–2018 © Агентство недвижимости КВАДРОТЕКА™ <span>(OOO "Сибакадемстрой Недвижимость")</span></p>
								<a href="http://www.sasn.ru/about/personaldata/" target="_blank">Положения об обработке персональных данных</a>
							</div>
						</div>
						<div class="col-md-5">
							<ul class="footer__body-social">
								<li><a href="http://vk.com/sasn_nsk" target="_blank"><i class="fab fa-vk"></i></a></li>
								<li><a href="https://www.facebook.com/groups/kvadroteka/" target="_blank"><i class="fab fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/kvadroteka/" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="http://www.youtube.com/user/wwwwSASNru" target="_blank"><i class="fab fa-youtube"></i></a></li>
								<li><a href="https://ok.ru/kvadroteka" target="_blank"><i class="fab fa-odnoklassniki"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="footer__desc">
								Информационные материалы и цены размещенные на сайте носят исключительно информационный характер, не являются публичной офертой, не могут рассматриваться, как публичное предложение к заключению сделки.
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>



		<!-- Modal заказать экскурсию топ меню-->

		<div class="modal" id="myModal-ekskur" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
			<div class="modal-dialog modal-dialog-centered" role="dialog">
				<div class="modal-content">
					<button type="button" class="close clickclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-body">
						<div class="modal-body-title">
							Отправить заявку
						</div>
						<form class="transparent form-zayvka gform">

							<input type="hidden" name="utm_source" value="<?php $utm_source = $_GET['utm_source']; echo $utm_source; ?>">
							<input type="hidden" name="utm_medium" value="<?php $utm_medium = $_GET['utm_medium']; echo $utm_medium; ?>">
							<input type="hidden" name="utm_campaign" value="<?php $utm_campaign = $_GET['utm_campaign']; echo $utm_campaign; ?>">
							<input type="hidden" name="utm_content" value="<?php $utm_content = $_GET['utm_content']; echo $utm_content; ?>">
							<input type="hidden" name="utm_term" value="<?php $utm_term = $_GET['utm_term']; echo $utm_term; ?>">

							<div><input type="hidden" name="field2" value="Заказать экскурсию"></div>
							<div><input type="hidden" name="field3" value="топ меню"></div>

							<div class="field">
								<input type="text" class="nameclient-form" placeholder="Ваше Имя" name="field5">
								<i class="fas fa-user"></i>
							</div>
							<div class="field phone">
								<input type="text" class="tel phone-form" placeholder="Ваш телефон" name="field6">
								<i class="fas fa-phone"></i>
							</div>
							<div class="field">
								<button class="button-move" type="submit">Отправить</button>
							</div>
							<p class="declaration">Нажимая на кнопку «Отправить», Вы соглашаетесь на обработку <a href="http://www.sasn.ru/about/personaldata/"
								target="_blank">персональных данных</a></p>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal END заказать экскурсию топ меню-->

			<!-- Modal cart flat -->

			<div class="modal" id="myModal-cart" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
				<div class="modal-dialog modal-dialog-centered" role="dialog">
					<div class="modal-content">
						<button type="button" class="close clickclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<div class="modal-body">
							<div class="modal-body-title">
								Наши специалисты ответят на любые Ваши вопросы
							</div>
							<form class="transparent form-zayvka gform">

								<input type="hidden" name="utm_source" value="<?php $utm_source = $_GET['utm_source']; echo $utm_source; ?>">
								<input type="hidden" name="utm_medium" value="<?php $utm_medium = $_GET['utm_medium']; echo $utm_medium; ?>">
								<input type="hidden" name="utm_campaign" value="<?php $utm_campaign = $_GET['utm_campaign']; echo $utm_campaign; ?>">
								<input type="hidden" name="utm_content" value="<?php $utm_content = $_GET['utm_content']; echo $utm_content; ?>">
								<input type="hidden" name="utm_term" value="<?php $utm_term = $_GET['utm_term']; echo $utm_term; ?>">

								<div><input type="hidden" name="field2" value="Заказать звонок"></div>
								<div><input type="hidden" name="field3" value="инфо квартиры"></div>

								<div class="field">
									<input type="text" class="nameclient-form" placeholder="Ваше Имя" name="field5">
									<i class="fas fa-user"></i>
								</div>
								<div class="field phone">
									<input type="text" class="tel phone-form" placeholder="Ваш телефон" name="field6">
									<i class="fas fa-phone"></i>
								</div>
								<div class="field">
									<button class="button-move" type="submit">Отправить</button>
								</div>
								<p class="declaration">Нажимая на кнопку «Отправить», Вы соглашаетесь на обработку <a href="http://www.sasn.ru/about/personaldata/"
									target="_blank">персональных данных</a></p>
								</form>
							</div>
						</div>
					</div>
				</div>

				<!-- Modal END cart flat -->

				<div class="top-move-bt">
					<i class="fas fa-angle-double-up"></i>
				</div>


				<script src="js/scripts.min.js"></script>

			</body>

			</html>