<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package m2collab
 */

get_header();
?>
<!-- -->
<div class="contacts-wrapper">
	<div class="addres">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.svg">
		<?php if (ot_get_option('contact_adres')) { ?>
			<a href="cont_7" class="link yellow"><?php echo ot_get_option('contact_adres'); ?></a>
		<?php } ?>

	</div>
	<div class="wrapper-working-time-block">
		<?php if (ot_get_option('contact_open_pn_sb')) { ?>
			<span class="working-time yellow"><?php echo ot_get_option('contact_open_pn_sb'); ?></span>
		<?php } ?>

		<?php if (ot_get_option('contact_open_vs')) { ?>
			<span class="working-time yellow"><?php echo ot_get_option('contact_open_vs'); ?></span>
		<?php } ?>
	</div>

	<div class="wrapper-phone-block">
		<!-- <a class="phone-number yellow" href="tel:+380999024505">0999024505</a> <span class="yellow"> / </span><a class="phone-number yellow" href="tel:+380685241550">0685241550</a> -->
		<?php if (ot_get_option('contact_phone_1')) { ?>
			<a class="phone-number yellow" href="tel:<?php echo ot_get_option('contact_phone_1'); ?>"><?php echo ot_get_option('contact_phone_1'); ?></a>
		<?php } ?>
		<span class="yellow"> / </span>
		<?php if (ot_get_option('contact_phone_2')) { ?>
			<a class="phone-number yellow" href="tel:<?php echo ot_get_option('contact_phone_2'); ?>"><?php echo ot_get_option('contact_phone_2'); ?></a>
		<?php } ?>

	</div>


</div><!-- close contact-wrapper</!-->

<div class="social-block" id="social-box">
	<a target="_blank" href="https://www.instagram.com/m2cuts">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg">
	</a>
	<a target="_blank" href="https://www.facebook.com/M2-Barbershop-Zaporizhia-426311434416476/">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/envelope.svg">
	</a>

</div>












<!-------------------------------------first content--------------------------------------------------->




<div class="first-content" id="cont_1">

	<div class="title-main-content1">
		<h1 class="title-name">
			<span class="upper">M2</span> - барбершоп это мужская парикмахерская с принципами. Мы как никто другой <br>
			ценим чистоту, открытость, комфорт, качество во всех деталях.<br> Наша миссия - помочь тебе нравится себе!
		</h1>
	</div>



	<div class="button-wrapper">
		<button class="button-read" id="first-but">
			Читать
		</button>
	</div>


	<div class="button-wrapper-hide">
		<button class="button-read-hide-tablet" id="first-but-hide-tablet">
			Читать
		</button>
	</div>




</div>
<!---close first content--->


<div class="djony" id="popup__toggle">
	<div class="circlephone" style="transform-origin: center;">
	</div>
	<div class="circle-fill" style="transform-origin: center;">
	</div>
	<div class="img-circle" style="transform-origin: center;">
		<span>Записаться</span>
		<div class="img-circleblock" style="transform-origin: center;">
		</div>
	</div>

</div>









<!--------------------------------- mobile first content--------------------------------------->



<div class="first-content-mobile" id="contm_1">

	<div class="active-wrapper-menu-block">
		<div class="active-menu-block">
			<h5>Haircut? me too!</h5>
		</div>

	</div>


	<div class="title-main-content1">
		<h1 class="title-name">
			<span class="upper">M2</span> - барбершоп это мужская парикмахерская с принципами. Мы как никто другой <br>
			ценим чистоту, открытость, комфорт, качество во всех деталях. Наша миссия - помочь тебе нравится себе!
		</h1>
	</div>
	<div class="background-flex">
		<div class="background-words">
			<div class="first-word">
				<span class="background-text">
					m<br>2
				</span>

			</div>


		</div>
		<!---close background words--->

	</div>
	<!--close background-flex-->



	<div class="first-content-mobile-img">
		<img src="img/bcg-mob.svg">
	</div>






	<div class="button-wrapper">
		<button class="button-read" id="first-but">
			Читать
		</button>
	</div>


	<div class="button-wrapper-hide">
		<button class="button-read-hide-tablet" id="first-but-hide-tablet">
			Читать
		</button>
	</div>

	<div class="button-wrapper-hide-mobile">
		<button class="button-read-hide-mobile" id="first-but-hide-mobile">
			Читать
		</button>
	</div>



</div>
<!---close mobile first content--->



<!----------------- close mobile first ontent--------------------------------------->




<!-------------------------------------close first content ------------------------------------------------->




<!-------------------------------------second content--------------------------------------------------->

