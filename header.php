<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package m2collab
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=0, width=device-width, height=device-height" />
	<meta name="description" content="M2barbershop-мужская парикмахерская в Запорожье.
	Оформление мужских стрижек, коррекция бороды и бритье опасной бритвой">
	<!-- <title>M2 Barbershop | Мужская парикмахерская | Запорожье</title> -->
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="main-wrapper-mob">
		<div class="main-wrapper">
			<div class="bacg-tone">

				<div class="wrapper-header-mobile">
					<div class="opacity-line-mobile">
						<nav class="header-menu-mobile">
							<div class="menu-item-mobile">
								<a href="contm_3" class="link-mob">Услуги</a>
							</div>
							<div class="silver-line"></div>
							<div class="menu-item-mobile">
								<a href="contm_4" class="link-mob">Школа / Вакансии</a>

							</div>
							<div class="silver-line"></div>
							<div class="menu-item-mobile">
								<a href="contm_5" id="cow" class="link-mob">Акции</a>
							</div>
							<div class="silver-line"></div>
							<div class="menu-item-mobile">
								<a href="contm_6" class="link-mob">Новости</a>
							</div>
							<div class="silver-line"></div>
							<div class="menu-item-mobile">
								<a href="contm_2" class="link-mob">о нас</a>
							</div>
							<div class="silver-line"></div>
							<div class="menu-item-mobile">
								<a href="contm_7" class="link-mob">Контакты</a>
							</div>
							<div class="silver-line"></div>
							<div class="menu-item-mobile">
								<a id="close-burger" href="#">close</a>
							</div>

						</nav>
					</div>
					<!--close opacity-line</!-->
				</div>
				<!--close wrapper-header-mobile-->

				<div class="vertical-decor">
					<div class="vertical-line">
					</div>
					<div class="vertical-line out-mob">
					</div>
					<div class="vertical-line out-mob">
					</div>
					<div class="vertical-line out-mob">

					</div>
				</div>


				<div class="yclients-wrapper" id="yclients-wrapper">
					<div class="close-icon-yclients" id="close-icon-yclients">
						<i class="far fa-times-circle"></i>

					</div>

					<iframe height="100%" width="450px" scrolling="no" frameborder="0" allowtransparency="true" id="ms_booking_iframe" src="https://n102014.yclients.com/company:114264?/"></iframe>

				</div>







				<div class="none" id="cont_7">
					<!-----------------goooogle---map-----widows--------------------------------->
					<div class="wrapper-google-map">
						<div id="map" class="google-map">

						</div>


					</div>
				</div>
				<!------------------------------------------------------------------------------------------------------->

				<!-- Start Header-->

				<header>
					<div class="wrapper-header">
						<div class="opacity-line">
							<nav class="header-menu">
								<div class="menu-item">
									<div class="psix">
										<div class="shadow-block"></div>
									</div>
									<a href="cont_3" class="link">Услуги</a>
								</div>
								<div class="menu-item">
									<div class="psix">
										<div class="shadow-block"></div>
									</div>
									<a href="cont_4" class="link">Школа<br> Вакансии</a>
								</div>
								<div class="menu-item">
									<a href="cont_1" class="link activ"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"></a>
									<div class="black-square">
										<span class="heir-block">haircut? me too!</span>
									</div>

								</div>
								<div class="menu-item">
									<div class="psix">
										<div class="shadow-block"></div>
									</div>
									<a href="cont_6" class="link">Новости</a>
								</div>
								<div class="menu-item">
									<div class="psix">
										<div class="shadow-block"></div>
									</div>
									<a href="cont_5" id="cow" class="link">Акции</a>
								</div>
							</nav>
						</div>
						<!--close opacity-line</!-->
					</div>



					<div class="nonem" id="contm_7">
						<div class="wrapper-google-map2">



							<div id="map2" class="google-map2">
							</div>

							<div class="active-wrapper-menu-block-map">
								<div class="active-menu-block-map">
									<h5>Контакты</h5>
								</div>
								<div class="time-work-mob-map">
								<?php if (ot_get_option('contact_open_pn_sb')) { ?>
									<span><?php echo ot_get_option('contact_open_pn_sb'); ?></span><br>
								<?php } ?>
								
								<?php if (ot_get_option('contact_open_vs')) { ?>
									<span><?php echo ot_get_option('contact_open_pn_sb'); ?></span>
								<?php } ?>
								</div>

							</div>



						</div>
					</div>
					<div class="mobile-header-block">
						<div class="header-mobile-navigation">
							<a href="contm_1" class="link-mob activm"> <img class="logo-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"></a>
							<div class="phone-hide-open">
								<span id="hide-main-logo-slogan" class="name-company">
									haircut? me too!
								</span>

								<div class="main-telephone">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-call.svg">
									<?php if (ot_get_option('contact_phone_1')) { ?>
										<a href="tel:<?php echo ot_get_option('contact_phone_1'); ?>"><?php echo ot_get_option('contact_phone_1'); ?></a>
									<?php } ?>
								</div>


							</div>
							<!--close  phone-hide-open-->

							<img class="burg-mobile-menu" src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-burg.png" id="burg">

						</div>

						<div class="flex-slogan-phone" id="contact-telephone-open">
							<div class="wrapper-flex-slogan-phone">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-call-yellow.svg " alt="phone-call">
								<?php if (ot_get_option('contact_phone')) { ?>
									<a href="tel:<?php echo ot_get_option('contact_phone_2'); ?>"><?php echo ot_get_option('contact_phone_2'); ?></a>&nbsp;
								<?php } ?>
								<span>/</span>&nbsp;
								<?php if (ot_get_option('contact_phone')) { ?>
									<a href="tel:<?php echo ot_get_option('contact_phone_2'); ?>"><?php echo ot_get_option('contact_phone_2'); ?></a>
								<?php } ?>
							</div>
							<!--close flex-slogan-phone-->

						</div>
					</div>

				</header>

				<!-- End Header-->