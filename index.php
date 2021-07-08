<?php 
/*
* Template Name: Шаблон новая главная тест
*/
  get_header(); 
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

  <section class="info-new">
    <!-- <div class="container "> -->

      <div class="info-new__row">

        <div class="info-new__card-body">
          <a href="#" class="info-new__card-img">
            <img src="<?php echo get_template_directory_uri();?>/img/gate-automation.jpg" alt=""> 
          </a>
          <div class="info-new__card-text-block">
            <span>Автоматика для ворот</span>
            <a href="https://n-avtomatic.ru/asgproduct" class="info-new__card-link">Подробнее</a>
          </div>
        </div>

        <div class="info-new__card-body">
          <a href="#" class="info-new__card-img">
            <img src="<?php echo get_template_directory_uri();?>/img/beton-img.jpg" alt=""> 
          </a>
          <div class="info-new__card-text-block">
            <span>Бетонные полы</span>
            <a href="<?php echo get_permalink(3094);?>" class="info-new__card-link">Подробнее</a>
          </div>
        </div>

        <div class="info-new__card-body">
          <a href="#" class="info-new__card-img">
            <img src="<?php echo get_template_directory_uri();?>/img/engin-card.jpg" alt=""> 
          </a>
          <div class="info-new__card-text-block">
            <span>Инженерные системы</span>
            <a href="<?php echo get_permalink(2951);?>" class="info-new__card-link">Подробнее</a>
          </div>
        </div>

      </div>

    <!-- </div>  -->
  </section>

<section class="about about-new">
  <div class="container">
    <div class="about-photo_new about-photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/about-new.jpg)"></div> 
    <div class="about-content-new about-content">
      <h1 class="section-title">ООО «Н-Автоматик» - Инженерные системы</h1>
      <p>
        ООО «Н-Автоматик» - монтажная компания инженерного профиля. Мы оказываем услуги по монтажу и пусконаладке систем электроснабжения водоснабжения, 
        отопления и автоматики для ворот всех типов. Так же мы оказываем услуги по заливке бетонных полов  для производственных помещений. Мы работаем на 
        рынке строительных услуг с 2016 года за это время нашими услугами остались довольны более 1000 клиентов.
      </p>
    </div>
  </div>
</section>

<section class="main-bnr-new main-bnr" style="background-image: url(<?php echo get_template_directory_uri();?>/img/bnr-new.jpg)">
    <div class="container">
      <div class="logo-bnr" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo'), 'full')[0];?>)"></div>
      <div class="main-bnr__content">
      <div class="main-bnr__title-new  main-bnr__title">Инженерные системы</div>
        <div class="main-bnr__subtitle">для частных домовладений и промышленных предприятий</div>
      </div>
    </div>
  </section>

<?php get_template_part('template-parts/main-products');?>

<section class="main-bnr" style="background-image: url(<?php echo get_template_directory_uri();?>/img/bnr.png)">
    <div class="container">
      <div class="logo-bnr" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo'), 'full')[0];?>)"></div>
      <div class="main-bnr__content">
        <div class="main-bnr__subtitle">Комплексное решениие для загородного дома от</div>
        <div class="main-bnr__title">Nice</div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/heating-advantages-block');?> 

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

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