<div class="second-content" id="cont_2">
	<div class="wrapper-second-content">
		<h2 class="title-second-content">
			М2 Барбершоп - это мужская парикмахерская с принципами. Мы как никто другой ценим<br>
			комфорт, чистоту, открытость и качество во всех деталях. Наша миссия - помочь тебе нравится себе!
		</h2>
		<div class="list-wrapper">
			<div class="list-item">
				<img src="img/Vector.svg">
				<p class="desc-list-item">
					Нам важен твой комфорт, мы используем лучшие кресла c откидывающимися спинками, <br>
					угощаем кофе, играем с тобой в плейстейшен на удобных диванах. Ты не найдешь грязи,<br>
					инструмент которым тебя подстригут будет чист, обработан как следует, а полотенца<br>
					будут тщательно выстираны.
				</p>
			</div>
			<div class="list-item">
				<img src="img/043-bow-tie.svg">
				<p class="desc-list-item">
					Мы работаем над навыками нашего персонала. Наши администраторы максимально<br>
					отзывчивы и тактичны. А барберы - клиентоориентированые профессионалы.
				</p>
			</div>
			<div class="list-item">
				<img src="img/009-man.svg">
				<p class="desc-list-item">
					Наше главное требование при приеме на работу барбера- работать на максимум каждый<br>
					день. Каждую стрижку. Мы перфекционисты, мы либо лучшие, либо никак.<br>
					Стрижка должна быть идеальной, во всех деталях. А общение барбера должно быть на<br>
					высоте, чтобы ты вернулся к нам и привел друзей еще не один десяток раз.
				</p>
			</div>
		</div>
		<!---close list-wrapper--->
	</div>
	<!--close wrapper-second-content-->





</div>
<!---close second-content-->

<!-------------------------------------tablet-content---------------------------------------------->

<div class="tablet-slider-block">
	<div class="tablet-second-content">
		<div class="wrapper-tablet-second-content">
			<h2 class="title-tablet-second-content">
				М2 Барбершоп - это мужская парикмахерская с принципами. Мы как никто другой ценим<br>
				комфорт, чистоту, открытость и качество во всех деталях. Наша миссия - помочь тебе нравится себе!
			</h2>

			<div class="tablet-slider-second-content">
				<div class="tablet-slider-item">
					<div class="tablet-content-slider-item">
						<img src="img/Vector.svg">
						<p class="desc-tablet-slider">
							Нам важен твой комфорт, мы используем лучшие кресла с откидывающимися спинками, <br>
							угощаем кофе, играем с тобой в плейстейшен на удобных диванах. Ты не найдешь грязи,<br>
							инструмент которым тебя подстригут будет чист, обработан как следует, а полотенца<br>
							будут тщательно выстираны

						</p>

					</div>
					<!--close tablet-content-slider-item----->
				</div>
				<!---close tablet-slider-item---->

				<div class="tablet-slider-item">
					<div class="tablet-content-slider-item">
						<img src="img/043-bow-tie.svg">
						<p class="desc-tablet-slider">
							Мы работаем над навыками нашего персонала. Наши администраторы максимально<br>
							отзывчивы и тактичны. А барберы - клиентоориентированые профессионалы

						</p>

					</div>
					<!--close tablet-content-slider-item----->
				</div>
				<!---close tablet-slider-item---->

				<div class="tablet-slider-item">
					<div class="tablet-content-slider-item">
						<img src="img/009-man.svg">
						<p class="desc-tablet-slider">
							Наше главное требование при приеме на работу барбера- работать на максимум каждый<br>
							день. Каждую стрижку. Мы перфекционисты, мы либо лучшие, либо никак.<br>
							Стрижка должна быть идеальной, во всех деталях. А общение барбера должно быть на<br>
							высоте, чтобы ты вернулся к нам и привел друзей еще не один десяток раз.

						</p>

					</div>
					<!--close tablet-content-slider-item----->
				</div>
				<!---close tablet-slider-item---->
			</div>
			<!--close tablet-slider-second-content-->
			<div class="your-class-arrow3">
			</div>
		</div>
		<!--close wrapper-tablet-second-content-->
	</div>
	<!--close tablet-second-content-->
</div>



<!-------------------------------------close tablet content---------------------------------------->




<!----------------------mobile-slider second content--------------------------------------------->


<div class="second-content-mobile" id="contm_2">
	<div class="mobile-slider-block">


		<div class="active-wrapper-menu-block">
			<div class="active-menu-block">
				<h5>О нас</h5>
			</div>

		</div>

		<div class="mobile-second-content">
			<div class="wrapper-mobile-second-content">

				<h2 class="title-mobile-second-content">
					&nbsp;М2 Барбершоп - это мужская парикмахерская<br> с принципами. Мы как никто другой ценим<br>
					комфорт, чистоту, открытость и качество во всех деталях. Наша миссия - помочь тебе нравится себе!
				</h2>




				<div class="mobile-slider-second-content">
					<div class="mobile-slider-item">
						<div class="mobile-content-slider-item">
							<div class="mobile-content__flex__element">
								<img src="img/Vector1-yellow.svg">
								<span class="img-title">Комфорт</span>

							</div>

							<p class="desc-mobile-slider">
								Нам важен твой комфорт, мы используем лучшие кресла с откидывающимися спинками,
								угощаем кофе, играем с тобой в плейстейшен на удобных диванах. Ты не найдешь грязи,
								инструмент которым тебя подстригут будет чист, обработан как следует, а полотенца
								будут тщательно выстираны

							</p>

						</div>
						<!--close mobile-content-slider-item----->
					</div>
					<!---close mobile-slider-item---->

					<div class="mobile-slider-item">
						<div class="mobile-content-slider-item">
							<div class="mobile-content__flex__element">
								<img src="img/Vector2-yellow.svg">
								<span class="img-title">Персонал</span>

							</div>

							<p class="desc-mobile-slider">
								Мы работаем над навыками
								нашего персонала. Наши администраторы
								максимально
								отзывчивы и тактичны. А барберы -
								клиентоориентированные
								профессионалы


							</p>

						</div>
						<!--close mobile-content-slider-item----->
					</div>
					<!---close mobile-slider-item---->

					< class="mobile-slider-item">
						<div class="mobile-content-slider-item">
							<div class="mobile-content__flex__element">
								<img src="img/Vector3-yellow.svg">
								<span class="img-title">Качество</span>

							</div>

							<p class="desc-mobile-slider">
								Наше главное требование при приеме на
								работу барбера - работать на максимум
								каждый день. Каждую стрижку. Мы
								перфекционисты, мы либо лучшие, либо
								никак. Стрижка должна быть идеальной,
								во всех деталях. А общение барбера
								должно быть на высоте, чтобы ты
								вернулся к нам и привел друзей еще не
								один десяток раз

							</p>

						</div>
						<!--close mobile-content-slider-item----->
					</ div>
					<!---close mobile-slider-item---->







				</div>
				<!--close mobile-slider-second-content-->
			</div>
			<!--close wrapper-mobile-second-content-->
			<div class="prev">
			</div>
		</div>
		<!--close mobile-second-content-->
	</div>
