<?php 
/*
* Template Name: Шаблон страницы  Строительные услуги
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
		<?php if ( have_posts() ) : ?>

      <h1><?php the_title();?></h1>

			<div class="news-wrapper ">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();?>



    <?php $stati_children = new WP_Query(array(
      'post_type' => 'page',
      'order'       => 'ASC',
      'post_parent' => get_the_ID()
      )
    );

    if($stati_children->have_posts()) :
    while($stati_children->have_posts()): $stati_children->the_post();
    echo '
      <div class="news-item">
       <a href="'.get_the_permalink().'" class="news-item__img news-item__img-work" style="background-image: url( '.get_the_post_thumbnail_url( get_the_id(), 'full' ).' )"></a>
       <div class="news-item__title">'.get_the_title().'</div>
       <div class="news-item__text"><?php echo the_excerpt();?></div>
       <div class="btn-wrap">
         <a href="'.get_the_permalink().'" class="button">Подробнее</a>
         <a href="#" class="button heating-card__btn" data-title="<?php the_title();?>">Узнать цену</a>
       </div>
      </div>';
    endwhile;
    endif; wp_reset_query();
    ?>


			<?php endwhile;?>
			</div>
			<?php the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();