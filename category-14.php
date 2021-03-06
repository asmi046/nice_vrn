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
			<div class="cat-header__wrap">
				
			<?php $args = array(
				'parent' => 14,
				'hide_empty' => 0
			);
			$categories = get_categories($args);
			if($categories):?>
				<div class="cat-wrap">
					<?php foreach($categories as $cat):?>
					<div class="cat-item">
						<a href="<?php echo get_category_link( $cat->term_id );?>"><?php echo $cat->name;?></a>
					</div>
					<?php endforeach;?>
				</div>
				<div class="cat-video__instr">
					<a href="<?php echo get_category_link(25);?>" class="cat-video__icon"><div class="tap"></div></a>
					<a href="<?php echo get_category_link(25);?>" class="cat-video__text">Видеоинструкции для оборудования Nice</a>
				</div>
			</div>
			<div class="cert-wrapper">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();?>
				<?php get_template_part('template-parts/instr-item');?>
			<?php endwhile;?>
			</div>
			<?php 
			endif;
			the_posts_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();