</div>
<!---------------------------close mobile slider second content----------------------------------------->







<!-------------------------------------close second content--------------------------------------------------->







<!-------------------------------------third content--------------------------------------------------->

<div class="none" id="cont_3">
	<div class="wrapper-thrid-content">
		<div class="wrapper-thrid-content-flex">
			<div class="item-list-heircut-price">
				<span class="name-heircut">
					Мужская стрижка
				</span>
				<span class="price">
					200 грн
				</span>
			</div>

			<div class="item-list-heircut-price">
				<span class="name-heircut">
					Коррекция бороды
				</span>
				<span class="price">
					150 грн
				</span>
			</div>

			<div class="item-list-heircut-price">
				<span class="name-heircut">
					Комплекс стрижка+борода
				</span>
				<span class="price">
					350 грн
				</span>
			</div>

			<div class="item-list-heircut-price">
				<span class="name-heircut">
					Бритье опасной бритвой
				</span>
				<span class="price">
					150 грн
				</span>
			</div>

			<div class="item-list-heircut-price">
				<span class="name-heircut">
					Королевское бритье
				</span>
				<span class="price">
					180 грн
				</span>
			</div>

			<div class="item-list-heircut-price">
				<span class="name-heircut">
					Камуфляж седины (борода)
				</span>
				<span class="price">
					180 грн
				</span>
			</div>

			<div class="item-list-heircut-price">
				<span class="name-heircut">
					Камуфляж седины (голова)
				</span>
				<span class="price">
					230 грн
				</span>
			</div>
		</div>
		<!---close wrapper-thrid-content-flex-->
	</div>
	<!---close wrapper-thrid-content-->
</div>
<!---close thrid-content--->



<!-------------------------------------close third content--------------------------------------------------->


<!-------------------------------------mobile thrid content---------------------------------------------->

<div class="nonem" id="contm_3">

	<div class="active-wrapper-menu-block">
		<div class="active-menu-block">
			<h5>Услуги</h5>
		</div>

	</div>




	<div class="background-flex">
		<div class="background-words">
			<div class="first-word">
				<span class="background-text">
					У<br>с<br>л<br>у<br>г<br>и
				</span>

			</div>


		</div>
		<!---close background words--->

	</div>
	<!--close background-flex-->









	<div class="wrapper-thrid-content">
		<div class="wrapper-thrid-content-flex">
			<div class="item-list-heircut-price">
				<span class="name-heircut">
					Мужская стрижка
				</span>
				<span class="price">
					200 грн
				</span>
			</div>

			<div class="item-list-heircut-price">
				<span class="name-heircut">
					Коррекция бороды
				</span>
				<span class="price">
					150 грн
				</span>
			</div>

			<div class="item-list-heircut-price">
				<span class="name-heircut">
					Комплекс стрижка+борода
				</span>
				<span class="price">
					350 грн
				</span>
			</div>

			<div class="item-list-heircut-price">
				<span class="name-heircut">
					Бритье опасной бритвой
				</span>
				<span class="price">
					150 грн
				</span>
			</div>

			<div class="item-list-heircut-price">
				<span class="name-heircut">
					Королевское бритье
				</span>
				<span class="price">
					180 грн
				</span>
			</div>

			<div class="item-list-heircut-price">
				<span class="name-heircut">
					Камуфляж седины (борода)
				</span>
				<span class="price">
					180 грн
				</span>
			</div>

			<div class="item-list-heircut-price">
				<span class="name-heircut">
					Камуфляж седины (голова)
				</span>
				<span class="price">
					230 грн
				</span>
			</div>
		</div>
		<!---close wrapper-thrid-content-flex-->
	</div>
	<!---close wrapper-thrid-content-->
</div>
<!---close nonem content--->
<!-------------------------------------close mobile thrid content---------------------------------------->







