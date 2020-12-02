<?php 
/*
* Template Name: Сертификаты
*/
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title section-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
			<?php
			while ( have_posts() ) :
				the_post();

				the_content();

			endwhile; // End of the loop.?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();