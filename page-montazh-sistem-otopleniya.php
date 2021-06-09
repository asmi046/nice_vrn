<?php 
/*
* Template Name: Шаблон страницы  Монтаж систем отопления
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

		<section class="about-heating" style="background: url(<?php bloginfo('template_url');?>/img/about-heating-bg.jpg); background-position: top center; background-size: cover;"> 
			<div class="container">
					<h1>
						Монтаж систем отопления <br>
						и водоснабжения <br>
						в Воронеже <br>
					</h1>
					<p>
						Установка отопительных систем, водоснабжение <br> 
						для производственных и складских помещений, <br> 
						а так же для частных домовладений
					</p>
			</div>
			<div class="nuar_blk"></div>
		</section>

		<section class="heating-services"> 
			<div class="container">
			<h2>НАШИ УСЛУГИ:</h2>

			<div class="heating-services__row">

				<div class="heating-card">
					<div class="heating-card__img">
						<img src="<?php echo get_template_directory_uri();?>/img/heating-card-01.jpg" alt="">
					</div>
					<div class="heating-card__text-block">
						<h4>
							Оборудование <br>
							котельных
						</h4>
						<p>
							Подбор оборудования в 
							котельную вашего помещения, 
							обеспечим оптимальную конфигурацию
						</p>
						<a href="#" class="heating-card__btn">
							Заказать
						</a>
					</div>
				</div>

				<div class="heating-card">
					<div class="heating-card__img">
						<img src="<?php echo get_template_directory_uri();?>/img/heating-card-02.jpg" alt="">
					</div>
					<div class="heating-card__text-block">
						<h4>
							Разводка систем отопления <br>
							по помещению
						</h4>
						<p>
							Профессионально и аккуратно 
							выполним установку радиаторов <br>
							отопления.  Прокладка труб
						</p>
						<a href="#" class="heating-card__btn">
							Заказать
						</a>
					</div>
				</div>

				<div class="heating-card">
					<div class="heating-card__img">
						<img src="<?php echo get_template_directory_uri();?>/img/heating-card-03.jpg" alt="">
					</div>
					<div class="heating-card__text-block">
						<h4>
							Монтаж теплого <br>
							пола
						</h4>
						<p>
							Укладка систем теплого пола с соблюдением всех
							норм и правил
						</p>
						<a href="#" class="heating-card__btn">
							Заказать
						</a>
					</div>
				</div>

				<div class="heating-card">
					<div class="heating-card__img">
						<img src="<?php echo get_template_directory_uri();?>/img/heating-card-04.jpg" alt="">
					</div>
					<div class="heating-card__text-block">
						<h4>
							Установка систем <br>
							очистки воды
						</h4>
						<p>
							Установка систем очистки 
							водопроводной воды различной 
							пропускной способности 
						</p>
						<a href="#" class="heating-card__btn">
							Заказать
						</a>
					</div>
				</div>

				<div class="heating-card">
					<div class="heating-card__img">
						<img src="<?php echo get_template_directory_uri();?>/img/heating-card-05.jpg" alt="">
					</div>
					<div class="heating-card__text-block">
						<h4>
							Проектирование и <br>
							прокладка канализации

						</h4>
						<p>
							Организация водоотведения <br>
							на объектах различной <br>
							сложности
						</p>
						<a href="#" class="heating-card__btn">
							Заказать
						</a>
					</div>
				</div>

			</div>

			</div>
		</section>

		<section class="heating-info" style="background: url(<?php bloginfo('template_url');?>/img/heating-info-bg.jpg); background-position: top center; background-size: cover;"> 
			<div class="container">
				<h2>Н-автоматика</h2>
				<p>Надежные системы <br>
					 отопления и водоснабжения <br>
					 в Воронеже
				</p>
				<div class="logo-bnr" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo'), 'full')[0];?>)"></div>
			</div>
			<div class="nuar_blk"></div>
		</section>

		<?php get_template_part('template-parts/heating-advantages-block');?>

    <section class="heating-galery"> 
			<div class="container">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h2>ФОТО НАШИХ РАБОТ</h2>
					<?php the_content();?>
					<?php endwhile;?>
				<?php endif; ?> 
			</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();