<!-------------------------------------fourth content--------------------------------------------------->
<div class="none" id="cont_4">
	<div class="fourth-content-flex">
		<div class="wrapper-fourth-content">
			<p class="text-fourth-content">
				&nbsp;&nbsp;Мы что-то большее,чем просто работа. Нам всегда нужны крутые спецы. В наших<br>
				амбициях - крутая команда, лучшие люди и мастера. Пахари и трудяги. Если ты такой - мы<br>
				ищем тебя.
			</p>
			<p class="text-fourth-content">
				&nbsp;&nbsp;Мы не берем всех, только лучших из лучших. Готовы обучить ответственных и<br>
				целеустремленных людей, всегда открыты к встрече и диалогу. Не стесняйся и приходи к<br>
				нам знакомиться, если хочешь стать частью чего-то великого.
			</p>
			<div class="button-wrapper-send-order">
				<div class="button-send-order" id="button-send-order2">
					<div class="black-block">
					</div>
					<span class="text-button">
						Оставить Заявку
					</span>

				</div>
				<!--close button-send-order-->

			</div>
			<!--button-wrapper-send-order-->

		</div>
		<!--close wrapper-fourth-content-->

	</div>
	<!--close fourth-content-flex-->
</div>
<!--close fourth-content-->




<!------------------------------------- close fourth content--------------------------------------------------->




<!--------------------------------------mobile fourth content------------------------------------------------->

<div class="nonem" id="contm_4">

	<div class="active-wrapper-menu-block">
		<div class="active-menu-block">
			<h5>Школа-Вакансии</h5>
		</div>
	</div>



	<div class="background-flex">
		<div class="background-words">
			<div class="first-word">
				<span class="background-text">
					Ш<br>к<br>о<br>л<br>а
				</span>

			</div>


		</div>
		<!---close background words--->

	</div>
	<!--close background-flex-->






	<div class="fourth-content-flex">
		<div class="wrapper-fourth-content">
			<p class="text-fourth-content">
				&nbsp;&nbsp;Мы что-то большее,чем просто работа. Нам всегда нужны крутые спецы. В наших<br>
				амбициях - крутая команда, лучшие люди и мастера. Пахари и трудяги. Если ты такой - мы<br>
				ищем тебя.
			</p>
			<p class="text-fourth-content">
				&nbsp;&nbsp;Мы не берем всех, только лучших из лучших. Готовы обучить ответственных и<br>
				целеустремленных людей, всегда открыты к встрече и диалогу. Не стесняйся и приходи к<br>
				нам знакомиться, если хочешь стать частью чего-то великого.
			</p>
			<div class="button-wrapper-send-order">
				<div class="button-send-order" id="button-send-order">
					<div class="black-block">
					</div>
					<span class="text-button">
						Оставить Заявку
					</span>

				</div>
				<!--close button-send-order-->

			</div>
			<!--button-wrapper-send-order-->

		</div>
		<!--close wrapper-fourth-content-->

	</div>
	<!--close fourth-content-flex-->
</div>
<!--close fourth-content-->






<!--------------------------------------close mobile fourt content ------------------------------------------>




<!------------------------------------- form action--------------------------------------------------->
<div class="form-content" id="form-content">




	<div class="background-flex">
		<div class="background-words">
			<div class="first-word">
				<span class="background-text">
					Ш<br>к<br>о<br>л<br>а
				</span>

			</div>


		</div>
		<!---close background words--->

	</div>
	<!--close background-flex-->






	<div class="form-wrapper-flex">
		<div class="form-block">

			<div class="active-wrapper-menu-block">
				<div class="active-menu-block">
					<h5>Школа-Вакансии</h5>
				</div>

			</div>





			<h3 class="title-form">
				Заполните, пожалуйста, форму
			</h3>









			<form action="mail.php" method="POST" enctype="multipart/form-data">

				<div class="from-post">
					<label class="name-post">
						Ваше имя*
					</label>
					<input type="text" placeholder="Ваше имя*" id="rez1" name="user_name" required oninput="func()"><img id="ones" class="mustache" src="img/ycik.svg">
				</div>
				<div class="from-post">
					<label class="name-post">
						Ваша фамилия*
					</label>
					<input type="text" placeholder="Ваша фамилия*" id="rez2" name="user_surname" required oninput="func2()"><img id="towes" class="mustache" src="img/ycik.svg">

				</div>

				<div class="from-post">
					<label class="name-post">
						Моб.номер*
					</label>
					<input type="text" placeholder="Моб номер*" id="rez3" name="user_phone" required oninput="func3()"><img id="threes" class="mustache" src="img/ycik.svg">

				</div>

				<div class="from-post">
					<label class="name-post">
						О себе*
					</label>
					<textarea oninput="func4()" id="rez4" name="user_text" placeholder="Опыт работы, предыдущие сферы деятельности*"></textarea>
					<img id="fores" class="mustache" src="img/ycik.svg">


				</div>

				<div class="link-summary-block">
					<img src="img/attach.svg">
					<label for="file">Отправить резюме</label>
					<input type="file" id="file" name="uploaded_file" style="display:none;">
				</div>

				<div class="button-wrapper-mobile">
					<button type="submit" class="button-submit">Отправить форму</button>
				</div>
			</form>
		</div>
		<!---close-form-block--->
	</div>
	<!--form-wrapper-flex--->









</div>
<!--close form-content-->





<!------------------------------------- close form action--------------------------------------------------->





<!------------------------------------- fifth-content--------------------------------------------------->


