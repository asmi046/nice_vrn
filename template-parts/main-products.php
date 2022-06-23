    <section class="main-products">
      <div class="container">
        <h2 class="section-title">Интернет магазин <br>Автоматики</h2>
        <?
          $priceFile = carbon_get_theme_option('price_file');
        ?>
        <? if ($priceFile) {?>
          <div class="file-block__item">
						<a href="<?echo wp_get_attachment_url($priceFile);?>" download class="file-block__item-icon"></a>
						<!-- <a href="%s" download><div class="file-block__item-text"></div></a> -->
					</div>
        <?}?>
        <?php 
          $args = array(
            'posts_per_page' => 4,
			  'orderby' => "rand",
            'post_type' => 'asgproduct', 
            /*
			  'tax_query' => array(
              array(
                'taxonomy' => 'asgproductcat',
                'field' => 'id',
                'terms' => array(3)
              )
            )
			*/
          );
          $query = new WP_Query($args);
          if($query->have_posts()):?>

        <div class="products-wrapper">
           <?php while($query->have_posts()):
              $query->the_post();?>
              <?php get_template_part('template-parts/product-loop-new');?>
            <?php endwhile; wp_reset_postdata();?>
      </div>
        <?php endif;?>
        <div class="button-wrap">
          <a href="<?php echo get_post_type_archive_link('asgproduct')?>" class="product-slider__link">Перейти в магазин</a>
        </div>
      </div>
    </section>