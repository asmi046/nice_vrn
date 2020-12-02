<a href="<?php echo get_permalink();?>" class="events-item">
  <div class="events-item__photo" style="background-image: url(<?php the_post_thumbnail_url();?>)"></div>
  <div class="events-item__title"><?php the_title();?></div>
  <div class="events-item__excerpt">
    <?php the_excerpt();?>
  </div>
  <span class="events-item__date"><?php echo get_the_date('d.m.Y');?></span>
</a>