<div class="none" id="cont_5">
	<div class="wrapper-primator" id="sliderok">
		<div class="primator">
			<div class="content-slide">

				<div class="text-slide-box">
					<div class="img-block">
						<img src="img/cake.svg">
					</div>
					<div class="krab">

						<h4 class="title-slide">
							Скидка имениннику
						</h4>
						<p class="desc-slide">
							Мы мечтаем стать чем-то большим,чем просто парикмахерская. Мы хотим стать тем<br>
							местом, куда ты приходишь когда тебе хорошо, плохо, грустно и весело. Когда у тебя<br>
							праздник и особенно День Рождения! Приходи к нам в свой день или за два дня до<br>
							него и стригись на 15% дешевле! Это наш дружеский подарок :)</p>

					</div>
					<!--close text-slide-box-->
				</div>
			</div>
			<!--close content-slide-->
			<div class="content-slide">

				<div class="text-slide-box">
					<div class="img-block">
						<img src="img/friends disctount icon.svg">
					</div>
					<div class="krab">

						<h4 class="title-slide">
							Скидка другу
						</h4>
						<p class="desc-slide">
							Познакомь друга с нами, подари ему скидку 15%<br>
							Твой друг давно должен знать, круче нас нет никого! Помоги ему это понять.<br>
							Приведи друга к нам и мы пострижем его на 15% дешевле<br>
							Мы ценим, своих друзей : )
						</p>

					</div>
					<!--close text-slide-box-->
				</div>
			</div>
			<!--close content-slide-->


			<div class="content-slide">
				<div class="text-slide-box">
					<div class="img-block">
						<img src="img/instagram discounts.svg">
					</div>
					<div class="krab">

						<h4 class="title-slide">
							15% скидка за пост+стори в инстаграм!
						</h4>
						<p class="desc-slide">
							Сделай фото + историю на нашей територрии, отметь геолокацию M2 Barbershop<br>
							и зафиксируй ссылку на наш профиль @m2cuts, а мы подарим тебе скидку 15%!

						</p>

					</div>
					<!--close krab-->
				</div>
				<!---close text-slide-box--->
			</div>
			<!--close content-slide-->
		</div>
		<!---close your primator--->
	</div>
	<!---close wrapper-primator--->
	<div class="your-class-arrow">
	</div>


</div>
<!--close fifth content---->











<!-------------------------------------close fifth-content--------------------------------------------------->







<!-------------------------------------- mobile-fifth-content------------------------------------------------->

<div class="nonem" id="contm_5">

	<div class="active-wrapper-menu-block">
		<div class="active-menu-block">
			<h5>Акции</h5>
		</div>

	</div>


	<div class="background-flex">
		<div class="background-words">
			<div class="first-word">
				<span class="background-text">
					А<br>к<br>ц<br>и<br>и
				</span>

			</div>


		</div>
		<!---close background words--->

	</div>
	<!--close background-flex-->







	<div class="wrapper-primator" id="sliderok">
		<div class="primator-mob">
			<div class="content-slide">

				<div class="text-slide-box">
					<div class="img-block">
						<img src="img/cake.svg">
					</div>

					<h4 class="title-slide">
						Скидка имениннику
					</h4>
				</div>



				<p class="desc-slide">
					Мы мечтаем стать чем-то большим,чем просто парикмахерская. Мы хотим стать тем
					местом, куда ты приходишь когда тебе хорошо, плохо, грустно и весело. Когда у тебя
					праздник и особенно День Рождения! Приходи к нам в свой день или за два дня до
					него и стригись на 15% дешевле! Это наш дружеский подарок :)
				</p>


			</div>
			<!---close content---slider-->
			<div class="content-slide">

				<div class="text-slide-box">
					<div class="img-block">
						<img src="img/friends disctount icon.svg">
					</div>

					<h4 class="title-slide">
						Скидка другу
					</h4>
				</div>



				<p class="desc-slide">
					Познакомь друга с нами, подари ему скидку 15%<br>
					Твой друг давно должен знать, круче нас нет никого! Помоги ему это понять.<br>
					Приведи друга к нам и мы пострижем его на 15% дешевле<br>
					Мы ценим, своих друзей : )
				</p>


			</div>
			<!---close content---slider-->


			<div class="content-slide">

				<div class="text-slide-box">
					<div class="img-block">
						<img src="img/instagram discounts.svg">
					</div>

					<h4 class="title-slide">
						15% скидка за пост+стори в инстаграм!
					</h4>
				</div>



				<p class="desc-slide">
					Сделай фото + историю на нашей територрии, отметь геолокацию M2 Barbershop<br>
					и зафиксируй ссылку на наш профиль @m2cuts, а мы подарим тебе скидку 15%!

				</p>


			</div>
			<!---close content---slider-->





		</div>
		<!---close your primator--->

	</div>
	<!---close wrapper-primator--->
	<div class="arrow-primator-mob">
	</div>


</div>
<!--close fifth content---->





<!---------------------------------------close mobile fifth cotent ------------------------------------------>





<!------------------------------------- sixth-content--------------------------------------------------->

