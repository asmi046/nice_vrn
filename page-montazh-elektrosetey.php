<?php 
/*
* Template Name: Шаблон страницы  Монтаж электросетей
*/
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<!-- <div class="container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );   
			}
			?>
		</div>   -->

		<section class="about-electrician about-heating" style="background: url(<?php bloginfo('template_url');?>/img/about-electrician-bg.jpg); background-position: top center; background-size: cover;"> 
			<div class="container">
					<h1>
						Монтаж Электросетей <br>
						любой сложности <br>
						В ВОРОНЕЖЕ <br>
					</h1>
					<p>
						Монтаж и замена электропроводки <br>
						в промышленных и производственных <br>
						помещениях, складах, коттеджах
					</p>
			</div>
			<div class="nuar_blk"></div>
		</section>

		<section class="electrician-services heating-services"> 
			<div class="container">
			<h2>О НАС:</h2>
			<P>
				Мы предлагаем услуги по монтажу электрических сетей для промышленных, складских, производственных помещений а так же для коттеджей и частных домовладений. 
				В нашей команде имеется постоянный штат квалифицированных электриков имеющих все необходимые допуски и сертификаты. Все работы проводятся согласно ГОСТ 
				и СНИП по окончании работ Вы получите полный пакет документации на проведенный монтаж. 
			</P>
			<P>
				С нами удобно, помимо постоянного штата квалифицированных сотрудников мы имеем полный парк всех необходимых инструментов и запас расходных материалов. 
				Сотрудничество оформляется официальным договорам с соблюдением всех норм законодательства РФ. 
			</P>

			<h2 class="electrician-services__title">НАШИ УСЛУГИ:</h2>

			<div class="electrician-services__row heating-services__row">

				<div class="heating-card">
					<div class="heating-card__img">
						<img src="<?php echo get_template_directory_uri();?>/img/electrician-card-01.jpg" alt="">
					</div>
					<div class="heating-card__text-block">
						<h4>
							Монтаж и замена <br>
							электропроводки
						</h4>
						<p>
							Полный спектр работ по замене <br>
							электропроводки от диагностики <br>
							и проектирования до <br>
							монтажных работ
						</p>
						<a href="#" class="heating-card__btn">
							Заказать
						</a>
					</div>
				</div>

				<div class="heating-card">
					<div class="heating-card__img">
						<img src="<?php echo get_template_directory_uri();?>/img/electrician-card-02.jpg" alt="">
					</div>
					<div class="heating-card__text-block">
						<h4>
							Сборка и монтаж <br>
							электрощитов
						</h4>
						<p>
							Проведеи монтаж электрощитов <br>
							любой сложности для любых <br>
							целей. Проектирование и подбор <br>
							оборудования.
						</p>
						<a href="#" class="heating-card__btn">
							Заказать
						</a>
					</div>
				</div>

				<div class="heating-card">
					<div class="heating-card__img">
						<img src="<?php echo get_template_directory_uri();?>/img/electrician-card-03.jpg" alt="">
					</div>
					<div class="heating-card__text-block">
						<h4>
							Подключение электричества <br>
							для всех типов зданий
						</h4>
						<p>
							Проектирование ввода в здание <br>
							и монтаж необходимого <br>
							оборудования с последующим <br>
							оформлением
						</p>
						<a href="#" class="heating-card__btn">
							Заказать
						</a>
					</div>
				</div>

				<div class="heating-card">
					<div class="heating-card__img">
						<img src="<?php echo get_template_directory_uri();?>/img/electrician-card-04.jpg" alt="">
					</div>
					<div class="heating-card__text-block">
						<h4>
							Монтаж систем  <br>
							освещения
						</h4>
						<p>
							Монтаж освещения для <br>
							промышленных объектов <br>
							а так же для частных домов <br>
							и коттеджей
						</p>
						<a href="#" class="heating-card__btn">
							Заказать
						</a>
					</div>
				</div>

				<div class="heating-card">
					<div class="heating-card__img">
						<img src="<?php echo get_template_directory_uri();?>/img/electrician-card-05.jpg" alt="">
					</div>
					<div class="heating-card__text-block">
						<h4>
							Монтаж контура <br>
							зазаемления
						</h4>
						<p>
							Монтаж и работы по установке <br>
							контуров заземления для сетей <br>
							любой сложности
						</p>
						<a href="#" class="heating-card__btn">
							Заказать
						</a>
					</div>
				</div>

				<div class="heating-card">
					<div class="heating-card__img">
						<img src="<?php echo get_template_directory_uri();?>/img/electrician-card-06.jpg" alt="">
					</div>
					<div class="heating-card__text-block">
						<h4>
							Монтаж щитов с <br>
							приборами учета
						</h4>
						<p>
							Спроектируем и установим <br>
							вводные щиты с приборами <br>
							учета электроэнергии 
						</p>
						<a href="#" class="heating-card__btn">
							Заказать
						</a>
					</div>
				</div>

			</div>

			</div>
		</section>

		<section class="electrician-info heating-info" style="background: url(<?php bloginfo('template_url');?>/img/electrician-info-bg.jpg); background-position: center; background-size: cover;"> 
			<div class="container">
				<h2>Н-автоматика</h2>
				<p>
					Монтаж промышленных <br>
					электросетей в Воронеже <br>
					по выгодным ценам
				</p>
				<div class="logo-bnr" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo'), 'full')[0];?>)"></div>
			</div>
			<div class="nuar_blk"></div>
		</section>

		<section class="heating-advantages advantages">
			<div class="container">
				<h2>КАК МЫ РАБОТАЕМ:</h2>
				<div class="advantages__column d-flex">

					<div class="advantages__item piggy-bank">
						<h3>
							Мы предлагаем только <br>
							Выгодные цены
						</h3>
						<p>
							Для наших клиентов мы стараемся 
							сохранять баланс цены и качества и
							предлагать разумные цены на наши
							услуги
						</p>
					</div>
					<div class="advantages__item contract-icon">
						<h3>Мы работаем строго <br>
							по смете		
						</h3>
						<p>
							Большой опыт работы позволяет 
							нам предусмотреть все нюансы и 
							рассчитать стоимость работ на 
							объекте максимально точно 
						</p>
					</div>

					<div class="advantages__item timing-icon">
						<h3>
							Все работы производятся <br>
							точно в срок
						</h3>
						<p>
							Мы на нарушаем установленные 
							договором сроки. Все проектировочные 
							и монтажные работы будут выполнены 
							четко в срок
						</p>
					</div>

					<div class="advantages__item warrant-icon">
						<h3>
							Мы гарантируем <br>
							качество наших работ 
						</h3>
						<p>
							Мы используем исключительно 
							качественные материалы и 
							проводим все работы согласно 
							стандартам
						</p>
					</div>

				</div>
			</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();