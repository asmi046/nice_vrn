<?php
/**
 */
$current_cat_ID = get_query_var('cat');
$active = '';
get_header();
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
					<?php //the_archive_title( '<h1 class="page-title section-title single-product__title">', '</h1>' );?>
					<h1 class="page-title section-title single-product__title">Все продукты</h1>
				</header><!-- .page-header -->
				<div class="category-descr">
					<div class="category-descr__slider">
						<div class="category-descr__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/sale-2.jpg);"></div>
						<div class="category-descr__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/photo_2020-03-12_16-49-57.jpg);"></div>
						<div class="category-descr__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/photo_2020-03-12_16-50-02.jpg);"></div>
						<div class="category-descr__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/photo_2020-03-12_16-50-06.jpg);"></div>
						<div class="category-descr__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/photo_2020-03-12_16-50-09.jpg);"></div>
					</div>
					<div class="category-descr__content">
						<div class="category-descr__text">
							ООО «Н-Автоматик» является официальным дистрибьютором компании Nice в Центрально-Черноземном регионе. Наша компания основана в 2016г., и является молодой динамично развивающейся. Нашими партнерами являются торговые и монтажные организации не только Воронежской области, а также Белгородской, Курской, Липецкой. Предлагаемая нами продукция является высококачественной и проверена в различных регионах России. Специалисты нашей компании подберут автоматические системы под Ваши требования.
						</div>
						<!-- <div class="button-wrap">
							<a href="#catalog-wrapper" class="product-slider__link">Наш ассортимент</a>
						</div> -->
					</div>
				</div>
				<?php $args = array(
					'taxonomy' => 'asgproductcat',
					'parent' => 0,
					'hide_empty' => 0,
					'exclude'      => 3,
				);
				$categories = get_categories($args);?>

				      <div class="catalog-wrapper" id="catalog-wrapper">
					<?php foreach($categories as $cat):
						$id = $cat->term_id;?>
					        <a href="<?php echo get_category_link( $id );?>" class="catalog-item">
					          <div class="catalog-item__photo" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_term_meta($id, 'term_product_photo'), 'full')[0];?>)"></div>
					          <div class="catalog-item__title"><?php echo $cat->name;?></div>
					          <div class="catalog-item__descr"><?php echo term_description($cat->term_id, 'asgproductcat');?></div>
					          <div class="catalog-item__link">
					          	<div class="catalog-item__arrow"></div>
					          	<div class="catalog-item__text">Смотреть все</div>
					          </div>
					        </a>
					    <?php endforeach;?>
				      </div>
				<!-- <div class="products-wrapper">
					<div class="container">
					<?php while(have_posts()):
						the_post();
						//get_template_part('template-parts/product', 'loop');
						?>
					<?php endwhile;?>
					</div>
				</div> -->
				<div class="pagination">
					<?php //the_posts_pagination(array('prev_text' => '«', 'next_text' => '»'));?>
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