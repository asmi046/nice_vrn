<?php
/**
 */

get_header();
$term = get_queried_object();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container catalog-page">
			<?php get_template_part('template-parts/sidebar', 'cat');?>
			<div class="products">
				<header class="page-header">
					<?php
						if ( function_exists('yoast_breadcrumb') ) {
						  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						}
					?>
					<?php the_archive_title( '<h1 class="page-title section-title single-product__title">', '</h1>' );?>
				</header><!-- .page-header -->

				<div class="category-descr">
					<?php ?>
					<div class="category-descr__photo" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_term_meta($term->term_id,'term_product_photo'), 'full')[0];?>);"></div>
					<div class="category-descr__content">
						<div class="category-descr__text">
							<?php echo term_description($term->term_id, 'asgproductcat');?>
						</div>
						<div class="button-wrap">
							<a href="#" class="product-slider__link">Наш ассортимент</a>
						</div>
					</div>
				</div>
				<div class="products-wrapper">
					<div class="container">
					<?php 
		            include("sortBlk.php");
		            while(have_posts()):
						the_post();
						get_template_part('template-parts/product-loop-new');
						?>
					<?php endwhile;?>
					</div>
				</div>
				<div class="pagination">
					<?php the_posts_pagination(array('prev_text' => '«', 'next_text' => '»'));?>
				</div>
			</div>
		</div>
		<?php get_template_part('template-parts/main-bnr');?>
	    <?php get_template_part('template-parts/product-slider');?>
	    <?php get_template_part('template-parts/news-events');?>
	</main>
</div>

<?php
get_footer();