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

			<div class="work-button-block">
			<ul class = "work-button-block"> <?php wp_list_categories( array('child_of' => 12, 'hide_empty'=> 0, 'title_li' => '') ); ?> </ul>
				<!-- <button class="work-button-block__btn button">Автоматические ворота</button>
				<button class="work-button-block__btn button">Бетонные полы</button>
				<button class="work-button-block__btn button">Умный дом</button> -->
			</div>

			<div class="news-wrapper ">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();?>

				<div class="news-item">
				  <a href="<?php echo get_permalink();?>" class="news-item__img news-item__img-work" style="background-image: url(<?php the_post_thumbnail_url();?>)"></a>
				  <div class="news-item__title"><?php the_title();?></div>
				  <div class="news-item__text"><?php echo the_excerpt();?></div>
				  <div class="btn-wrap">
					  <a href="<?php echo get_permalink();?>" class="button">Подробнее</a>
					  <a href="#" class="button work-modal" data-title="<?php the_title();?>">Узнать цену</a>
				  	
				  </div>
				</div>

			<?php endwhile;?>
			</div>
			<?php the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();