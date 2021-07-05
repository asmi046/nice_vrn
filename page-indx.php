<?php 
/*
* Template Name: Шаблон новая главная тест
*/
  get_header('new');
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

  <section class="info-new">
    <!-- <div class="container "> -->

      <div class="info-new__row">
        
        <div class="info-new__card-body">
          <a href="#" class="info-new__card-img">
            <img src="<?php echo get_template_directory_uri();?>/img/smart-card.jpg" alt=""> 
          </a>
          <div class="info-new__card-text-block">
            <h3>Умный дом</h3>
            <a href="#" class="info-new__card-link">О умном доме Fibaro</a>
            <a href="#" class="info-new__card-link">Оборудование</a>
          </div>
        </div>

        <div class="info-new__card-body">
          <a href="#" class="info-new__card-img">
            <img src="<?php echo get_template_directory_uri();?>/img/gate-automation.jpg" alt=""> 
          </a>
          <div class="info-new__card-text-block">
            <h3>Автоматика для ворот</h3>
            <a href="#" class="info-new__card-link">Магазин</a>
            <a href="#" class="info-new__card-link">Инструкции</a>
            <a href="#" class="info-new__card-link">Наши работы</a>
          </div>
        </div>

        <div class="info-new__card-body">
          <a href="#" class="info-new__card-img">
            <img src="<?php echo get_template_directory_uri();?>/img/engin-card.jpg" alt=""> 
          </a>
          <div class="info-new__card-text-block">
            <h3>Инженерные системы</h3>
            <a href="#" class="info-new__card-link">Монтаж электрооборудования</a>
            <a href="#" class="info-new__card-link">Отопление и водоотведение</a>
            <a href="#" class="info-new__card-link">Бетонные полы</a>
            <a href="#" class="info-new__card-link">Наши работы</a>
          </div>
        </div>

      </div>

    <!-- </div>  -->
  </section>

<section class="about about-new">
  <div class="container">
    <div class="about-photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/about.png)"></div>
    <div class="about-content">
      <h1 class="section-title">О НАШЕЙ КОМПАНИИ</h1>
      <p>
        ООО «Н-Автоматик» является официальным дистрибьютором компании Nice в Центрально-Черноземном регионе.
        Наша компания основана в 2016г., и является  молодой  динамично развивающейся. Нашими партнерами являются
        торговые и монтажные организации не только Воронежской области, а также Белгородской, Курской, Липецкой. 
        Предлагаемая нами  продукция является высококачественной и проверена в различных регионах России. 
        Специалисты нашей компании подберут автоматические системы под Ваши требования.
      </p>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/main-bnr');?>

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
