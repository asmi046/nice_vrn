  <div id="work-modal__section">
 
      <div class = "order-modal-wrapper" id = "lineIcon">
        <div class="order-modal-photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/pers.png);"></div>
        <div class="order-modal-form-wrap">
          <h2>Заинтересовал проект?<br>Хотите узнать цену?</h2>
          <div class="order-modal-descr">Оставьте свой номер и мы свяжемся с Вами и рассчитаем стоимость исходя из Ваших потребностей</div>
          <form action="">
            <input type="tel" name="tel" placeholder="Ваш телефон">
            <a href="#" class="uniSendBtn button" data-title="Узнать цену работы <?php the_title();?>">Отправить</a>
          </form>
          <div class="order-modal-descr">Также Вы можете связаться с нами по телефону <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>"><?php echo carbon_get_theme_option('as_phone');?></a> или напишите на Email <a href="mailto:<?php echo carbon_get_theme_option('as_email');?>"><?php echo carbon_get_theme_option('as_email');?></a></div>
        </div>
  </div>
  </div>