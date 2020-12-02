<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: Видео-инструкции
 * Template Post Type: post, page,
 * @package automatic
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
			<div class="container">
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
					  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					}
				?>
			</div>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				//comments_template();
			endif;

		endwhile; // End of the loop.
		?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
