
<a href="<?php echo carbon_get_the_post_meta('cert_link');?>" target="_blank" class="cert-item">
	<div class="cert-item__photo" style="background-image: url(<?php echo the_post_thumbnail_url();?>)"></div>
	<div class="cert-item__content">
		<div class="cert-item__title"><?php echo carbon_get_the_post_meta('cert_name');?></div>
		<div><?php echo carbon_get_the_post_meta('cert_link_text');?></div>
		<div class="more-button">Подробнее</div>
	</div>
</a>