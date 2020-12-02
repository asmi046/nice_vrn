    <section class="product-slider">
      <div class="container">
          <div class="product-slider__content">
            <div class="product-slider__title">Комплекты автоматики для откатных ворот</div>
            <div class="product-slider__text">Slight, Road, Rox, Thor, Robus, Run, Tube</div>
            <a href="#" class="product-slider__link">Подробнее</a>
          </div>
      <div class="product-slider__wrapper">
        <div class="product-slider-slider" id = "hiddenSlideText-0" data-slidetext = "Комплекты автоматики для откатных ворот"  data-doptext = "Slight, Road, Rox, Thor, Robus, Run, Tube">
          <div class=""></div>
          <div class="product-slider__img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/product.png)"></div>
        </div>
        <div class="product-slider-slider" id = "hiddenSlideText-1" data-slidetext = "Комплекты автоматики для откатных ворот"  data-doptext = "Slight, Road, Rox, Run, Tube">
          <div class=""></div>
          <div class="product-slider__img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/product.png)"></div>
        </div>
      </div>
      <script type="text/javascript">
        jQuery('.product-slider__wrapper').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        jQuery(".product-slider__title").html(jQuery("#hiddenSlideText-"+nextSlide).data("slidetext"));
        jQuery(".product-slider__text").html(jQuery("#hiddenSlideText-"+nextSlide).data("doptext"));
      });
      
        jQuery('.main-slider').on('init', function(event, slick, currentSlide, nextSlide){
        jQuery(".maproduct-slider__title").html(jQuery("#hiddenSlideText-0").data("slidetext"));
        jQuery(".product-slider__text").html(jQuery("#hiddenSlideText-0").data("doptext"));
        
      });
    </script>
      </div>
    </section>