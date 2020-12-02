<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: О компании
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package automatic
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
					  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					}
				?>
			</div>
		<?php
		while ( have_posts() ) :
			the_post();?>
			<div class="container">
			    <section class="about">
			      <div class="container">
			      	<?php 
			      		$arr_slider = carbon_get_the_post_meta('about_slider');
			      		if($arr_slider):
			      	?>
					<div class="category-descr__slider">
						<?php foreach($arr_slider as $slide):?>
							<div class="category-descr__photo" style="background-image: url(<?php echo wp_get_attachment_image_src($slide['image'], 'full')[0];?>);"></div>
						<?php endforeach;?>
					</div>
					<?php endif;?>
			        <!-- <div class="about-photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/about.png)"></div> -->
			        <div class="about-content">
			          <h2 class="section-title"><?php the_title();?></h2>
			          <?php the_content();?>
			        </div>
			      </div>
			    </section>

			<?php //get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		//endwhile; // End of the loop.
		?>
	    <!-- <section class="about">
	      <div class="container">
	        <div class="about-header">
	          <span style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo_white'), 'full')[0];?>)"></span>
	        </div>
	        <div class="about-content">
	          <h2 class="section-title"><?php the_title();?></h2>
	          <?php the_content();?>
	        </div>
	      </div>
	    </section> -->
		<?php endwhile; // End of the loop.
		?>
			</div>
			  <?php get_template_part('template-parts/main-products');?>
			  <?php get_template_part('template-parts/news-events');?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();