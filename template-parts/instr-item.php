
<div class="cert-item">
	<a href="<?php echo carbon_get_the_post_meta('cert_link');?>" target="_blank" class="cert-item__photo" style="background-image: url(<?php echo the_post_thumbnail_url();?>)"></a>
	<div class="cert-item__content">
		<div class="cert-item__title"><?php echo carbon_get_the_post_meta('cert_name');?></div>
		<div class="pdf-size"><?php echo carbon_get_the_post_meta('cert_link_text');?></div>
		<a href="<?php echo get_permalink();?>" class="more-link">Подробнее</a>
	</div>
</div>