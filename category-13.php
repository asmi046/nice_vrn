<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package automatic
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
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title section-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="cert-wrapper">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();?>
				<?php get_template_part('template-parts/cert-item');?>
			<?php endwhile;?>
			</div>
			<?php the_posts_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();