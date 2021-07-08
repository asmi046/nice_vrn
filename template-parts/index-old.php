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
      <div class="main-slider__wrapper">
        <div class="slider-item__content">
          <div class="slider-item__subtitle"><?php echo $banner['auto_banner_title']?></div>
          <div class="slider-item__title"><?php echo $banner['auto_banner_subtitle']?></div>
        </div>
        <section class="main-slider">
          <?php 

          $insex = 0;
          foreach($arr_banner as $banner):?>
            <div class="slider-item" id = "hiddenSlideText<?php echo $insex; ?>" data-slidetext="<?php echo $banner['auto_banner_title']?>" data-doptext="<?php echo $banner['auto_banner_subtitle']?>" style="background-image: url(<?php echo wp_get_attachment_image_src($banner['auto_banner_img'], 'full')[0];?>)">
            </div>
            <?php $insex++; endforeach;?>
      <!-- <div class="slider-item" style="background-image: url(img/ohd_commercial_2.png)">
        <div class="slider-item__content">
          <div class="slider-item__subtitle">Комплекты автоматики для промышленных ворот</div>
          <div class="slider-item__title">Nice</div>
        </div>
      </div> -->
    </section>
  </div>
<?php endif;?>
<script type="text/javascript">
  jQuery('.main-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    jQuery(".slider-item__subtitle").html(jQuery("#hiddenSlideText"+nextSlide).data("slidetext"));
    jQuery(".slider-item__title").html(jQuery("#hiddenSlideText"+nextSlide).data("doptext"));
  });

  jQuery('.main-slider').on('init', function(event, slick, currentSlide, nextSlide){
    jQuery(".slider-item__subtitle").html(jQuery("#hiddenSlideText0").data("slidetext"));
    jQuery(".main-slider__info-date").html(jQuery(".programms-date").html());
    jQuery(".slider-item__title").html(jQuery("#hiddenSlideText0").data("doptext"));

  });
</script>
<section class="about">
  <div class="container">
    <div class="about-photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/about.png)"></div>
    <div class="about-content">
      <h1 class="section-title"><?php echo carbon_get_theme_option('about_home_title');?></h1>
      <?php echo carbon_get_theme_option('about_home');?>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/product-slider');?>

<?php get_template_part('template-parts/main-bnr');?>
<?php 
    // $args = array(
    //   'taxonomy' => 'asgproductcat',
    //   'hide_empty' => 0,
    //   'exclude' => 3,
    //   'number' => 4,
    // );
    // $cat = get_categories($args);
    // if($cat):
?>
<!--     <section class="category-wrapper">
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
    </section> -->
    <?php //endif;?>
    <?php get_template_part('template-parts/main-products');?>
<!--     <section class="about">
      <div class="container">
        <div class="about-header">
          <span style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo_white'), 'full')[0];?>)"></span>
        </div>
        <div class="about-content">
          <h2 class="section-title"><?php echo carbon_get_theme_option('about_home_title');?></h2>
          <?php echo wpautop(carbon_get_theme_option('about_home'));?>
        </div>
      </div>
    </section> -->

  <a href="<?php echo get_permalink(2951);?>"> 
    <section class="smart-conven">
      <div class="container">
        <h2>
          Умный дом FIBARO <br> в Воронеже
        </h2>
        <p>
          Подбор, установка и обслуживание <br> комплектов умного дома FIBARO <br>  
          от сертифицированных специалистов
        </p>
      </div>
    </section>
  </a>

    <?php get_template_part('template-parts/news-events');?>
<!--     <section class="news">
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
        <div class="button-wrap">
          <a href="<?php echo get_category_link(2);?>" class="product-slider__link">Читать все новости</a>
        </div>
      </div>
    </section> -->
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
