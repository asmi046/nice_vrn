<?php 
/*
* Template Name: Шаблон страницы Бетонные полы и железобетонные конструкции
*/
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); 
			}
			?>

			<h1><?php the_title();?></h1>

			<div class="floors-constract">

				<a href="<?php echo get_permalink(3089);?>"class="floors-constract__card">
					<div class="floors-constract__card-img">
						<img src="<?php echo get_template_directory_uri();?>/img/floors.jpg" alt="Бетонные и полимерные полы для промышленных помещений">
					</div>
					<div class="floors-constract__card-descp">
						<h3 class="floors-constract__card-descp-title">Бетонные и полимерные полы для промышленных помещений</h3>
					</div>
				</a>

				<a href="<?php echo get_permalink(3161);?>" class="floors-constract__card">
					<div class="floors-constract__card-img">
						<img src="<?php echo get_template_directory_uri();?>/img/constract.jpg" alt="Железобетонные конструкции">
					</div>
					<div class="floors-constract__card-descp">
						<h3 class="floors-constract__card-descp-title">Железобетонные конструкции</h3>
					</div>
				</a>

			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();