<div class="sixth-content" id="cont_6">
	<div class="wrapper-sixth-content">
		<div class="news-slider">
			<div class="slide-item-news">
				<div class="img-slide-news">
					<img src="img/photo.png">
				</div>
				<div class="content-slide-news">
					<h5 class="title-slide-news">
						Классические барбершопы
					</h5>
					<p class="desc-slide-news">
						Мода поздней республики: гладко выбритые лица и короткие<br>
						нерасчёсываемые волосы разбираться в любом вопросе...
					</p>
					<button class="open-slider" id="station-1">Дальше <i class="fas fa-angle-right"></i></button>

				</div>

			</div>
			<div class="slide-item-news">
				<div class="img-slide-news">
					<img src="img/photo2-slider-news.png">
				</div>
				<div class="content-slide-news">
					<h5 class="title-slide-news">
						О нас и нашей деятельности
					</h5>
					<p class="desc-slide-news">
						M2 барбершоп - мужской клуб в котором вы не только станете лучше,
						БЕЗУСЛОВНО, У КАЖДОГО МУЖЧИНЫ...
					</p>
					<button class="open-slider" id="station-2">Дальше <i class="fas fa-angle-right"></i></button>

				</div>

			</div>



			<div class="slide-item-news">
				<div class="img-slide-news">
					<img src="img/dwadwae.jpeg">
				</div>
				<div class="content-slide-news">
					<h5 class="title-slide-news">
						Идеальное место для времяпровождения
					</h5>
					<p class="desc-slide-news">
						Ты можешь посетить наш барбершоп в абсолютно любой день, в любую погоду,
						и цель визита не обязательно должна быть именно стрижка...
					</p>
					<button class="open-slider" id="station-3">Дальше <i class="fas fa-angle-right"></i></button>

				</div>

			</div>

			<div class="slide-item-news">
				<div class="img-slide-news">
					<img src="img/evveev.jpeg">
				</div>
				<div class="content-slide-news">
					<h5 class="title-slide-news">
						Пополнение в команде М2
					</h5>
					<p class="desc-slide-news">
						Мы собрали команду лучших мастеров, самых клиентоориентированных специалистов в своем деле.
						А главное, действительно хороших людей....
					</p>
					<button class="open-slider" id="station-4">Дальше <i class="fas fa-angle-right"></i></button>

				</div>

			</div>







		</div>
		<!--close news slider-->
	</div>
	<!---close wrapper-sixth-content-->
</div>
<!---close sixth-content-->
<!----------------------------------------- sixth-MOBILE-content--------------------------------------------------->


<div class="sixth-content-mobile" id="contm_6">
	<div class="active-wrapper-menu-block">
		<div class="active-menu-block">
			<h5>Новости</h5>
		</div>

	</div>


	<div class="background-flex">
		<div class="background-words">
			<div class="first-word">
				<span class="background-text">
					Н<br>о<br>в<br>о<br>с<br>т<br>и
				</span>

			</div>


		</div>
		<!---close background words--->

	</div>
	<!--close background-flex-->









	<div class="wrapper-sixth-content">
		<div class="news-slider">
			<div class="slide-item-news">
				<div class="img-slide-news">
					<img src="img/photo.png">
				</div>
				<div class="content-slide-news">
					<h5 class="title-slide-news">
						Классические барбершопы
					</h5>
					<p class="desc-slide-news">
						В 14 веке в Англии, была основана старейшея организация<br>
						барберов - Worshipful Company of Barbers, действующая и<br>
						поныне. Пережив упадок в позднее средневековье..
					</p>
					<button class="open-slider" id="station-5">Дальше <i class="fas fa-angle-right"></i></button>

				</div>

			</div>
			<div class="slide-item-news" id="marg-img">
				<div class="img-slide-news">
					<img src="img/photo2-slider-news.png">
				</div>
				<div class="content-slide-news">
					<h5 class="title-slide-news">
						О нас и нашей деятельности
					</h5>
					<p class="desc-slide-news">
						Ты можешь посетить наш барбершоп в абсолютно любой день, в любую погоду,<br>
						и цель визита не обязательно должна быть именно стрижка или бритье.<br>
						Мы всегда будем рады провести время с тобой за чашкой вкусного кофе,<br>
						во время игры на PS4 в ваши любимые игры.<br>
						Приходите, мы всегда вам искренне рады.
					</p>
					<button class="open-slider" id="station-6">Дальше <i class="fas fa-angle-right"></i></button>

				</div>

			</div>








		</div>
		<!--close news slider-->
	</div>
	<!---close wrapper-sixth-content-->
</div>
<!---close MOBILE sixth-content-->








<!--------------------------------------close sixth-MOBILE-content---------------------------------------------------->




<!--------------------------------- slider NEWS-------------------------------------------------------->


