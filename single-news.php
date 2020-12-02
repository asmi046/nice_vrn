<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
			</div>
			<div class="container">
		<?php
		while ( have_posts() ) :
			the_post();?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title section-title page-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta">
							<?php
							//auto_posted_on();
							// auto_posted_by();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->


				<div class="entry-content">

					<?php
					echo get_the_post_thumbnail();
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'auto' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'auto' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php auto_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-<?php the_ID(); ?> -->
		<?php endwhile; // End of the loop.
			$args = array(
				'prev_text' => 'Предыдущая',
				'next_text' => 'Следующая',
			);
			the_post_navigation($args);
		?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
