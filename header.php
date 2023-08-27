<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" <?php print lang_attributes(); ?>>

<head>

    <title>{content_meta_title}</title>
    <?php if (Config::get('custom.disableGoggleIndex') == 1) : ?>
        <meta name="robots" content="noimageindex,nomediaindex" />
    <?php endif; ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="{content_meta_title}" />
    <meta name="keywords" content="{content_meta_keywords}" />
    <meta name="description" content="{content_meta_description}" />
    <meta property="og:type" content="{og_type}" />
    <meta property="og:url" content="{content_url}" />
    <meta property="og:image" content="{content_image}" />
    <meta property="og:description" content="{og_description}" />
    <meta property="og:site_name" content="{og_site_name}" />

    <script>
        $(document).ready(function() {
            mw.require('icon_selector.js');
            mw.lib.require('bootstrap_select');

            $('.selectpicker').selectpicker();
            mw.iconLoader()
            .addIconSet('fontAwesome')
            .addIconSet('iconsMindLine')
            .addIconSet('iconsMindSolid')
            .addIconSet('mwIcons')
            .addIconSet('materialIcons');
        });
    </script>

    <?php
    print(template_head(true));
    //Seo data for google anaylytical
    $is_installed_status = Config::get('microweber.is_installed');
    (@$is_installed_status) ? basicGoogleAnalytical() : '';
    //end code
    ?>

    <!-- Font Family -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/font-face.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/all.min.css">
    <!-- Remix Icon -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/remixicon/remixicon.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/slick.css">
    <!-- Bootstrap v5.3 -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/bootstrap.min.css">
    <!-- jQuery UI -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/jquery-ui.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/select2.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/owl.theme.green.css">
    <!-- Magnific Popup CSS -->
    <link href="<?php print template_url(); ?>assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" />
    <!-- Meanmenu CSS -->
    <link href="<?php print template_url(); ?>assets/plugins/meanmenu/meanmenu.min.css" rel="stylesheet" />
    <!-- Template CSS  -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php print template_url(); ?>assets/<?php print template_url(); ?>assets/image/index.webp">

    <?php print get_template_stylesheet(); ?>
    <?php include('template_settings.php'); ?>

