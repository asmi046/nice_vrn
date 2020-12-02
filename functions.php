<?php
/**
 * automatic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package automatic
 */
$siteadr = "n-avtomatic.ru";
$sitename = "Автоматика для ворот";
add_action( 'carbon_fields_register_fields', 'boots_register_custom_fields' );
function boots_register_custom_fields() {
// путь к пользовательскому файлу определения поля (полей), измените под себя
require_once __DIR__ . '/inc/custom-fields-options/metaboxes.php';
require_once __DIR__ . '/inc/custom-fields-options/theme-options.php';
}
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
require_once( get_template_directory() . '/inc/carbon-fields/vendor/autoload.php' );
\Carbon_Fields\Carbon_Fields::boot();
}


if ( ! function_exists( 'auto_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function auto_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on automatic, use a find and replace
		 * to change 'auto' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'auto', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'auto' ),
			'menu-mob' => esc_html__( 'Мобильное меню', 'auto' ),
			'menu-foot' => esc_html__( 'Меню в подвале', 'auto' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'auto_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'auto_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function auto_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'auto_content_width', 640 );
}
add_action( 'after_setup_theme', 'auto_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function auto_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'auto' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'auto' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'auto_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function auto_scripts() {
	wp_enqueue_style( 'auto-style', get_stylesheet_uri() );

	wp_enqueue_style('light', get_template_directory_uri() . '/css/magnific.css', array(), null, 'all');
	wp_enqueue_style('bascet', get_template_directory_uri() . '/css/backet.css', array(), null, 'all');
	wp_enqueue_style('new', get_template_directory_uri() . '/css/style-new.css', array(), null, 'all');

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'auto-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'auto-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('libs', get_template_directory_uri() . '/js/scripts.min.js', array(), null, true);
	wp_enqueue_script('scroll', get_template_directory_uri() . '/js/jquery-scrolltofixed-min.js', array(), null, true);

	wp_enqueue_script("light", get_template_directory_uri() . '/js/magnific.js', array(), null, true);
	wp_enqueue_script("basket", get_template_directory_uri() . '/js/bascet.js', array(), null, true);

	wp_enqueue_script('main', get_template_directory_uri() . '/js/custom.js', array(), null, true);

	wp_localize_script( 'main', 'allAjax', array(
      'ajaxurl' => admin_url( 'admin-ajax.php' ),
      'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
    ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'auto_scripts' );



function wph_add_all_elements($init) {
    if(current_user_can('unfiltered_html')) {
        $init['extended_valid_elements'] = 'span[*]';
    }
    return $init;
}
add_filter('tiny_mce_before_init', 'wph_add_all_elements', 20);

add_filter('excerpt_more', function($more) {
	return '...';
});

// add_filter( 'single_template', function ( $single_template ) {
 
//     $parent     = '2';
//     $categories = get_categories( 'child_of=' . $parent );
//     $cat_names  = wp_list_pluck( $categories, 'name' );
 
//     if ( has_category( 'movies' ) || has_category( $cat_names ) ) {
//         $single_template = dirname( __FILE__ ) . '/single-news.php';
//     }
//     return $single_template;
// }, PHP_INT_MAX, 2 );
// add_filter( 'single_template', function ( $single_template ) {
 
//     $parent     = '12';
//     $categories = get_categories( 'child_of=' . $parent );
//     $cat_names  = wp_list_pluck( $categories, 'name' );
 
//     if ( has_category( 'movies' ) || has_category( $cat_names ) ) {
//         $single_template = dirname( __FILE__ ) . '/single-nashi-raboty.php';
//     }
//     return $single_template;
// }, PHP_INT_MAX, 2 );

add_action( 'wp_ajax_universal_send', 'universal_send' );
  add_action( 'wp_ajax_nopriv_universal_send', 'universal_send' );

  function universal_send() {
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
      
      $headers = array(
        'From: Сайт Автоматика <noreply@n-avtomatic.ru>',
        'content-type: text/html',
      );
    
      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
      if (wp_mail(carbon_get_theme_option( 'as_email_send' ), 'Заказ с сайта', '<strong>С какой формы:</strong> '.$_REQUEST["msg"].'<br/> <strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["tel"], $headers))
        wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
      else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
      
    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
  }

add_action( 'wp_ajax_send_work', 'send_work' );
  add_action( 'wp_ajax_nopriv_send_work', 'send_work' );

  function send_work() {
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
      
      $headers = array(
        'From: Сайт Автоматика <noreply@n-avtomatic.ru>',
        'content-type: text/html',
      );
    
      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
      if (wp_mail(carbon_get_theme_option( 'as_email_send' ), 'Заказ с сайта', '<strong>С какой формы:</strong> '.$_REQUEST["title"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["cltel"], $headers))
        wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
      else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
      
    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
  }
function main_menu() {
	wp_nav_menu(array(
		'theme_location' => 'menu-1',
		'container' => false,
		'menu_class' => 'ul-clean menu',
	));
}
function mob_menu() {
	wp_nav_menu(array(
		'theme_location' => 'menu-mob',
		'container' => false,
		'menu_class' => 'ul-clean menu',
	));
}
function foot_menu() {
	wp_nav_menu(array(
		'theme_location' => 'menu-foot',
		'container' => false,
		'menu_class' => 'ul-clean footer-menu',
	));
}
add_action( 'init', 'create_asgproduct_taxonomies' );

function create_asgproduct_taxonomies(){

	// Добавляем древовидную таксономию 'genre' (как категории)
	register_taxonomy('asgproductcat', array('asgproduct'), array(
		'hierarchical'  => true,
		'labels'        => array(
			'name'              => "Категория товара",
			'singular_name'     => "Категория товара",
			'search_items'      => "Найти категорию товара",
			'all_items'         => __( 'Все категории товара' ),
			'parent_item'       => __( 'Дочерние категории' ),
			'parent_item_colon' => __( 'Дочерние категории:' ),
			'edit_item'         => __( 'Редактировать категорию' ),
			'update_item'       => __( 'Обновить категорию' ),
			'add_new_item'      => __( 'Добавить новую категорию товара' ),
			'new_item_name'     => __( 'Имя новой категории товара' ),
			'menu_name'         => __( 'Категории товара' ),
		),
		'show_ui'       => true,
		'query_var'     => true,
		'show_admin_column'     => true,
	));
}

add_action('init', 'asgproduct_custom_init');

function asgproduct_custom_init(){
	register_post_type('asgproduct', array(
		'labels'             => array(
			'name'               => 'Продукты', // Основное название типа записи
			'singular_name'      => 'Продукты', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый товар',
			'edit_item'          => 'Редактировать товар',
			'new_item'           => 'Новый товар',
			'view_item'          => 'Посмотреть товар',
			'search_items'       => 'Найти товар',
			'not_found'          =>  'Товаров не найдено',
			'not_found_in_trash' => 'В корзине товаров не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Товары'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats')
	) );
}

add_filter('manage_asgproduct_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);

 
function posts_columns($defaults){
    
	$defaults['riv_post_thumbs'] = __('Миниатюра');
    return $defaults;
}
 
function posts_custom_columns($column_name, $id){
	if($column_name === 'riv_post_thumbs'){
        the_post_thumbnail( array(80, 80) );
    }
}

add_action( 'wp_ajax_get_tov_option', 'get_tov_option' );
add_action( 'wp_ajax_nopriv_get_tov_option', 'get_tov_option' );

function get_tov_option() {
  if ( empty( $_REQUEST['nonce'] ) ) {
    wp_die( '0' );
  }
  
  if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
    
	if (empty($_REQUEST["groupid"])) wp_die( 'Нет параметров товара!', '', 403 );
	
	if (empty($_REQUEST["offertype"]))
		wp_die(get_rr($_REQUEST["groupid"]));
    else
		//wp_die(carbon_get_the_post_meta($_REQUEST["postid"], 'as_main_param'));
		wp_die(get_rr_main(carbon_get_post_meta((int)($_REQUEST["postid"]), 'as_main_param')));
  } else {
    wp_die( 'НО-НО-НО!', '', 403 );
  }
}


function get_rr($groupID){
	global $wpdb;
	$rezq = $wpdb->get_results("SELECT * FROM `asg_product_transfer` WHERE `offer_group_id` = '".$groupID."'");
	$optionstr = "";
	$contpn = 0;
	foreach ($rezq as $elem) {
		$optionmsg = "";
		if (!empty($elem->offer_param_razmer)) $optionmsg .= "Размер: ".$elem->offer_param_razmer;
		if (!empty($elem->offer_param_rost)) $optionmsg .= " Рост: ".$elem->offer_param_rost;
		if (!empty($elem->offer_param_color)) $optionmsg .= " Цвет: ".$elem->offer_param_color;
		if (!empty($elem->offer_param_pol)) $optionmsg .= " (".$elem->offer_param_pol.")";
		
		$optionstr .= "<option value = '".$elem->offer_id."'>".$optionmsg."</option>";
		$contpn++;
	}
	
	
	
	return ($contpn > 1)?$optionstr:"";
	
}

function get_rr_main($textElem){
	$contpn = 0;
	$elems = explode(";", $textElem);
	$optionstr = "";
	
	foreach ($elems as $elem) {
		$optionmsg = "";
		
		$optionstr .= "<option value = '".$elem."'>".$elem."</option>";
		$contpn++;
	}
	
	return ($contpn > 1)?$optionstr:"";
}
/*----------ОБРАБОТКА КОРЗИНЫ AJAX -----------*/

function get_text_param($offerid) {
	global $wpdb;
	$rez = $wpdb->get_results("SELECT * FROM `asg_product_transfer` where `offer_id` = ".$offerid);
	$optionmsg = "";
	
	if (!empty($rez[0]->offer_param_razmer)) $optionmsg .= "Размер: ".$rez[0]->offer_param_razmer;
	if (!empty($rez[0]->offer_param_rost)) $optionmsg .= " Рост: ".$rez[0]->offer_param_rost;
	if (!empty($rez[0]->offer_param_color)) $optionmsg .= " Цвет: ".$rez[0]->offer_param_color;
	if (!empty($rez[0]->offer_param_pol)) $optionmsg .= " (".$rez[0]->offer_param_pol.")";
		
	return $optionmsg;
}

// Удаление из корзины

add_action( 'wp_ajax_del_bascet', 'del_bascet' );
add_action( 'wp_ajax_nopriv_del_bascet', 'del_bascet' );

function del_bascet() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			if (!empty($_COOKIE["bascet"]))
			{
				$ncookelem = "";
				$bascetsod = explode(",", $_COOKIE["bascet"]);	
				
				$countinBascet = 0;
				foreach ($bascetsod as $be) {
					$elempart = explode("|", $be);	
					if (($elempart[0] !== $_REQUEST['postid']))
					{
						if (empty($ncookelem)) 
							$ncookelem .= $be;
						else $ncookelem .= ",".$be;
						$countinBascet+=$elempart[1];
					} 
				}
				
				setcookie("bascet", $ncookelem, 0, "/", $siteadr);
			}
			wp_die( $countinBascet );	
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}


// Пересчет корзины

add_action( 'wp_ajax_rec_bascet', 'rec_bascet' );
add_action( 'wp_ajax_nopriv_rec_bascet', 'rec_bascet' );

function rec_bascet() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			if (!empty($_COOKIE["bascet"]))
			{
				$ncookelem = "";
				$bascetsod = explode(",", $_COOKIE["bascet"]);	
				
				foreach ($bascetsod as $be) {
					$elempart = explode("|", $be);	
					if ($elempart[0] !== $_REQUEST['postid'])
					{
						if (empty($ncookelem)) 
							$ncookelem .= $be;
						else $ncookelem .= ",".$be;
					} else {
						if (empty($ncookelem)) 
							$ncookelem .= $elempart[0]."|".$_REQUEST["elcount"]."|".$elempart[2]."|".$elempart[3]."|".$elempart[4]."|".$elempart[5]."|".$elempart[6];
						else $ncookelem .= ",".$elempart[0]."|".$_REQUEST["elcount"]."|".$elempart[2]."|".$elempart[3]."|".$elempart[4]."|".$elempart[5]."|".$elempart[6];
					}
				}
				
				setcookie("bascet", $ncookelem, 0, "/", $siteadr);
			}
			
			
			
			wp_die( $_REQUEST["elcount"] );	
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}

// Поместить в корзину

add_action( 'wp_ajax_to_bascet', 'to_bascet' );
add_action( 'wp_ajax_nopriv_to_bascet', 'to_bascet' );

function to_bascet() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			
			
			$qty = '1';
			if (!empty($_COOKIE["bascet"])) 
			{
				$bascetelem = explode(",", $_COOKIE["bascet"]);
				
				$ctext = "";
				$dubl = false;
				foreach ($bascetelem as $r)
				{
					//postid, tovsku, tovtype, groupid, offerid
					
					$cb = explode("|", $r);
					$id = $cb[0];
					$count = $cb[1];
					
					//if (($cb[0] === $_REQUEST['postid'])&&($cb[3] === $_REQUEST['tovrazmer'])&&($cb[4] === $_REQUEST['tovrost'])&&($cb[5] === $_REQUEST['tovcolor']) ) 
					if ($cb[0] === $_REQUEST['postid']) 
					{
						$count += (int)$_REQUEST['qty'];
						$dubl = true;
					}
					
					if (empty($ctext))
						$ctext = $id."|".$count."|".$cb[2]."|".$cb[3]."|".$cb[4]."|".$cb[5]."|".$cb[6];
					else
						$ctext = $ctext.",".$id."|".$count."|".$cb[2]."|".$cb[3]."|".$cb[4]."|".$cb[5]."|".$cb[6]; 
				}
				
				if (!$dubl) {
					if(!empty($_REQUEST['qty'])) {
						$qty = $_REQUEST['qty'];
					}
					$bvalue = $ctext.",".$_REQUEST['postid']."|".$qty."|".$_REQUEST['tovsku']."|".$_REQUEST['tovtype']."|".$_REQUEST['groupid']."|".$_REQUEST['offerid']."|".$_REQUEST['dprice'];
				 } else 
					$bvalue = $ctext;
			}
			else {
				if(!empty($_REQUEST['qty'])) {
					$qty = $_REQUEST['qty'];
				}
				$bvalue = $_REQUEST['postid']."|".$qty."|".$_REQUEST['tovsku']."|".$_REQUEST['tovtype']."|".$_REQUEST['groupid']."|".$_REQUEST['offerid']."|".$_REQUEST['dprice'];
			}
			
			$bascetelem = explode(",", $bvalue );
			$count = 0;
			$price = 0;
			foreach ($bascetelem as $r)
			{
				$cb = explode("|", $r);
				$count += $cb[1];
				$price += ((float)$cb[1] * (float)$cb[6]);
			}
			
			setcookie("bascet", $bvalue, 0, "/", $siteadr);
			wp_die( $count."|".$price."|".$_REQUEST['postid']."||".$_COOKIE["bascet"] );	
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}

// оформление заказа из корзины

add_action( 'wp_ajax_oformit_zak', 'oformit_zak' );
add_action( 'wp_ajax_nopriv_oformit_zak', 'oformit_zak' );

function oformit_zak() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			
			$headers = array(
				'From: Заказ на сайте '.$sitename.' <noreply@n-automatic.ru>',
				'content-type: text/html',
			);
			
			$bascetsod = explode(",", $_COOKIE["bascet"]);	
			$postInBascet = "";
			
			$summ = 0;
			
			$rezstr = "";
			$rezstr .= "<table style = 'border-collapse: 1;'>";
			
			$rezstr .= "<tr>";
			
				$rezstr .= "<th>Название</th>";
				$rezstr .= "<th>Колличество</th>";
				$rezstr .= "<th>Сумма</th>";
			$rezstr .= "</tr>";
			
			foreach ($bascetsod as $be) {
				$elempart = explode("|", $be);	
				$postInBascet .= $elempart[0]." "; 
				 
				
				
				$rezstr .= "<tr>";	

					$rezstr .= "<td>";
						$rezstr .= "<a href = '".str_replace("http", "https", get_the_permalink($elempart[0]))."'>".get_the_title($elempart[0])."</a>";
					$rezstr .= "</td>";
					
					$rezstr .= "<td>";
						$rezstr .= $elempart[1];
					$rezstr .= "</td>";
					
					$rezstr .= "<td'>";
						$rezstr .= "<span>".(float)$elempart[1]*(float)$elempart[6] . "</span> руб.";
					$rezstr .= "</td>";
					
				$rezstr .= "</tr>";
				
				
				
				
				$summ += $elempart[1]*$elempart[6];
			}
			
			$rezstr .= '</table>';
			
			$content = $rezstr.'<br/>'.
					   '<strong>Сумма:</strong> '.$summ.' руб. <br/>'.
					   '<strong>Имя:</strong> '.$_REQUEST["namecl"].' <br/>'.
					   '<strong>Телефон:</strong> '.$_REQUEST["phonecl"].' <br/>'.
					   '<strong>E-mail:</strong> '.$_REQUEST["emailcl"].' <br/>'.
					   '<strong>Способ доставки:</strong> '.$_REQUEST["sdostcl"].' <br/>'.
					   '<strong>Адрес доставки:</strong> '.$_REQUEST["adrdost"].' <br/>'.
					   '<strong>Комментарий:</strong> '.$_REQUEST["msgst"].' <br/>';
			
			
			
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
			
			if (wp_mail(carbon_get_theme_option( 'as_email_send' ), 'Заказ через корзину', $content, $headers))
			{
				setcookie("bascet", "", 0, "/", $siteadr);
				wp_die("<span style = 'color:green;'>Ваш заказ оформлен. Мы свяжемся с Вами в ближайшее время.</span>");
			}
			else
			{
				wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
			}
			
			wp_die( $rez );	
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}


// Оформление заказа в 1 клик

add_action( 'wp_ajax_one_click_bay', 'one_click_bay' );
add_action( 'wp_ajax_nopriv_one_click_bay', 'one_click_bay' );

function one_click_bay() {
  if ( empty( $_REQUEST['nonce'] ) ) {
    wp_die( '0' );
  }
  
  if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
    
    $headers = array(
      'From: Сайт '.$sitename.' <noreply@n-avtomatic.ru>',
      'content-type: text/html',
    );
  
    add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
    //carbon_get_theme_option( 'as_email_send' )
    if (wp_mail('lpavel.web@gmail.com', 'Заказ в 1 клик', 
		'<h2>Заказ в 1 клик</h2>'.
		'<br/> <strong>Товар:</strong> ' . $_REQUEST["tovarname"] .
		'<br/> <strong>Характеристики:</strong> ' . $_REQUEST["tovcaracter"] .
		'<br/> <strong>Артикул:</strong> ' . $_REQUEST["tovsku"] .
		'<br/> <strong>Цена:</strong> ' . $_REQUEST["tovprice"] ." руб.".
		'<br/> <strong>Имя:</strong> '.$_REQUEST["clname"].
		'<br/> <strong>Телефон:</strong> '.$_REQUEST["cltel"]
		
		, $headers))
      wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
    else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
    
  } else {
    wp_die( 'НО-НО-НО!', '', 403 );
  }
}

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});

function artabr_opengraph_fix_yandex($lang) {
	$lang_prefix = 'prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article#  profile: http://ogp.me/ns/profile# fb: http://ogp.me/ns/fb#"';
	$lang_fix = preg_replace('!prefix="(.*?)"!si', $lang_prefix, $lang);
	return $lang_fix;
	}
add_filter( 'language_attributes', 'artabr_opengraph_fix_yandex',20,1);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