<div class="wrapper-sixth-content-slider">



	<div class="active-wrapper-menu-block">
		<div class="active-menu-block">
			<h5>Новости</h5>
		</div>

	</div>

	<div class="lopr">
		<div class="news-slider-in">
			<div class="slide-item-news-in">

				<h5 class="title-slide-news-in">
					Классические барбершопы
				</h5>
				<div class="content-slide-news-in">



					<div class="img-slide-news-in">
						<img src="img/photo.png">
					</div>
					<div class="del">

						<div class="mob-desc-slide-in">
							Мода поздней республики: гладко выбритые лица и короткие нерасчёсываемые волосы разбираться в любом вопросе.
							Любитель гитар прекрасно разбирается в истории Fender, или Gibson.
							Это отличает нас от простого потребителя - мы знаем цену качеству.

						</div>


						<p class="desc-slide-news-in">
							&nbsp;&nbsp;&nbsp;Мода поздней республики: гладко выбритые лица и короткие нерасчёсываемые волосы разбираться в любом вопросе.
							Любитель гитар прекрасно разбирается в истории Fender, или Gibson.
							Обладатель мустанга сходу назовет отличия между популярными моделями.
							Это отличает нас от простого потребителя - мы знаем цену качеству.
							Искусство мужских стрижек и бритья тоже имеет свои традиции, свою историю и героев.
							Еще в Древнем Египте люди применяли инструменты для бритья.


						</p>


					</div>
					<!---close del--->
				</div>
				<!---close content-slide-news-in-->

				<p class="desc-slide-news-in">
					&nbsp;&nbsp;&nbsp;Позднее, в эпоху древней Греции и Рима, парикмахерское искусство оформилось в отдельный вид деятельности.
					Уже тогда появились мужские клубы, являвшиеся не только местом, где аристократ мог подровнять бороду или прическу, но и местом,где обсуждались последние новости.Посещение парикмахерской являлось важной составляющей ритуала посвящения в
					совершеннолетие в Риме.Помимо бани, парикмахерские были немаловажной частью жизни римлян.
					<br>
					&nbsp;&nbsp;&nbsp;Посмотрите на статуи римских императоров - у каждого свой неповторимый стиль и образ, узнаваемый спустя столетия. Именно императоры и полководцы являлись законодателями моды мужских стрижек того времени.
					В средневековье парикмахеры, помимо основного занятия, выполняли некоторые врачебные функции, такие как уход за кожей лица, или удаление зубов. Именно благодаря совмещению этих занятий и появился профессиональный символ барберов, называемый barber pole.
					<br>
				</p>
			</div>
			<!--close slide-item-news-in-->


			<div class="slide-item-news-in">

				<h5 class="title-slide-news-in">
					О нас и нашей деятельности
				</h5>
				<div class="content-slide-news-in">







					<div class="img-slide-news-in">
						<img src="img/photo2-slider-news.png">
					</div>
					<div class="del">

						<div class="mob-desc-slide-in">
							M2 барбершоп - мужской клуб в котором вы не только станете лучше, но и будете вооружены опытом наших предков.
							БЕЗУСЛОВНО, У КАЖДОГО МУЖЧИНЫ ЕСТЬ «СВОЯ ТЕРРИТОРИЯ», И НАША ТЕРРИТОРИЯ НАЗЫВАЕТСЯ M2.
							Приходя к барберу с каждым разом, ты попадаешь в дружескую атмосферу М2.

						</div>



						<p class="desc-slide-news-in">
							&nbsp;&nbsp;&nbsp;M2 барбершоп - мужской клуб в котором вы не только станете лучше, но и будете вооружены опытом наших предков.
							БЕЗУСЛОВНО, У КАЖДОГО МУЖЧИНЫ ЕСТЬ «СВОЯ ТЕРРИТОРИЯ», И НАША ТЕРРИТОРИЯ НАЗЫВАЕТСЯ M2.
							<br>
							&nbsp;&nbsp;&nbsp;Приходя к барберу с каждым разом, ты попадаешь в дружескую атмосферу М2.
							Приходя к барберу с каждым разом, ты попадаешь в дружескую атмосферу М2, где тебе всегда рады не только как клиенту,но и как товарищу, с которым можно обсудить спорт, увлечения, модные стрижки. А в ходе приятной беседы насладиться ароматным кофе или вкусным чаем.

						</p>

					</div>
					<!---close del--->
				</div>
				<!---close content-slide-news-in-->
			</div>
			<!--close slide-item-news-in-->



			<div class="slide-item-news-in">

				<h5 class="title-slide-news-in">
					Идеальное место для времяпровождения
				</h5>

				<div class="content-slide-news-in">

					<div class="img-slide-news-in">
						<img src="img/dwadwae.jpeg">
					</div>
					<div class="del">


						<div class="mob-desc-slide-in">
							Ты можешь посетить наш барбершоп в абсолютно любой день, в любую погоду, и цель визита не обязательно должна быть именно стрижка или бритье.
							Мы всегда будем рады провести время с тобой за чашкой вкусного кофе.
							Приходите, мы всегда вам искренне рады.

						</div>

						<p class="desc-slide-news-in">
							&nbsp;&nbsp;&nbsp;Ты можешь посетить наш барбершоп в абсолютно любой день, в любую погоду, и цель визита не обязательно должна быть именно стрижка или бритье. Мы всегда будем рады провести время с тобой за чашкой вкусного кофе,
							во время игры на PS4 в ваши любимые игры. Приходите, мы всегда вам искренне рады.





						</p>

					</div>
					<!---close del--->
				</div>
				<!---close content-slide-news-in-->
			</div>
			<!--close slide-item-news-in-->

			<div class="slide-item-news-in">

				<h5 class="title-slide-news-in">
					Пополнение в команде М2
				</h5>

				<div class="content-slide-news-in">

					<div class="img-slide-news-in">
						<img src="img/evveev.jpeg">
					</div>
					<div class="del">

						<div class="mob-desc-slide-in">
							Мы собрали команду лучших мастеров, самых клиентоориентированных специалистов в своем деле.
							А главное, действительно хороших людей.
							Нам очень важна командная работа и желание стремится становится лучше с каждым днем

						</div>




						<p class="desc-slide-news-in">
							В нашем Барбершопе М2<br>
							&nbsp;&nbsp;&nbsp;Мы собрали команду лучших мастеров, самых клиентоориентированных специалистов в своем деле. А главное, действительно хороших людей.
							Нам очень важна командная работа и желание стремится становится лучше с каждым днем, с каждой стрижкой, с каждым посетителем.
							Наши мастера делятся между собой опытом, советами, уделяют большое внимание именно новым ребятам, проявившим желание стать барбером.



						</p>

					</div>
					<!---close del--->
				</div>
				<!---close content-slide-news-in-->
			</div>
			<!--close slide-item-news-in-->

			<div class="slide-item-news-in">

				<h5 class="title-slide-news-in">
					Советы правильной укладки, от барберов М2:
				</h5>

				<div class="content-slide-news-in">

					<div class="img-slide-news-in">
						<img src="img/123452.jpeg">
					</div>
					<div class="del">


						<div class="mob-desc-slide-in">
							<strong>Воск для волос</strong> — это универсальное средство укладки,
							которое позволяет создать целое разнообразие причесок.<br>


							<strong>Паста для волос</strong>
							Она позволяет за пару движений создать гладкую или небрежную укладку,
							добавить текстуры или придать волосам объем.


						</div>




						<p class="desc-slide-news-in">
							&nbsp;&nbsp;Мы много с вами говорили о прическах и стрижках, но до этого момента не упоминали, что важной составляющей стиля является еще и укладка волос. Обращали внимание на актеров, звезд и просто публичных людей с красивой прической? Всё это результат специальных мужских средств для укладки волос. Не стоит полагать, что все это – мастерство парикмахера. В большинстве случаев, хорошую укладку можно сделать и в домашних условиях. Итак, рассмотрим укладочные средства для волос. Поехали!
							<br>
							<br>







						</p>

					</div>
					<!---close del--->
				</div>
				<!---close content-slide-news-in-->
				<p class="desc-slide-news-in">
					&nbsp;&nbsp;<strong>Воск для волос</strong> — это универсальное средство укладки, которое позволяет создать целое разнообразие причесок. Он хорошо держится на любых прическах и с его помощью можно создать три вида укладок: беспорядочную, с заостренными концами или аккуратно уложенную. Воск для волос можно также использовать для создания дополнительного объема или изменения текстуры и внешнего вида волос.
					<br>
					<br>
					<strong>Паста для волос</strong><br>

					&nbsp;&nbsp;Бывают дни, когда не нужно никуда идти, кроме работы или учебы. Утром нет ни времени, ни настроения заморачиваться с укладкой, но хочется, чтобы волосы выглядели классно и держали форму. Лучшее, чем ты можешь воспользоваться в такой момент – пастой для волос. Паста нужна для создания непринужденных повседневных образов. Она позволяет за пару движений создать гладкую или небрежную укладку.

				</p>







			</div>
			<!--close slide-item-news-in-->

			<div class="slide-item-news-in">

				<h5 class="title-slide-news-in">
					Как ухаживать за бородой, советы от барберов М2:
				</h5>

				<div class="content-slide-news-in">

					<div class="img-slide-news-in">
						<img src="img/BY0hY_croper_ru.jpeg">
					</div>
					<div class="del">


						<div class="mob-desc-slide-in">
							<strong>Совет 1 :</strong>
							Борода — это также, как волосы на голове, за ней надо очень следить.<br>

							<strong>Совет 2 :</strong>
							Борода, как и волосы на голове, требует купания.<br>

							<strong>Совет 3 :</strong>
							Не забывайте держать в порядке не только бороду, но и усы.<br>
							<strong>Совет 4 :</strong>
							Используйте укладочное средство для бороды





						</div>




						<p class="desc-slide-news-in">
							&nbsp;&nbsp;&nbsp;Как ухаживать за бородой, советы от барберов М2:
							Борода в современном мире — это не просто густая растительность на мужском лице, но и настоящий модный аксессуар, уверяю тебя.<br>
							Хотя часть представителей сильного пола носит бороду с одной целью: избежать ежедневного бритья, а потому о внешнем виде обильно произрастающих на лице волос задумывается мало, для многих мужчин борода — это часть имиджа и возможность в полной мере проявить свою индивидуальность.





						</p>

					</div>
					<!---close del--->
				</div>
				<!---close content-slide-news-in-->

				<p class="desc-slide-news-in">

					<strong>Совет 1</strong><br>
					&nbsp;&nbsp;&nbsp;Борода — это также, как волосы на голове, за ней надо очень следить.
					В первый раз придать бороде нужную форму лучше у мастера своего дела, мастер поможет выбрать наиболее подходящий вариант. А потом уже форму можно поддерживать и в домашних условиях.<br>




					<strong>Совет 2</strong><br>
					&nbsp;&nbsp;&nbsp;Высушите бороду феном

					Борода, как и волосы на голове, требует купания.

					— По утрам, умываясь, используйте мыло с оливковым маслом для питания кожи на лице и волосяных луковиц бороды и самих волос бороды

					После мытья бороду рекомендуется подсушить феном.<br>

					<strong>Совет 3</strong><br>
					&nbsp;&nbsp;&nbsp;Помните про усы и брови

					Не забывайте держать в порядке не только бороду, но и усы.






				</p>



			</div>
			<!--close slide-item-news-in-->












		</div>
		<!--close news-slider-in-->
	</div>
	<!---lopr-->
	<div class="your-class-arrow2">
		<div class="dol">
			<span id="cp">1</span>
			<span>/6</span>
		</div>
	</div>

	<div class="counter-slider-mobile">
		<span id="cp-mob">1</span>
		<img src="img/Line.svg">
		<span class="dad">6</span>
		</span>
	</div>


</div>
<!---close wrapper-sixth-content-slider-->
<!-- -->




<?php

get_footer();
