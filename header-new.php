<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package automatic
 */
$header_class = 'page';
$bg = get_template_directory_uri() . '/img/N_avtomatic_ban_verh_1.jpg';
if(is_home() || is_front_page()) {
  $header_class = 'home';
  $bg = '';
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta name="google-site-verification" content="SvOenqKTguKR4ZGqU6_nUrM-fA1gyeySXGa8PkFV2hA" />
  <meta name="yandex-verification" content="aa644970b9f99efa" /> 

  <meta name="cmsmagazine" content="f7245597f5b3579a3db3d69ddef2a8bf" /> 
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="icon" sizes="256x256" href="<?php echo get_template_directory_uri();?>/img/favicon/icon-256.png">
  <link rel="icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/img/favicon/icon-128.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/img/favicon/icon-32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/img/favicon/icon-16.png">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/img/favicon/safari-pinned-tab.svg" color="#00abaf">
  <meta name="theme-color" content="#00abaf"> 
  <?php wp_head(); ?>
  <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(49032149, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/49032149" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>

<body <?php body_class(); ?>>
  <div style="display: none;">
    <div class="box-modal" id="messgeModal">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class = "modalline" id = "lineIcon">
      </div>

      <div class = "modalline" id = "lineMsg">
      </div>
    </div>
  </div>
  <div style="display: none;">
    <div class="box-modal" id="work-modal">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class = "order-modal-wrapper" id = "lineIcon">
        <div class="order-modal-photo"></div>
        <div class="order-modal-form-wrap">
          <h2>Заинтересовал проект?<br>Хотите узнать цену</h2>
          <div class="order-modal-descr">Оставьте свой номер и мы свяжемся с Вами и рассчитаем стоимость исходя из Ваших потребностей</div>
          <form action="">
            <input type="tel" name="tel" placeholder="Ваш телефон">
            <a href="#" class="uniSendBtn button">Отправить</a>
          </form>
          <div class="order-modal-descr">Также Вы можете связаться с нами по телефону <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>"><?php echo carbon_get_theme_option('as_phone');?></a> или напишите на Email <a href="mailto:<?php echo carbon_get_theme_option('as_email');?>"><?php echo carbon_get_theme_option('as_email');?></a></div>
        </div>
      </div>

      <div class = "modalline" id = "lineMsg"> 
      </div>
    </div>
  </div>

  <div style="display: none;">
    <div class="box-modal" id="construct-modal">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class = "order-modal-wrapper" id = "lineIcon">
        <div class="order-modal-photo"></div>
        <div class="order-modal-form-wrap">
          <h2>Заявка на расчет стоимости</h2>
          <div class="order-modal-descr">Оставьте свой номер и мы свяжемся с Вами и рассчитаем стоимость исходя из Ваших потребностей</div>
          <form action="">
            <input type="tel" name="tel" placeholder="Ваш телефон">
            <a href="#" class="uniSendBtn button">Отправить</a>
          </form>
          <div class="order-modal-descr">Также Вы можете связаться с нами по телефону <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>"><?php echo carbon_get_theme_option('as_phone');?></a> или напишите на Email <a href="mailto:<?php echo carbon_get_theme_option('as_email');?>"><?php echo carbon_get_theme_option('as_email');?></a></div>
        </div>
      </div>

      <div class = "modalline" id = "lineMsg"> 
      </div>
    </div>
  </div>

  <div style="display: none;">
    <div class="box-modal" id="order-modal">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class = "order-modal-wrapper" id = "lineIcon">
        <div class="order-modal-photo"></div>
        <div class="order-modal-form-wrap">
          <h2>Обратный звонок</h2>
          <form action="">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="tel" name="tel" placeholder="Ваш телефон">
            <a href="#" class="uniSendBtn button">Отправить</a>
          </form>
        </div>
      </div>

      <div class = "modalline" id = "lineMsg">
      </div>
    </div>
  </div>


  <div style="display: none;">

    <div class="box-modal main-comp-modal" id="phone-modal">
      <!-- <img class = "formpers1" src = "<?php bloginfo("template_url")?>/images/formpers1.svg"> -->
      <!-- <img class = "formpers2" src = "<?php bloginfo("template_url")?>/images/formpers2.svg"> -->
      <!-- <div class="box-modal_close arcticmodal-close"><img src = "<?php bloginfo("template_url");?>/images/times-black.svg" width = "15px" /></div> -->
      <div class="uniConsultModal-wrapper">
        <div class="uniConsultModal-img">

        </div>
        <div class="uniConsultModal-form">
          <h2 id = "uniHeaderNdp">Перезвоним вам за 10 секунд</h2>
          <form class = "uniForm phone-modal">
            <input type = "hidden" class = "uniFormName" id = "ovFormName" value = "по кнопке">
            <!-- <input type = "text" class = "uniName" id = "uniName" placeholder = "Имя"> -->
            <input type = "tel" class = "uniTel mascedtel" id = "uniTel"  placeholder = "Телефон*">
            <!-- <textarea id = "uniMsg" class = "uniMes" placeholder = "Причина обращения"></textarea> -->
            <div class = "btn ovBtn uniSendBtn button" data-title="Заявка с кнопки" data-formname = "phone-modal" >Позвоните мне</div>
            <span class="note-form">Нажимая на кнопку <span id="name_serv">Заказать услугу</span>, вы соглашаетесь с условиями обработки персональных данных</span>
          </form>
        </div>
      </div>

    </div>
  </div>

  <div style="display: none;">
    <div class="box-modal" id="buy-modal">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class = "modalline" id = "lineIcon">
        <form id="order-modal-form">
          <div class="order-popup-form__header">
            <img class="loadImg" src="" alt="">
            <div class="order-popup-form__header-text">
              <h2 class="tovName"></h2>
              
              <div class="order-popup-form__price"><span class="single-price__old"><span class="tovOldPrice"></span> </span> <span id = "tovPrice" class="tovPrice"></span></div>
              <div class="postId" style="display:none;"></div>
              <div class="tovSKU" style="display:none;"></div>
              <div class="tovType" style="display:none;"></div>
              <div class="tovGroupID" style="display:none;"></div>
              <div class="tovOfferID" style="display:none;"></div>
              <div class="tovWeight" style="display: none"></div>
              <div class="tovPackage" style="display: none;"></div>
            </div>
          </div>

          <div class="character-block">
            <select name="order-popup__param" id="order-popup__param" class="order-popup__param">

            </select>
          </div>
          <div class="product-content__block">

          </div>
          <div class="character-block__btn">
            <div class="more-link cancel-link">Отмена</div>
            <div class="link-consultation product-add-to-cart button link-button toBascetInWin" id="buy-submit-link">В корзину</div>
          </div>
        </form>    
      </div>

      <div class = "modalline" id = "lineMsg">
      </div>
    </div>
  </div>
  <div style="display: none;">
    <div class="box-modal" id="buy-modal-1">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class = "modalline" id = "lineIcon">
        <form id="order-modal-form">
          <div class="order-popup-form__header">
            <img class="loadImg" src="" alt="">
            <div class="order-popup-form__header-text">
              <h2 class="tovName"></h2>
              
              <div class="order-popup-form__price"><span class="single-price__old"><span class="tovOldPrice"></span> </span> <span id = "tovPrice" class="tovPrice"></span></div>
              <div class="postId" style="display:none;"></div>
              <div class="tovSKU" style="display:none;"></div>
              <div class="tovType" style="display:none;"></div>
              <div class="tovGroupID" style="display:none;"></div>
              <div class="tovOfferID" style="display:none;"></div>
              <div class="tovWeight" style="display: none"></div>
              <div class="tovPackage" style="display: none;"></div>
            </div>
          </div>
          <div class="product-content__block">

          </div>
          <input type="text" id="order-modal-form-name2" placeholder="Имя">
          <input type="tel" id="order-modal-form-phone2" placeholder="Телефон">
          <div class="character-block__btn">
            <div class="more-link cancel-link">Отмена</div>
            <div class="link-consultation product-add-to-cart button link-button " id="buy-one-link1">Заказать</div>
          </div>
        </form>    
      </div>

      <div class = "modalline" id = "lineMsg">
      </div>
    </div>
  </div>
  <div id="page" class="site">
  <div class="blackout"></div>

 <?php
            $bsumm = 0;
            $bcount = 0;
            
            if (!empty($_COOKIE["bascet"])) {
              $bascetsod = explode(",", $_COOKIE["bascet"]);  
            
              foreach ($bascetsod as $be) {
                $elempart = explode("|", $be);  
                
                $product = $elempart[0];
                $bs = 0;
                
                $bs +=  (float)($elempart[6]);
                $bcount += (float)($elempart[1]);
                      
                $summPoz = $bcount * $bs;
                $bsumm += $summPoz;
                
              }
            }
          ?>
  
    <div class="dialog-cb-button dialog-cb-button__decstop">
      <a href="#"></a>
    </div>
    <div class="dialog-cb-button dialog-cb-button__mobile">
      <a class="mgo-number" href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>"><?php echo carbon_get_theme_option('as_phone');?></a>
    </div>

    <!-- header  -->
    <header class="header-new header">

      <a href="<?php echo home_url('/');?>" class="logo-new logo" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo'), 'full')[0];?>)"></a>
      
      <div class="header-content-new">
        <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ) ?>" >
          <input type="text" value="<?php echo get_search_query() ?>" placeholder="Поиск по сайту" name="s" id="s" /> 
          <input type="submit" id="searchsubmit" value="" />
        </form>
        <button class="mob-search"></button>
        <div class="header-contacts-new header-contacts">
          <a href="<?php echo get_permalink(65);?>" class="header-cart">
            <?php
            $bsumm = 0;
            $bcount = 0;
            
            if (!empty($_COOKIE["bascet"])) {
              $bascetsod = explode(",", $_COOKIE["bascet"]);  

              foreach ($bascetsod as $be) {
                $elempart = explode("|", $be);  
                
                $product = $elempart[0];
                $bs = 0;
                
                $bs +=  (float)($elempart[6]);
                $bcount += (float)($elempart[1]);

                $summPoz = $bcount * $bs;
                $bsumm += $summPoz;
                
              }
            }?>
            <span><?php echo $bcount;?></span>
          </a>
          
          <div class="header-phone__wrap-new header-phone__wrap">
            <div class="header-phone__addit">
              <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>"><?php echo carbon_get_theme_option('as_phone');?></a>
              <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone_2'))?>"><?php echo carbon_get_theme_option('as_phone_2');?></a>
            </div>
            <div class="header-phone__main">
              <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone_3'))?>" class="header-phone"><?php echo carbon_get_theme_option('as_phone_3');?></a>
              <p class="header-phone__subtitle">Бесплатно по территории РФ</p>
            </div>
          </div>
          <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone_3'))?>" class="mob-callback__phone"></a>

        </div>
      </div>

      <div class="header__menu-burg">
        <p>Меню</p>
        <div class="menu__icon icon-menu">
				  <span></span>
				  <span></span>
				  <span></span>
			  </div>
      </div>
      
    </header>

    <div class="header__mob-menu">
        <div class="header__mob-menu-top">
         <ul>
          <li><a href="#">Автоматика для ворот</a></li>
          <li><a href="#">Магазин</a></li>
          <li><a href="#">Инструкции</a></li>
          <li><a href="#">Наши работы</a></li>
          <li><a href="#">Производство ворот</a></li>
         </ul>
         <ul>
          <li><a href="#">Умный дом</a></li>
          <li><a href="#">О умном доме Fibaro</a></li>
          <li><a href="#">Оборудование</a></li>
         </ul>
         <ul>
          <li><a href="#">Инженерные системы</a></li>
          <li><a href="#">Монтаж электрооборудования</a></li>
          <li><a href="#">Отопление и водоотведение</a></li>
          <li><a href="#">Бетонные полы</a></li>
          <li><a href="#">Наши работы</a></li>
         </ul>
        </div>

        <div class="header__mob-menu-line"></div>

        <div class="header__mob-menu-botom">
          <ul>
            <li><a href="#">О Компании</a></li>
            <li><a href="#">Оплата и доставка</a></li>
            <li><a href="#">Сертификаты</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>
      </div>

      <form role="search" method="get" id="searchform" class="header__search" action="<?php echo home_url( '/' ) ?>" >
          <input type="text" value="<?php echo get_search_query() ?>" placeholder="Поиск по сайту" name="s" id="s" /> 
          <input type="submit" id="searchsubmit" value="" />
        </form>

    <div id="content" class="site-content">
     
