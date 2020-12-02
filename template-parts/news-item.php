<div class="news-item">
  <a href="<?php echo get_permalink();?>" class="news-item__img" style="background-image: url(<?php the_post_thumbnail_url();?>)"></a>
  <div class="news-item__title"><?php the_title();?></div>
  <a href="<?php echo get_permalink();?>" class="button">Подробнее</a>
</div>