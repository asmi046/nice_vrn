  <section class="news-events">
    <div class="container">
      <h2 class="section-title">Новости и события<br> нашей компании</h2>
        <?php 
          $args = array(
            'posts_per_page' => 3,
            'cat' => 2
          );
          $query = new WP_Query($args);
          if($query->have_posts()):
        ?>
      <div class="events-wrap">
          <?php while($query->have_posts()):
            $query->the_post();
            get_template_part('template-parts/events-item');
          endwhile; wp_reset_postdata();?>
      </div>
    <?php endif;?>
    
    <div class="button-wrap">
      <a href="<?php echo get_category_link(2);?>" class="product-slider__link">Читать все новости</a>
    </div>
    </div>
  </section>