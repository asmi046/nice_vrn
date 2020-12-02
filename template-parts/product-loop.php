<div class="products-loop">
  <a href="<?php echo get_permalink();?>" class="products-loop__img" style="background-image: url(<?php the_post_thumbnail_url();?>)"></a>
  <div class="products-loop__title"><?php the_title();?></div>
  <div class="products-loop__price">
    <?php if(carbon_get_the_post_meta('as_product_old_price')):?>
    <span class="products-loop__price-old"><?php echo carbon_get_the_post_meta('as_product_old_price');?> ₽</span>
  <?php endif;?>
    <span class="products-loop__price-reg"><?php echo carbon_get_the_post_meta('as_product_price');?> ₽</span>
  </div>
  <?php //if(is_home() || is_front_page()):?>
  <!-- <a href="<?php echo get_permalink();?>" class="products-loop__link">Подробнее</a> -->
  <?php //else:?>
  <div class="products-loop__btn">
    <a href="<?php echo get_permalink();?>" class="products-loop__link">Подробнее</a>
    <a href="#" class="products-loop__add-to-cart link-buy" data-postid="<?php the_ID();?>" data-groupid="<?php echo carbon_get_the_post_meta('offer_group_id');?>" data-offertype="<?php echo carbon_get_the_post_meta('offer_type');?>" data-offersku="<?php echo carbon_get_the_post_meta('as_sku');?>" data-offerid="<?php echo carbon_get_the_post_meta('as_sku');?>" data-pricereg="<?php echo carbon_get_the_post_meta('as_product_price');?>" data-src="<?php echo get_the_post_thumbnail_url()?>" data-weight="<?php echo carbon_get_the_post_meta('as_product_weight');?>" data-package="<?php echo carbon_get_the_post_meta('as_product_package');?>"></a>
  </div>
  <?php //endif;?>
</div>