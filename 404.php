<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package automatic
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">Страница не найдена</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>Такой страницы не существует. Попробуйте вернуться на <a href="<?php echo home_url('/');?>">на главную.</a></p>

					<?php
					// get_search_form();

					// the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<!-- <div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'auto' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div> --><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$auto_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'auto' ), convert_smilies( ':)' ) ) . '</p>';
					// the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$auto_archive_content" );

					// the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
