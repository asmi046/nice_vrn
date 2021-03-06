<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package automatic
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="container">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
			?>
		</div>
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="container">
					<h1 class="page-title search-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Результаты для: %s', 'auto' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</div>
			</header><!-- .page-header -->
			<div class="container">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();?>
			</div>
		<?php else :?>

			<?php get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
