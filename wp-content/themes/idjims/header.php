<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="yandex-verification" content="d1e66d86f8329b3a" />
    <meta name="google-site-verification" content="xsDGe9KgtNFuyri46jvoWYrO6W1mNihrTdUum_so7Fg" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/assets/images/favicon-alt.png') ?>"
          type="image/x-icon"/>
     <title><?php wp_title(''); ?>

        </title>

    <?php wp_head(); ?>
    <script type="text/javascript">
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116537806-1"></script>
<script  src="https://b24go.com/form/v3/aegis42.bitrix24.ru/form.js" async></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116537806-1');

    // vk
  (window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-238025-5LSOi';
</script>
    <!— Marquiz script start —>
    <script src="//script.marquiz.ru/v1.js"  type="application/javascript"></script>
    <script> document.addEventListener("DOMContentLoaded", function() { Marquiz.init({ id: '5a82a8db6db2f600180525a3', host: '//quiz.marquiz.ru', template: 'default' }); }); </script>
    <!— Marquiz script end —>

<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3032395", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=3032395;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->

<!-- Rating@Mail.ru counter dynamic remarketing appendix -->
<script type="text/javascript">
var _tmr = _tmr || [];
_tmr.push({
    type: 'itemView',
    productid: 'VALUE',
    pagetype: 'VALUE',
    list: 'VALUE',
    totalvalue: 'VALUE'
});
</script>
<!-- // Rating@Mail.ru counter dynamic remarketing appendix -->

<?php
global $city, $isRegion;
$protocol = 'https://';
$city['name'] = get_blog_option(get_sites()->blog_id, 'siteregion');
$city['name_rod'] = get_blog_option(get_sites()->blog_id, 'siteregion_rod');
$city['address'] = get_blog_option(get_sites()->blog_id, 'region_address');
$currentUrl = get_blog_details()->siteurl;
$currentPath = get_blog_details()->path;
$isRegion = ($city['name'] !== 'Кемерово') ? true : false;
?>
</head>

<body <?php body_class(); ?> >
<div id="page" class="site">
    <header class="site-header">
        <div class="top-header-user clearfix">
          <div class="container">
              <div class="select select_mode_radio select_theme_islands select_size_m i-bem" data-bem='{"select":{}}'>
                <input id="region-changer" class="select__control" type="hidden" autocomplete="off">
                <button class="button button_size_m button_theme_islands select__button button__control i-bem" data-bem='{"button":{}}' role="listbox" a type="button">
                  <span class="button__text"><?= $city['name']; ?></span>
                  <span class="icon select__tick"></span>
                </button>
                <div class="popup popup_target_anchor popup_theme_islands popup_autoclosable i-bem" data-bem='{"popup":{"directions":["bottom-left","bottom-right","top-left","top-right"]}}' aria-hidden="true">
                  <div class="menu menu_size_m menu_theme_islands menu_mode_radio select__menu menu__control i-bem" data-bem='{"menu":{}}'>
                  <?php
                  foreach (get_sites() as $regions):
                    $cityLink = $protocol . $regions->domain . $regions->path;
                    $cityName = get_blog_option($regions->blog_id, 'siteregion');
                  ?>
                    <div class="menu__item <?php if($currentPath == $regions->path): ?>menu__item_checked<?php endif; ?> menu__item_theme_islands i-bem" data-bem='{"menu__item":{"val":"<?= $cityLink ?>"}}' role="option" aria-checked="true"><?= $cityName; ?></div>
                  <?php endforeach; ?>
                  </div>
                </div>
              </div>

              <script type="text/javascript">
              jQuery(document).ready(function($){
                var url_params = window.location.href.split('<?= $currentUrl; ?>', 2);

                $('.menu__item').on('click', function(){
                  var data_arr = $(this).data('bem')['menu__item']['val'];
                  window.location.href = $(this).data('bem')['menu__item']['val'] + url_params[1];
                });
              });
              </script>

          <?php if (is_user_logged_in()) {
                  echo '<a href="' . wp_logout_url(LinksTheme('login')) . '"  >Выйти</a>
                        <a href="' . LinksTheme('user-profile') . '"  ><img src="' . get_theme_file_uri('/assets/images/user.png') . '" alt=""/>Личный кабинет</a>';
              } else {
                  echo '<a href="' . LinksTheme('login') . '"><img src="' . get_theme_file_uri('/assets/images/user.png') . '" alt=""/> Войти/Зарегистрироваться</a>';
          } ?>
          </div>
        </div>
        <div class="container">
            <div class="top-hedaer-block">
                <div id="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_theme_file_uri('/assets/images/logo-a-1.png') ?>" alt="Логотип">
                        <!-- <div>ИДЖИС</div> -->
                        <p>Живи без долгов!</p>
                    </a>
                </div>
                <div class="center-top-heder">
                    <div class="center-top-heder-bre">
                        <div class="center-top-heder-walpaper clearfix">
                            <img src="<?php echo get_theme_file_uri('/assets/images/cal-a-2.png') ?>">
                            <div class="center-top-heder-holder">
                                <p>Время работы</p>
                                <div>с 9:00 до 17:00</div>
                            </div>
                        </div>
                        <div class="center-top-heder-walpaper clearfix">
                            <img src="<?php echo get_theme_file_uri('/assets/images/phone-a-2.png') ?>">
                            <div class="center-top-heder-holder">
                                <p>Звоните нам</p>
                                <div><?= ($city['name'] == 'Симферополь') ? '<a href="tel:89781005125">8 (978) 100-51-25</a>' : '<a href="tel:88007079863">8 800 707 98 63</a><span class="center-top-heder-holder__freecall">(звонок бесплатный)</span>'; ?></div>
                                <!-- <div class="callibri"><a href="tel:89235374767">8 923 537 47 67</a></div> -->
                                <!--<div class="last"><a href="tel:88007079863">8 800 707 98 63</a></div>-->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="right-top-header">
                    <a href="#" class="btn btn-link-modal">
                        <div>Оставить заявку</div>
                        <p>Мы перезвоним Вам</p>
                    </a>
                </div>
            </div><!-- end top hedaer-->
        </div><!-- end container-->

        <div class="bottom-header clearfix">
            <div class="container clearfix relative">
                <div class="bottom-header-wallpaper">
                    <ul class="navigation clearfix">
                        <li><a href="<?php echo home_url(); ?>/">Главная</a></li>
                        <li>
                            <a class="open-ul" href="#">
                                Услуги
                                <i class="icon-down-dir"></i>
                            </a>
                            <ul class="sub-menu">
                                <!--<li><a href="#">Финансовая защита</a></li>-->
                                <li><a href="<?php echo LinksTheme('banlrotstvo-fl'); ?>/">Банкротство гражданина</a></li>
                                <li><a href="<?php echo LinksTheme('bankrotstvo-ipotechikov'); ?>/">Банкротство ипотечника</a></li>
                                <li><a href="<?php echo LinksTheme('bankrotstvo-poruchitelya'); ?>/">Банкротство поручителя</a></li>
                                <li><a href="<?php echo LinksTheme('bankrotstvo-ip'); ?>/">Банкротство ИП</a></li>
                                <li><a href="<?php echo LinksTheme('bankrotstvo-ooo'); ?>/">Банкротство ООО</a></li>
                                <li><a href="<?php echo LinksTheme('zashchita-ot-davleniya-kollektorov-i-bankov'); ?>/">Защита от давления коллекторов и банков</a></li>
                                <li><a href="<?php echo LinksTheme('otmena-shtrafov-i-neustoyek'); ?>/">Отмена штрафов и неустоек, уменьшение ежемесячных платежей</a></li>
                                <li><a href="<?php echo LinksTheme('otmena-sudebnogo-prikaza'); ?>/">Отмена судебного приказа</a></li>
                                <li><a href="<?php echo LinksTheme('zashchita-v-sude'); ?>/">Защита (представительство) в суде</a></li>
                                <li><a href="<?php echo LinksTheme('umensheniye-yezhemesyachnykh-platezhey'); ?>/">Уменьшение ежемесячных платежей</a></li>
                                <!--<li><a href="#">Юрист по банкротству</a></li>-->
                            </ul>

                        </li>
                        <li>
                            <a class="open-ul" href="#">
                                Полезная информация
                                <i class="icon-down-dir"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo LinksTheme('contact'); ?>/">Контакты</a></li>
                                <li><a href="<?php echo LinksTheme('reviews'); ?>/">Отзывы</a></li>
                                <li><a href="<?php echo LinksTheme('blog'); ?>/">Блог</a></li>
                                <li><a href="<?php echo LinksTheme('question-answer'); ?>/">Вопрос-ответ</a></li>
                                <li><a href="<?php echo LinksTheme('instruction'); ?>/">Инструкция по банкротству</a></li>
                            </ul>
                        </li>


                        <li><a href="<?php echo LinksTheme('calculate'); ?>/">Калькулятор банкротства</a></li>
                        <li><a href="<?php echo LinksTheme('login'); ?>/">Банкротство бесплатно</a></li>
                    </ul>

                </div>
                <div id="mobile-bar">

                    <a class="hamburger hamburger--slider">
							 	  	<span class="hamburger-box">
							 	    	<span class="hamburger-inner"></span>
							 	  	</span>
                    </a>


                </div>
                <ul class="social-top clearfix">
                    <li><a href="https://vk.com/bankruptcy42" target="_blank"><i class="icon-vkontakte"></i></a></li>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="https://ok.ru/group/55245396115708" target="_blank"><i class="icon-odnoklassniki"></i></a></li>
                </ul>
            </div>
        </div><!-- end container-->
</div><!-- end bottom header-->


</header>
<div class="overlay-layer"></div>
<div class="modal-form header-modal">
    <div class="close-modal-block">
        <div class="close-modal-block_wallpaper"></div>
    </div>
    <div class="title-section center white">Оставьте заявку</div>
    <?php echo do_shortcode('[contact-form-7 id="17" title="Untitled"]'); ?>


    <img src="<?php echo get_theme_file_uri('/assets/images/bg-modal-2.png') ?>">
</div>


<div id="content" class="site-content">
