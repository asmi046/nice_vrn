<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package automatic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('search-item'); ?>>
	<div class="search-item__photo" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);"></div>
	<div class="search-item__content">
		<h2 class="search-item__title"><?php the_title();?></h2>
		<?php $category = get_the_category();?>
		<div class="search-item__category"><?php echo $category[0]->name;?></div>
		<div class="search-item__excerpt"><?php the_excerpt();?></div>
		<a href="<?php echo get_permalink();?>" class="search-item__more-link button">Подробнее...</a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
