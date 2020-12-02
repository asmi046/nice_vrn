<?php 
/*
* Template Name: Контакты
*/
get_header();
?>

	<div id="primary" class="content-area" itemscope itemtype="http://schema.org/Organization">
		<main id="main" class="site-main">
			<div class="container">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title section-title" itemprop="name">', '</h1>' ); ?>
				</header><!-- .entry-header -->
				<h2><?php echo carbon_get_theme_option('as_company'); ?></h2>
				<p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><strong>Юридический адрес:</strong> <?php echo carbon_get_theme_option('as_address');?></p>
				<p><strong>Фактический адрес:</strong> <?php echo carbon_get_theme_option('as_address_fact');?></p>
				<p><strong>ИНН:</strong> <?php echo carbon_get_theme_option('as_inn');?></p>
				<p><strong>КПП:</strong> <?php echo carbon_get_theme_option('as_kpp');?></p>
				<p><strong>ОРГН:</strong> <?php echo carbon_get_theme_option('as_orgn');?></p>
				<p><strong>р/с:</strong> <?php echo carbon_get_theme_option('as_rs');?></p>
				<p><strong>к/с:</strong> <?php echo carbon_get_theme_option('as_ks');?></p>
				<p><strong>email:</strong> <span itemprop="email"><?php echo carbon_get_theme_option('as_email');?></span></p>
				<p><strong>тел:</strong> <a href="tel:<?php echo str_replace(array('(', ')', ' ', '-'), '', carbon_get_theme_option('as_phone_2'))?>" itemprop="telephone"><?php echo carbon_get_theme_option('as_phone_2');?></a>, <a href="tel:<?php echo str_replace(array('(', ')', ' ', '-'), '', carbon_get_theme_option('as_phone'))?>" itemprop="telephone"><?php echo carbon_get_theme_option('as_phone');?></a>, <a href="tel:<?php echo str_replace(array('(', ')', ' ', '-'), '', carbon_get_theme_option('as_phone'))?>"><?php echo carbon_get_theme_option('as_phone_4');?></a> </p>
				<p><strong>Режим работы:</strong> <?php echo carbon_get_theme_option('as_schedule');?></p>
				<p><strong>Генеральный директор:</strong> <?php echo carbon_get_theme_option('as_director');?></p>
				
				<div id = "mapLine" class = "mapLine"></div>
					 <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
				<script>
				  ymaps.ready(init);
				  function init () {
					
					  var myMap = new ymaps.Map("mapLine", {
							  center: <?php echo carbon_get_theme_option('mkad_map_point') ?>,
							  zoom: 14,
							  controls: ['zoomControl']
						  }),
						myPlacemarkAdr = new ymaps.Placemark(<?php echo carbon_get_theme_option('mkad_map_point') ?>, {
							  iconContent: '',
							  balloonContent: 'Наш адрес: <b><?php echo carbon_get_theme_option('mkad_address') ?></b><br/>Телефон: <b> <?php echo carbon_get_theme_option('mkad_phone') ?>',
							  hintContent: 'Наш адрес: <b><?php echo carbon_get_theme_option('mkad_address') ?></b><br/>Телефон: <b> <?php echo carbon_get_theme_option('mkad_phone') ?>',
						  }, {
							iconLayout: 'default#image',
							iconImageHref: '<?php bloginfo("template_url"); ?>/img/map.svg',
							iconImageSize: [30, 54],
							iconImageOffset: [-15, -54]
						  });
						  
						  myMap.geoObjects.add(myPlacemarkAdr);
						  
						
						
						
					myMap.behaviors.disable('scrollZoom');
				  }
	</script>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();