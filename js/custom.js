jQuery(document).ready(function ($) {
  $('.main-slider').slick({
    slidesToShow: 1,
    prevArrow: '<div class="slider-arrow slider-arrow-prev"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow-next"></div>',
  });
  $(".category-descr__slider").slick({
    slidesToShow: 1,
    prevArrow: '<div class="slider-arrow slider-arrow-prev"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow-next"></div>',
    autoplay: true,
  });
  $('.product-slider__wrapper').slick({
    slidesToShow: 1,
    prevArrow: '<div class="slider-arrow slider-arrow-prev"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow-next"></div>',
    fade: true,
    cssEase: 'linear'
  });
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    asNavFor: '.slider-nav'
  });
  var vertical = true;
  if ($(window).width() < 500) {
    vertical = false;
  }
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    arrows: false,
    verticalSwiping: true,
    vertical: vertical,
    focusOnSelect: true
  });
  $(".tab_item").not(":first").hide();
  $(".tab").click(function () {
    $(".tab").removeClass("active").eq($(this).index()).addClass("active");
    $(".tab_item").hide().eq($(this).index()).fadeIn()
  }).eq(0).addClass("active");
  $('.qty-minus').click(function () {
    var cur_qty = $("#qty-product").val();
    if (cur_qty > 1) {
      cur_qty--;
    } else {
      cur_qty = 1;
    }
    $("#qty-product").val(cur_qty);
  });
  $('.qty-plus').click(function () {
    var cur_qty = $("#qty-product").val();
    cur_qty++;
    $("#qty-product").val(cur_qty);
  });
  $(".hamburger").click(function () {
    $('.mob-menu').css('bottom', '0');
  });
  $('.close-menu').click(function () {
    $('.mob-menu').css('bottom', '110%');
  });
  $('.popup-youtube').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });
  $(".header").scrollToFixed({
    marginTop: -1
  });


  jQuery(".dialog-cb-button__decstop a").click(function (e) {
    e.preventDefault();
    headerwin = jQuery(this).data("headerwin");
    btn = jQuery(this).data('btn');

    jQuery('#phone-modal').arcticmodal();
  });

  $(".instruction-item__title").click(function () {
    $(this).next().slideToggle();
    if ($(this).children('span').hasClass('active')) {
      $(this).children('span').removeClass('active');
    } else {
      $(this).children('span').addClass('active')
    }
  });

  $('figure img').parent('a').attr("data-lightbox", 'gallery');

  var inputmask_96e76a5f = { "mask": "+7(999)999-99-99" };
  jQuery("input[type=tel]").inputmask(inputmask_96e76a5f);

  var $page = $('html, body');
  $('.menu a[href*="#"]').click(function () {
    $page.animate({
      scrollTop: $($.attr(this, 'href')).offset().top - 100
    }, 400);
    return false;
  });

  // //Калькулятор
  $('.making-calc__input').on('keyup', function () {
    height = document.getElementById('height').value;
    width = document.getElementById('width').value;
    if (width == "") {
      // alert("Вы не указали Ширину ворот");
    } else if (height == "") {
      // alert("Вы не указали Высоту ворот");
    } else {
      cena = 0.005;
      ploschad = parseFloat(height) * parseFloat(width);
      // document.getElementById('ploschad').innerHTML = "Площадь равна: "+ ploschad +" кв. м.";
      stoimost = ploschad * cena;
      document.getElementById('stoimost').innerHTML = "" + stoimost + " руб.";
    }
  });

});


//BURGER
const iconMenu = document.querySelector(".icon-menu");
const blackOut = document.querySelector(".blackout");
const mobMenu = document.querySelector(".header__mob-menu");
if (iconMenu) {
  iconMenu.addEventListener("click", function () {
    iconMenu.classList.toggle("active");
    blackOut.classList.toggle("active");
    mobMenu.classList.toggle("active");
  });
}

// Закрытие моб меню при клике вне области меню 
window.addEventListener('click', e => { // при клике в любом месте окна браузера
  const target = e.target // находим элемент, на котором был клик
  if (!target.closest('.icon-menu') && !target.closest('.header__mob-menu')) { // если этот элемент или его родительские элементы не окно навигации и не кнопка
    iconMenu.classList.remove('active') // то закрываем окно навигации, удаляя активный класс
    mobMenu.classList.remove('active')
    blackOut.classList.remove("active");
  }
})
