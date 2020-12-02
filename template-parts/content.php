<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package automatic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			if(carbon_get_the_post_meta('cert_link')):
				the_title( '<h1 class="entry-title">Инструкция для ', '</h1>' );
			else:
				the_title( '<h1 class="entry-title">', '</h1>' );
			endif;
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				// auto_posted_on();
				// auto_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'auto' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		if(in_category(12)):
			get_template_part('template-parts/work-modal-section');
?>

		<?php endif;

		if(carbon_get_the_post_meta('as_video_instr_video')):
			$arr_link = explode('=', carbon_get_the_post_meta('as_video_instr_video'))?>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $arr_link[1]?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<?php endif;
		if(carbon_get_the_post_meta('cert_link')):
			?>
			<a href="<?php echo carbon_get_the_post_meta('cert_link');?>" target="_blank" class="cert-item cert-item__single">
				<div class="cert-item__photo" style="background-image: url(<?php echo the_post_thumbnail_url();?>)"></div>
				<div class="cert-item__content">
					<div class="cert-item__title"><?php echo carbon_get_the_post_meta('cert_name');?></div>
					<div><?php echo carbon_get_the_post_meta('cert_link_text');?></div>
				</div>
			</a>
			<?
		endif;
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'auto' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //auto_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