</head>

    <body class="boost-body <?php print helper_body_classes(); print 'member-nav-inverse ' . $header_style . ' ' . $sticky_header . ' ' . $footer_top_sticky . ' ' . $footer_copyright_sticky. ' ' . $member_menu_icon;  if(defined('IS_HOME')){ print ' homepage'; }?> " >
        <input type="hidden" id="page_id_for_layout_copy" value="<?= PAGE_ID; ?>">
        <?=preloader_html($preloader_shop_name, $count_character);?>
   <!-- header start -->

   <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ht-left">
                            <a href="tel:+1 234 567 890"><i class="fa-solid fa-phone"></i>  Call Us : +1 234 567 890 </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                       <div class="ht-slider-wrapper">
                        <div class="ht-slider">
                            <div class="ht-slider-item text-center">
                                <p>Extra 25% & free delivery on orders above $150 
                                    <a href="#">Learn more</a>
                                </p>
                            </div>
                            <div class="ht-slider-item text-center">
                                <p>Get 20% off On your first order</p>
                            </div>
                        </div>
                        <div class="ht-slider-arrow">
                            <div class="ht-next-arrow">
                                <i class="fa-solid fa-caret-right"></i>
                            </div>
                            <div class="ht-prev-arrow">
                                <i class="fa-solid fa-caret-left"></i>
                            </div>
                        </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <ul class="ht-right-list">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top area end -->
        <div class="header-middle d-none d-lg-block">
            <div class="container">
                <div class="row" style="align-items: center;">
                    <div class="col-lg-1 col-2">
                        <div class="header-logo">
                            <a href="index.html">
                                <img src="./assets/<?php print template_url(); ?>assets/image/logo/head-logo.webp" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="header-search">
                            <input type="text" placeholder="Search Products">
                            <div class="head-search-icon">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="header-language text-end">
                        <button id="language-btn" class="head-language-picker">
                            <span id="selectedLang">English</span> <i class="fa-solid fa-caret-down"></i>
                        </button>
                        <ul class="language-dropdown">
                            <li class="lang-item" >English</li>
                            <li class="lang-item" >Tiếng việt</li>
                            <li class="lang-item" >Français</li>
                            <li class="lang-item" >Español</li>
                            <li class="lang-item" >Italiano</li>
                            <li class="lang-item" >Nederlands</li>
                            <li class="lang-item" >Беларуская</li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header middle area end -->

        <div class="header-btm d-none d-lg-block">
            <div class="container">
             <div class="header-btm-wrapper">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="huge-navbar">
                            <ul class="huge-navitem-wrapper">
                                <li class="huge-nav-item shop-nav">
                                    <a class="hni-text" href="#">Shop <i class="fa-solid fa-caret-down"></i> </a>
                                    <div class="shop-dropdown">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <ul class="shop-dropdown-list">
                                                    <label class="shop-dropdown-title">Fashion</label>
                                                    <li class="sd-list-item">
                                                        <a href="#">Accessories</a>
                                                    </li>
                                                    <li class="sd-list-item">
                                                        <a href="#">Women's</a>
                                                    </li>
                                                    <li class="sd-list-item">
                                                        <a href="#">Men's</a>
                                                    </li>
                                                    <li class="sd-list-item">
                                                        <a href="#">Kids</a>
                                                    </li>
                                                    <li class="sd-list-item">
                                                        <a href="#">Sports</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2">
                                                <ul class="shop-dropdown-list">
                                                    <label class="shop-dropdown-title">Electronics</label>
                                                    <li class="sd-list-item">
                                                        <a href="#">Computer</a>
                                                    </li>
                                                    <li class="sd-list-item">
                                                        <a href="#">Motor</a>
                                                    </li>
                                                    <li class="sd-list-item">
                                                        <a href="#">Smartphone</a>
                                                    </li>
                                                    <li class="sd-list-item">
                                                        <a href="#">Networking</a>
                                                    </li>
                                                    <li class="sd-list-item">
                                                        <a href="#">Tablets</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2">
                                                <ul class="shop-dropdown-list">
                                                    <label class="shop-dropdown-title">Home & Garden</label>
                                                    <li class="sd-list-item">
                                                        <a href="#">Kitchen</a>
                                                    </li>
                                                    <li class="sd-list-item">
                                                        <a href="#">bed room</a>
                                                    </li>
                                                    <li class="sd-list-item">
                                                        <a href="#">garden</a>
                                                    </li>
                                                    <li class="sd-list-item">
                                                        <a href="#">hot cases</a>
                                                    </li>
                                                    <li class="sd-list-item">
                                                        <a href="#">storage</a>
                                                    </li>
                                                    <li class="sd-list-item">
                                                        <a href="#">home goods</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="shop-dropdown-right">
                                                    <img class="w-100 img-fluid" src="./assets/<?php print template_url(); ?>assets/image/shop-drop-img.webp" alt="shop-drop-img">
                                                    <div class="sd-right-text">
                                                        <div class="sdt-label">
                                                            On order of $200
                                                        </div>
                                                        <h3>Bonus Saving</h3>
                                                        <p>psum as their default model text, and a search for will uncover</p>
                                                        <a href="#">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="huge-nav-item vendor-nav">
                                    <a class="hni-text" href="#">Vendors <i class="fa-solid fa-caret-down"></i></a>
                                    <div class="vendor-dropdown">
                                         <div class="row">
                                            <div class="col-lg-6">
                                                <ul class="vendor-dropdown-list">
                                                    <li><a href="#">Shoppe</a></li>
                                                    <li><a href="#">Kristin Store</a></li>
                                                    <li><a href="#">Floyde</a></li>
                                                    <li><a href="#">Robert Fox</a></li>
                                                    <li><a href="#">Eesters</a></li>
                                                    <li><a href="#">Cameroine</a></li>
                                                    <li><a href="#">View all</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="vendor-dropdown-product">
                                                    <div class="vdp-img">
                                                        <img src="./assets/<?php print template_url(); ?>assets/image/product/vendor-product1.webp" alt="vendor-product" class="w-100">
                                                    </div>
                                                    <div class="vdp-text text-center">
                                                        <a href="#">4K IPS Monitor</a>
                                                        <h4>DA 29,300.00</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="vendor-dropdown-product">
                                                    <div class="vdp-img">
                                                        <img src="./assets/<?php print template_url(); ?>assets/image/product/vendor-product2.webp" alt="vendor-product" class="w-100">
                                                    </div>
                                                    <div class="vdp-text text-center">
                                                        <a href="#">Silk Pillows For Gift</a>
                                                        <h4>DA 29,300.00</h4>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                </li>
                                <li class="huge-nav-item">
                                    <a class="hni-text" href="#">Features</a>
                                </li>
                                <li class="huge-nav-item">
                                    <a class="hni-text" href="#">Blogs</a>
                                </li>
                                <li class="huge-nav-item">
                                    <a class="hni-text" href="#">About</a>
                                </li>
                                <li class="huge-nav-item">
                                    <a class="hni-text" href="#">Contact</a>
                                </li>
                                <li class="huge-nav-item">
                                    <a class="hni-text" href="#">FAQs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="login-cart text-end">
                            <a href="#"><i class="fa-solid fa-user"></i> <span>Log In</span> </a>
                            <a href="#"><i class="fa-solid fa-bag-shopping"></i></a> 
                        </div>
                    </div>
                </div>
             </div>
            </div>
        </div>

        <!-- hader bottom area end -->

        <div class="responsive-navbar d-lg-none ">
            <div class="container">
             <div class="res-navbar-wrapper">
                <div class="silderbar-logo">
                    <i class="fa-solid fa-bars-staggered"></i>
                </div>
                <div class="res-logo">
                   <a href="index.html">
                    <img src="./assets/<?php print template_url(); ?>assets/image/logo/head-logo.webp" alt="head-logo">
                   </a>
                </div>
                <div class="res-search">
                    <i class="fa-solid fa-magnifying-glass res-search-icon"></i>
                </div>
             </div>
            </div> 
            <div class="res-searchbar">
                <input type="text" placeholder="Search Products">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="sidebar">
                <div class="sidebar-top d-flex justify-content-between align-items-center">
                    <i class="fa-solid fa-xmark sidebar-cross"></i>
                    <div class="login-cart text-end">
                        <a href="login.html"><i class="fa-solid fa-user"></i> <span>Log In</span> </a>
                        <a href="#"><i class="fa-solid fa-bag-shopping"></i></a> 
                    </div>
                </div>
                <div class="sidebar-item-wrapper">
                    <ul>
                        <li class="sidebar-item res-shop-item">
                         <div class="sidebar-inner-text">
                            <span>Shop</span>
                            <i class="fa-solid fa-caret-down"></i>
                         </div>
                            <div class="shop-res-dropdown">
                                <div class="row">
                                    <div class="col-6 col-sm-4">
                                        <ul class="shop-dropdown-list res-shop-dlIst">
                                            <label class="shop-dropdown-title">Fashion</label>
                                            <li class="sd-list-item">
                                                <a href="#">Accessories</a>
                                            </li>
                                            <li class="sd-list-item">
                                                <a href="#">Women's</a>
                                            </li>
                                            <li class="sd-list-item">
                                                <a href="#">Men's</a>
                                            </li>
                                            <li class="sd-list-item">
                                                <a href="#">Kids</a>
                                            </li>
                                            <li class="sd-list-item">
                                                <a href="#">Sports</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                        <ul class="shop-dropdown-list res-shop-dlIst">
                                            <label class="shop-dropdown-title">Electronics</label>
                                            <li class="sd-list-item">
                                                <a href="#">Computer</a>
                                            </li>
                                            <li class="sd-list-item">
                                                <a href="#">Motor</a>
                                            </li>
                                            <li class="sd-list-item">
                                                <a href="#">Smartphone</a>
                                            </li>
                                            <li class="sd-list-item">
                                                <a href="#">Networking</a>
                                            </li>
                                            <li class="sd-list-item">
                                                <a href="#">Tablets</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <ul class="shop-dropdown-list res-shop-dlIst">
                                            <label class="shop-dropdown-title">Home & Garden</label>
                                            <li class="sd-list-item">
                                                <a href="#">Kitchen</a>
                                            </li>
                                            <li class="sd-list-item">
                                                <a href="#">bed room</a>
                                            </li>
                                            <li class="sd-list-item">
                                                <a href="#">garden</a>
                                            </li>
                                            <li class="sd-list-item">
                                                <a href="#">hot cases</a>
                                            </li>
                                            <li class="sd-list-item">
                                                <a href="#">storage</a>
                                            </li>
                                            <li class="sd-list-item">
                                                <a href="#">home goods</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12">
                                        <div class="shop-dropdown-right">
                                            <img class="w-100 res-shop-img" src="./assets/<?php print template_url(); ?>assets/image/shop-drop-img.webp" alt="shop-drop-img">
                                            <div class="sd-right-text">
                                                <div class="sdt-label">
                                                    On order of $200
                                                </div>
                                                <h3>Bonus Saving</h3>
                                                <p>psum as their default model text, and a search for will uncover</p>
                                                <a href="#" style="background: #5da34c; color: #fff;">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="sidebar-item res-vendor-item">
                           <div class="sidebar-inner-text">
                            <span>Vendors</span>
                            <i class="fa-solid fa-caret-down"></i>
                           </div>
                           <div class="vendor-res-dropdown">
                            <div class="row">
                                <div class="col-12">
                                    <ul class="vendor-dropdown-list">
                                        <li><a href="#">Shoppe</a></li>
                                        <li><a href="#">Kristin Store</a></li>
                                        <li><a href="#">Floyde</a></li>
                                        <li><a href="#">Robert Fox</a></li>
                                        <li><a href="#">Eesters</a></li>
                                        <li><a href="#">Cameroine</a></li>
                                        <li><a href="#">View all</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="vendor-dropdown-product">
                                        <div class="vdp-img">
                                            <img src="./assets/<?php print template_url(); ?>assets/image/product/vendor-product1.webp" alt="vendor-product" class="w-100">
                                        </div>
                                        <div class="vdp-text text-center">
                                            <a href="#">4K IPS Monitor</a>
                                            <h4>DA 29,300.00</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="vendor-dropdown-product">
                                        <div class="vdp-img">
                                            <img src="./assets/<?php print template_url(); ?>assets/image/product/vendor-product2.webp" alt="vendor-product" class="w-100">
                                        </div>
                                        <div class="vdp-text text-center">
                                            <a href="#">Silk Pillows For Gift</a>
                                            <h4>DA 29,300.00</h4>
                                        </div>
                                    </div>
                                </div>
                             </div>
                           </div>
                        </li>
                        <li class="sidebar-item">
                            <a href="#">Features</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="news.html">Blogs</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="about.html">About</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="contact.html">Contact</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="faqs.html">FAQs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <!-- rasponsive navbar area end -->
    
    </header>


    <!-- --------------------- Header area end ------------------ -->


        <script>
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
                $(".header-member-user").on('click', function(){
                    $(".header-user-dropdown").toggleClass("show");
                });
                $('.header-main-menu ul[role="menu"]').clone().appendTo(".mobile-menu-inherit-desktop");
                $('.nav-for-mobile .navbar_new ul').removeClass();
                $('.nav-for-mobile .navbar_new li').removeClass();
                $('.nav-for-mobile .navbar_new li a').removeClass();
                // Mean Menu JS
                $('.nav-for-mobile .navbar_new').meanmenu({
                    meanScreenWidth: "1024",
                    meanMenuContainer: '.nav-for-mobile'
                });

                $(".login_register").on("click",function(){
                    mw.load_module('users/register', '#loginModalModuleRegister');
                });

                $('#loginModal').on('show.bs.modal', function(e) {
                    // $('#loginModalModuleLogin').reload_module();
                    mw.reload_module('users/register');
                    mw.load_module('captcha', '#captcha_login');

                })

                <?php if (isset($_GET['mw_payment_success'])) { ?>
                    $('#js-ajax-cart-checkout-process').attr('mw_payment_success', true);
                <?php } ?>

                $('.js-show-register-window').on('click', function() {
                    $('.js-login-window').hide();
                    $('.js-register-window').show();
                    mw.load_module('captcha/templates/skin-1', '#captcha_register');
                })

                $('.js-show-login-window').on('click', function() {
                    $('.js-register-window').hide();
                    $('.js-login-window').show();
                    mw.load_module('captcha', '#captcha_login');
                })

                $('.header-cat ul').removeClass('nav');
                $('.header-cat ul').removeClass('nav-list');
                $('.header-cat ul li').removeClass('has-sub-menu');
                $('.header-cat ul').removeClass('active-parent');
                $('.header-cat ul li').removeClass('active-parent');
                $('.header-cat ul li a').removeClass('active-parent');
                $('.header-cat .well>ul').addClass('sm sm-simple sm-luminous');
                $('.header-cat .well>ul').smartmenus();
            });
        </script>

        <!--  Wishlist Modal  -->
        <div class="modal fade" id="wishlistModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php (!isset($_GET['slug'])) ? include template_dir() . 'layouts' . DS . "wishlist.php" : ''; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Schließen</button>
                    </div>
                </div>
            </div>
        </div>

        <?php if($sticky_header) : ?>
        <script>
            // Sticky header
            $(window).scroll(function () {
                if ($(window).scrollTop() >= 250) {
                    $(".boost-body .header-area").addClass("sticky-top");
                } else {
                    $(".boost-body .header-area").removeClass("sticky-top");
                }

            });
        </script>
        <?php endif; ?>

