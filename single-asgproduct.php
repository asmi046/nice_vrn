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
		<main id="main" class="site-main" itemscope itemtype="http://schema.org/Product">
		<?php
		while ( have_posts() ) :
			the_post();?>
			  <section class="content-page">
			    <div class="container">
			      <?php
					if ( function_exists('yoast_breadcrumb') ) {
					  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					}
					?>
			      <!-- <h1 class="section-title tt-n"><?php the_title();?></h1> -->
			      <div class="product-wrapper">
			        <div class="product-images">
			        	<div class="slider-for">
				          <a href="<?php the_post_thumbnail_url();?>" itemprop="image" data-lightbox="prod">
				            <img class="product-images__img" src="<?php the_post_thumbnail_url();?>" alt="">
				          </a>
				          <?php if(carbon_get_the_post_meta('as_gallery_img_1')):?>
					          <a href="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_1'), 'full')[0];?>" data-lightbox="prod">
					            <img class="product-images__img" src="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_1'), 'full')[0];?>" alt="">
					          </a>
				          <?php endif;?>
				          <?php if(carbon_get_the_post_meta('as_gallery_img_2')):?>
					          <a href="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_2'), 'full')[0];?>" data-lightbox="prod">
					            <img class="product-images__img" src="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_2'), 'full')[0];?>" alt="">
					          </a>
				          <?php endif;?>
				          <?php if(carbon_get_the_post_meta('as_gallery_img_3')):?>
					          <a href="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_3'), 'full')[0];?>" data-lightbox="prod">
					            <img class="product-images__img" src="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_3'), 'full')[0];?>" alt="">
					          </a>
				          <?php endif;?>
				          <?php if(carbon_get_the_post_meta('as_gallery_img_4')):?>
					          <a href="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_4'), 'full')[0];?>" data-lightbox="prod">
					            <img class="product-images__img" src="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_4'), 'full')[0];?>" alt="">
					          </a>
				          <?php endif;?>
			        	</div>
			        	<div class="slider-nav">
			        		<div class="slider-nav__item" style="background-image: url(<?php the_post_thumbnail_url();?>);"></div>
				          <?php if(carbon_get_the_post_meta('as_gallery_img_1')):?>
			        		<div class="slider-nav__item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_1'), 'full')[0];?>);"></div>
				          <?php endif;?>
				          <?php if(carbon_get_the_post_meta('as_gallery_img_2')):?>
			        		<div class="slider-nav__item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_2'), 'full')[0];?>);"></div>
				          <?php endif;?>
				          <?php if(carbon_get_the_post_meta('as_gallery_img_3')):?>
			        		<div class="slider-nav__item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_3'), 'full')[0];?>);"></div>
				          <?php endif;?>
				          <?php if(carbon_get_the_post_meta('as_gallery_img_4')):?>
			        		<div class="slider-nav__item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_4'), 'full')[0];?>);"></div>
				          <?php endif;?>
			        	</div>
			        </div>
			        <div class="product-content">
			          <h1 class="product-content__title" itemprop="name"><?php echo carbon_get_the_post_meta('product_subtitle')?></h1>
			          <?php if(!carbon_get_the_post_meta('is_available')):?>
				          <div class="product-in-stock">В наличии</div>
				      <?php endif;?>
				      <?php if(!carbon_get_the_post_meta('is_delivery')):
				      	$delivery = 'Бесплатная доставка';
				      	if(carbon_get_the_post_meta('text_delivery')){
				      		$delivery = carbon_get_the_post_meta('text_delivery');
				      	}?>
				          <div class="free-delivery"><?php echo $delivery;?></div>
				      <?php endif;?>
			          <div class="product-price__wrapper" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
		          	    <meta itemprop="price" content="<?php echo carbon_get_the_post_meta('as_product_price');?>">
					    <meta itemprop="priceCurrency" content="RUB">
					    <?php if(carbon_get_the_post_meta('as_product_price')):?>
				            <div class="product-price__reg"><?php echo carbon_get_the_post_meta('as_product_price');?> руб</div>
				        <?php endif;?>
			          </div>
			          <div class="product-input__wrapper">
					    <?php if(carbon_get_the_post_meta('as_product_price')):?>
				            <div class="qty-wrapper">
				              <div class="qty-inc qty-minus">-</div>
				              <input type="number" id="qty-product" name="qty-product" value="1">
				              <div class="qty-inc qty-plus">+</div>
				            </div>
				            <a href="#" class="button add-to-cart toBascetInPage" data-postid="<?php the_ID();?>" data-groupid="<?php echo carbon_get_the_post_meta('offer_group_id');?>" data-offertype="<?php echo carbon_get_the_post_meta('offer_type');?>" data-offersku="<?php echo carbon_get_the_post_meta('as_sku');?>" data-offerid="<?php echo carbon_get_the_post_meta('as_sku');?>" data-src="<?php echo get_the_post_thumbnail_url()?>" data-price="<?php echo carbon_get_the_post_meta('as_product_price');?>" data-weight="<?php echo carbon_get_the_post_meta('as_product_weight');?>" data-package="<?php echo carbon_get_the_post_meta('as_product_package');?>"><span>В корзину</span></a>
				         <?php else:?>
				         	<a href="#" class="button  link-buy-1" data-name="<?php the_title();?>" data-postid="<?php the_ID();?>" data-groupid="<?php echo carbon_get_the_post_meta('offer_group_id');?>" data-offertype="<?php echo carbon_get_the_post_meta('offer_type');?>" data-offersku="<?php echo carbon_get_the_post_meta('as_sku');?>" data-offerid="<?php echo carbon_get_the_post_meta('as_sku');?>" data-src="<?php echo get_the_post_thumbnail_url()?>" data-price="<?php echo carbon_get_the_post_meta('as_product_price');?>" data-weight="<?php echo carbon_get_the_post_meta('as_product_weight');?>" data-package="<?php echo carbon_get_the_post_meta('as_product_package');?>">Под заказ</a>
				      <?php endif;?>
				          </div>
			          <?php the_excerpt();?>
			        </div>
			      </div>
			      <div class="product-tabs__wrapper">
			        <div class="tabs">

		        	<?php if(carbon_get_the_post_meta('as_short_derscr')):?>
			          <span class="tab active">Описание</span>
			        <?php endif;?>
		        	<?php if(carbon_get_the_post_meta('as_char')):?>
			          <span class="tab">Характеристики</span>
			        <?php endif;?>
			        </div>
			        <div class="tab_content">
			        	<?php if(carbon_get_the_post_meta('as_short_derscr')):?>
				          <div class="tab_item" itemprop="description">
				            <?php echo wpautop(carbon_get_the_post_meta('as_short_derscr'));?>
				          </div>
				        <?php endif;?>
			        	<?php if(carbon_get_the_post_meta('as_char')):?>
				          <div class="tab_item">
				            <?php echo wpautop(carbon_get_the_post_meta('as_char'));?>
				          </div>
				        <?php endif;?>
			        </div>
			      </div>
			    </div>
			  </section>
		<?php endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
