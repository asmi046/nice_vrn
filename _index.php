<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package automatic
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php 
      $arr_banner = carbon_get_theme_option('auto_banner');
      if($arr_banner):
    ?>
    <section class="main-slider">
      <?php foreach($arr_banner as $banner):?>
        <div class="main-slider__item" style="background-image: url(<?php echo wp_get_attachment_image_src($banner['auto_banner_img'], 'full')[0];?>)">
          <div class="container">
            <div class="main-slider__content">
              <div class="h1"><?php echo $banner['auto_banner_title']?> <span><?php echo $banner['auto_banner_subtitle']?></span></div>
            </div>
          </div>
        </div>
      <?php endforeach;?>
    </section>
    <?php endif;?>
    <?php 
    $args = array(
      'taxonomy' => 'asgproductcat',
      'hide_empty' => 0,
      'exclude' => 3,
      'number' => 4,
    );
    $cat = get_categories($args);
    if($cat):
    ?>
    <section class="category-wrapper">
      <div class="container">
        <?php foreach($cat as $item):
          $cat_id = $item->term_id?>
        <div class="category-item">
          <div class="category-item__icon" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_term_meta($cat_id, 'term_product_icon'), 'full')[0]?>)"></div>
          <div class="category-item__title"><?php echo $item->name?></div>
          <a href="<?php echo get_term_link($cat_id, 'asgproductcat')?>" class="category-item__link">Подробнее</a>
        </div>
      <?php endforeach;?>
      </div>
    </section>
  <?php endif;?>
    <section class="new-products">
      <div class="container">
        <h2 class="section-title">Новинки</h2>
        <?php 
          $args = array(
            'posts_per_page' => 4,
            'post_type' => 'asgproduct',
            'tax_query' => array(
              array(
                'taxonomy' => 'asgproductcat',
                'field' => 'id',
                'terms' => array(3)
              )
            )
          );
          $query = new WP_Query($args);
          if($query->have_posts()):
        ?>
        <div class="products-wrapper">
          <?php while($query->have_posts()):
            $query->the_post();
            get_template_part('template-parts/product-loop');
          endwhile;?>
        </div>
      <?php endif;?>
        <div class="btn-wrap">
          <a href="<?php echo get_post_type_archive_link('asgproduct');?>" class="button">Перейти в интернет-магазин</a>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="container">
        <div class="about-header">
          <span style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo_white'), 'full')[0];?>)"></span>
        </div>
        <div class="about-content">
          <h2 class="section-title"><?php echo carbon_get_theme_option('about_home_title');?></h2>
          <?php echo wpautop(carbon_get_theme_option('about_home'));?>
        </div>
      </div>
    </section>
    <section class="news">
      <div class="container">
        <h2 class="section-title">Новости</h2>
        <?php 
          $args = array(
            'posts_per_page' => 2,
            'cat' => 2
          );
          $query = new WP_Query($args);
          if($query->have_posts()):
        ?>
        <div class="news-wrapper">
          <?php while($query->have_posts()):
            $query->the_post();
            get_template_part('template-parts/news-item');
          endwhile;?>
        </div>
        <?php endif; wp_reset_postdata();?>
        <div class="btn-wrap">
          <a href="<?php echo get_category_link(2);?>" class="button">Читать все новости</a>
        </div>
      </div>
    </section>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