<?php if ($user_id) : ?>
    <script>
        $(document).ready(function() {
            $('#ordersModal').on('shown.bs.modal', function(e) {
                mw.reload_module('#user_orders_modal')
            });
        });
    </script>
<?php endif; ?>

<!-- ============= Add to cart ============= -->
<script>
    $(document).ready(function() {
        // Registration modal
        $(".login_register").on("click",function(){
            var params = {};
            params.css = "boost";
            mw.load_module('users/register', '#loginModalModuleRegister', null, params)
        });

        $('#loginModal').on('show.bs.modal', function(e) {
            // $('#loginModalModuleLogin').reload_module();
            mw.reload_module('users/register');
            mw.load_module('captcha', '#captcha_login');

        })

        <?php if (isset($_GET['mw_payment_success'])) { ?>
            $('#js-ajax-cart-checkout-process').attr('mw_payment_success', true);

        <?php } ?>

        $('.js-show-register-window').on('click', function() {
            $('.js-login-window').hide();
            $('.js-register-window').show();
            mw.load_module('captcha/templates/skin-1', '#captcha_register');
        })
        $('.js-show-login-window').on('click', function() {

            $('.js-register-window').hide();
            $('.js-login-window').show();
            mw.load_module('captcha', '#captcha_login');
        })

        // User menu toggle
        $('.user-menu-open').on('click', function() {
            $('.user-menu-dropdown').toggleClass('show');
        })

        // Hide user menu on document click
        $(document).click(function(event) {
            if (!$(event.target).closest('.header-user-menu').length) {
                $('.user-menu-dropdown').removeClass('show');
            }
        });

        $('.js-example-basic-multiple').select2();
        $('.nav-for-mobile .navbar_new ul').removeClass();
        $('.nav-for-mobile .navbar_new li').removeClass();
        $('.nav-for-mobile .navbar_new li a').removeClass();
        // Mean Menu JS
        $('.nav-for-mobile .navbar_new').meanmenu({
            meanScreenWidth: "1024",
            meanMenuContainer: '.nav-for-mobile'
        });
    })
</script>

<?php
    if(file_exists(module_dir('')."global_template_header.php")){
        include module_dir('') . "global_template_header.php";
    }
?>

