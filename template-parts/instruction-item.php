
<div class="cert-item">
	<a href="<?php echo carbon_get_the_post_meta('as_video_instr_video');?>"  class="cert-item__photo popup-youtube" style="background-image: url(<?php echo the_post_thumbnail_url();?>)"></a>
	<div class="cert-item__content">
		<a href="<?php echo carbon_get_the_post_meta('as_video_instr_video');?>" class="cert-item__title popup-youtube"><?php the_title();?></a>
		<div><?php the_excerpt();?></div>
		<a href="<?php echo get_permalink();?>" class="more-link">Подробнее...</a>
	</div>
</div>