<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package automatic
 */

?>

</div><!-- #content -->
  <footer class="footer">
    <div class="container">
      <div class="footer-block">
        <div class="logo-foot" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo_white'), 'full')[0];?>)"></div>
        <div class="footer-soc">
          <span>Мы в соцсетях</span>
          <ul class="ul-clean">
            <li><a href="<?php echo carbon_get_theme_option('as_insta');?>" style="background-image: url(<?php echo get_template_directory_uri();?>/img/instagram.svg)"></a></li>
            <!-- <li><a href="<?php echo carbon_get_theme_option('as_vk');?>" style="background-image: url(<?php echo get_template_directory_uri();?>/img/vk.svg)"></a></li> -->
          </ul>
        </div>
        <div class="contacts-item">
          <a href="https://asmi-studio.ru" target="_blank" class="">Разработка сайта Asmi-Studio</a>
        </div>
        <div class="contacts-item">
          Все права защищены Н-АВТОМАТИК©
        </div>
      </div>
      <div class="footer-block">
        <?php foot_menu();?>
      </div>
      <div class="footer-block footer-contacts">
        <div class="footer-title">ООО «Н-Автоматик»</div>
        <div class="contacts-item">
          <span><?php echo carbon_get_theme_option('as_address');?></span>
        </div>
        <div class="contacts-item">
          <span>ИНН: 366226742</span>
        </div>
        <div class="contacts-item">
          <a href="mailto:<?php echo carbon_get_theme_option('as_email');?>"><?php echo carbon_get_theme_option('as_email');?></a>
        </div>
        <div class="contacts-item">
          <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>" class=""><?php echo carbon_get_theme_option('as_phone');?></a>
        </div>
        <div class="contacts-item">
          <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phones_2'))?>" class=""><?php echo carbon_get_theme_option('as_phones_2');?></a>
        </div>
        <div class="contacts-item">
          <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone_3'))?>" class=""><?php echo carbon_get_theme_option('as_phone_3');?></a>
        </div>
        <div class="contacts-item">
          <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone_4'))?>" class=""><?php echo carbon_get_theme_option('as_phone_4');?></a>
        </div>
      </div>
    </div>
  </footer>
<!-- <footer class="footer">
  <div class="container">
    <div class="footer-block footer-block__logo">
      <div class="logo" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo_white'), 'full')[0];?>)"></div>
    </div>
    <div class="footer-block">
      <?php foot_menu();?>
    </div>
    <div class="footer-block footer-block__contacts">
      <div class="address"><?php echo carbon_get_theme_option('as_address');?></div>
      <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>" class="footer-link"><?php echo carbon_get_theme_option('as_phone');?></a>
      <a href="mailto:<?php echo carbon_get_theme_option('as_email');?>" class="footer-block">e-mail:<?php echo carbon_get_theme_option('as_email');?></a>
    </div>
  </div>
</footer> -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
