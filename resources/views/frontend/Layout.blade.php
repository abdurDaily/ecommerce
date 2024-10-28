<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> E-commerce </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="frontend_assets/images/logo/favicon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
    <!-- select 2 -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/select2.min.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/slick.css') }}">
    <!-- Jquery Ui -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/jquery-ui.css') }}">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/animate.css') }}">
    <!-- AOS Animation -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/aos.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/main.css') }}">
</head> 
<body>
    
<!--==================== Preloader Start ====================-->
  <div class="preloader">
    <img src="{{ asset('frontend_assets/images/icon/preloader.gif') }}">
  </div>
<!--==================== Preloader End ====================-->

<!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Scroll to Top End Here ==================== -->
<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<!-- ==================== Scroll to Top End Here ==================== -->

<!-- ==================== Search Box Start Here ==================== -->
 <form action="index.html#" class="search-box">
  <button type="button" class="search-box__close position-absolute inset-block-start-0 inset-inline-end-0 m-16 w-48 h-48 border border-gray-100 rounded-circle flex-center text-white hover-text-gray-800 hover-bg-white text-2xl transition-1">
    <i class="ph ph-x"></i>
  </button>
  <div class="container">
    <div class="position-relative">
      <input type="text" class="form-control py-16 px-24 text-xl rounded-pill pe-64" placeholder="Search for a product or brand">
      <button type="submit" class="w-48 h-48 bg-main-600 rounded-circle flex-center text-xl text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8">
        <i class="ph ph-magnifying-glass"></i>
      </button>
    </div>
  </div>
 </form>
<!-- ==================== Search Box End Here ==================== -->

<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu scroll-sm d-lg-none d-block">
    <button type="button" class="close-button"> <i class="ph ph-x"></i> </button>
    <div class="mobile-menu__inner">
        <a href="index.html" class="mobile-menu__logo">
            <img src="frontend_assets/images/logo/logo.png" alt="Logo">
        </a>
        <div class="mobile-menu__menu">
            <!-- Nav Menu Start -->
<ul class="nav-menu flex-align nav-menu--mobile">
    <li class="on-hover-item nav-menu__item has-submenu activePage">
        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item activePage">
                <a href="index.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Grocery</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Electronics</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-three.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Fashion</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="shop.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details Two</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="cart.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Cart</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="wishlist.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Wishlist</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="checkout.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Checkout </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="become-seller.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Become Seller</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="account.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Account</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Vendors</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendor Details </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors Two</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-two-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors Two Details</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog Details</a>
            </li>
        </ul>
    </li>
    <li class="nav-menu__item">
        <a href="contact.html" class="nav-menu__link">Contact Us</a>
    </li>
</ul>
<!-- Nav Menu End -->
        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->


    <!-- ======================= Middle Top Start ========================= -->
<div class="header-top bg-main-600 flex-between">
    <div class="container container-lg">
        <div class="flex-between flex-wrap gap-8">
            <ul class="flex-align flex-wrap d-none d-md-flex">
                <li class="border-right-item"><a href="index.html#shipping" class="text-white text-sm hover-text-decoration-underline">Become A Seller</a></li>
                <li class="border-right-item"><a href="index.html#shipping" class="text-white text-sm hover-text-decoration-underline">About us</a></li>
                <li class="border-right-item"><a href="index.html#shipping" class="text-white text-sm hover-text-decoration-underline">Free Delivery</a></li>
                <li class="border-right-item"><a href="index.html#shipping" class="text-white text-sm hover-text-decoration-underline">Returns Policy</a></li>
            </ul>
        <ul class="header-top__right flex-align flex-wrap">
                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="javascript:void(0)" class="text-white text-sm py-8">Help Center</a>
                    <ul class="on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li class="nav-submenu__item">
                            <a href="index.html#" class="nav-submenu__link hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <span class="text-sm d-flex"><i class="ph ph-headset"></i></span>
                                Call Center
                            </a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="index.html#" class="nav-submenu__link hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <span class="text-sm d-flex"><i class="ph ph-chat-circle-dots"></i></span>
                                Live Chat
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="javascript:void(0)" class="selected-text text-white text-sm py-8">Eng</a>
                    <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="frontend_assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                English
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="frontend_assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Japan
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="frontend_assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                French
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="frontend_assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Germany
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="frontend_assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Bangladesh
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="frontend_assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                South Korea
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="javascript:void(0)" class="selected-text text-white text-sm py-8">USD</a>
                   <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="frontend_assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                USD
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="frontend_assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Yen
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="frontend_assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Franc 
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="frontend_assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                EURO
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="frontend_assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                BDT
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="frontend_assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                WON
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="border-right-item">
                    <a href="account.html" class="text-white text-sm py-8 flex-align gap-6"> 
                        <span class="icon text-md d-flex"> <i class="ph ph-user-circle"></i> </span> 
                        <span class="hover-text-decoration-underline">My Account</span>
                     </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ======================= Middle Top End ========================= -->

    <!-- ======================= Middle Header Start ========================= -->
<header class="header-middle bg-color-one border-bottom border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner flex-between">
            <!-- Logo Start -->
            <div class="logo">
                <a href="index.html" class="link">
                    <img src="frontend_assets/images/logo/logo.png" alt="Logo">
                </a>
            </div>
            <!-- Logo End  -->

            <!-- form location Start -->
            <form action="index.html#" class="flex-align flex-wrap form-location-wrapper">
                <div class="search-category d-flex h-48 select-border-end-0 radius-end-0 search-form d-sm-flex d-none">
                    <select class="js-example-basic-single border border-gray-200 border-end-0" name="state">
                        <option value="1" selected disabled>All Categories</option>
                        <option value="1">Grocery</option>
                        <option value="1">Breakfast & Dairy</option>
                        <option value="1">Vegetables</option>
                        <option value="1">Milks and Dairies</option>
                        <option value="1">Pet Foods & Toy</option>
                        <option value="1">Breads & Bakery</option>
                        <option value="1">Fresh Seafood</option>
                        <option value="1">Fronzen Foods</option>
                        <option value="1">Noodles & Rice</option>
                        <option value="1">Ice Cream</option>
                    </select>
    
                    <div class="search-form__wrapper position-relative">
                        <input type="text" class="search-form__input common-input py-13 ps-16 pe-18 rounded-end-pill pe-44" placeholder="Search for a product or brand">
                        <button type="submit" class="w-32 h-32 bg-main-600 rounded-circle flex-center text-xl text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8"><i class="ph ph-magnifying-glass"></i></button>
                    </div>
                </div>

                <div class="location-box bg-white flex-align gap-8 py-6 px-16 rounded-pill border border-gray-100">
                    <span class="text-gray-900 text-xl d-xs-flex d-none"><i class="ph ph-map-pin"></i></span>
                    <div class="line-height-1">
                        <span class="text-gray-600 text-xs">Your Location</span>
                        <div class="line-height-1">
                            <select class="js-example-basic-single border border-gray-200 border-end-0" name="state">
                                <option value="1">Alabama</option>
                                <option value="1">Alaska</option>
                                <option value="1">Arizona</option>
                                <option value="1">Delaware</option>
                                <option value="1">Florida</option>
                                <option value="1">Georgia</option>
                                <option value="1">Hawaii</option>
                                <option value="1">Indiana</option>
                                <option value="1">Marzland</option>
                                <option value="1">Nevada</option>
                                <option value="1">New Jersey</option>
                                <option value="1">New Mexico</option>
                                <option value="1">New York</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <!-- form location start -->
             
            <!-- Header Middle Right start -->
            <div class="header-right flex-align d-lg-block d-none">
                <div class="flex-align flex-wrap gap-12">
    <button type="button" class="search-icon flex-align d-lg-none d-flex gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative item-hover__text">
            <i class="ph ph-magnifying-glass"></i>
        </span>
    </button>
    <a href="cart.html" class="flex-align gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-heart"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-gray-500 item-hover__text d-none d-lg-flex">Wishlist</span>
    </a>
    <a href="cart.html" class="flex-align gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-shopping-cart-simple"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-gray-500 item-hover__text d-none d-lg-flex">Cart</span>
    </a>
</div>
            </div>
            <!-- Header Middle Right End  -->
        </nav>
    </div>
</header>
<!-- ======================= Middle Header End ========================= -->

    <!-- ==================== Header Start Here ==================== -->
<header class="header bg-white border-bottom border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner d-flex justify-content-between gap-8">
            <div class="flex-align menu-category-wrapper">

                <!-- Category Dropdown Start -->
                <div class="category on-hover-item">
                    <button type="button" class="category__button flex-align gap-8 fw-medium p-16 border-end border-start border-gray-100 text-heading">
                        <span class="icon text-2xl d-xs-flex d-none"><i class="ph ph-dots-nine"></i></span>
                        <span class="d-sm-flex d-none">All</span>  Categories
                        <span class="arrow-icon text-xl d-flex"><i class="ph ph-caret-down"></i></span>
                    </button>

                    <div class="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper">

                        <button type="button" class="close-responsive-dropdown rounded-circle text-xl position-absolute inset-inline-end-0 inset-block-start-0 mt-4 me-8 d-lg-none d-flex"> <i class="ph ph-x"></i> </button>

                        <!-- Logo Start -->
                        <div class="logo px-16 d-lg-none d-block">
                            <a href="index.html" class="link">
                                <img src="frontend_assets/images/logo/logo.png" alt="Logo">
                            </a>
                        </div>
                        <!-- Logo End -->

                        <ul class="scroll-sm p-0 py-8 w-300 max-h-400 overflow-y-auto">
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-carrot"></i></span>
                                    <span>Vegetables &amp; Fruit</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
    
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Vegetables &amp; Fruit</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html">Potato &amp; Tomato</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Cucumber &amp; Capsicum</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Leafy Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Root Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Beans &amp; Okra</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Cabbage &amp; Cauliflower</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Gourd &amp; Drumstick</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Specialty</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Beverages</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Beverages</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html">Soda & Cocktail Mix </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Sports & Energy Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Non Alcoholic Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Packaged Water </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Spring Water</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Flavoured Water    </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Meats & Seafood</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Meats & Seafood</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Fresh Meat </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Frozen Meat</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Marinated Meat</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Fresh & Frozen Meat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Breakfast & Dairy</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Breakfast & Dairy</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Oats & Porridge</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Kids Cereal</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Muesli</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Flakes</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Granola & Cereal Bars</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Instant Noodles</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Frozen Foods</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Frozen Foods</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Instant Noodles </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Hakka Noodles</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Cup Noodles</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Vermicelli</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Instant Pasta</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Biscuits & Snacks</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Biscuits & Snacks</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Salted Biscuits </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Marie, Health, Digestive</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Cream Biscuits & Wafers </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Glucose & Milk biscuits</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Cookies</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Grocery & Staples</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Grocery & Staples</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Lemon, Ginger & Garlic </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Indian & Exotic Herbs</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Orangic Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Orangic Fruits </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Orangic Dry Fruits</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Orangic Dals & pulses</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Orangic Millet & Flours</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> 
                <!-- Category Dropdown End  -->
    
                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">
                    <!-- Nav Menu Start -->
<ul class="nav-menu flex-align ">
    <li class="on-hover-item nav-menu__item has-submenu activePage">
        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item activePage">
                <a href="index.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Grocery</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Electronics</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-three.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Fashion</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="shop.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details Two</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="cart.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Cart</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="wishlist.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Wishlist</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="checkout.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Checkout </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="become-seller.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Become Seller</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="account.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Account</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Vendors</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendor Details </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors Two</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-two-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors Two Details</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog Details</a>
            </li>
        </ul>
    </li>
    <li class="nav-menu__item">
        <a href="contact.html" class="nav-menu__link">Contact Us</a>
    </li>
</ul>
<!-- Nav Menu End -->
                </div>
                <!-- Menu End  -->
            </div>

            <!-- Header Right start -->
            <div class="header-right flex-align">
                <a href="tel:01234567890" class="bg-main-600 text-white p-12 h-100 hover-bg-main-800 flex-align gap-8 text-lg d-lg-flex d-none"> 
                    <div class="d-flex text-32"><i class="ph ph-phone-call"></i></div>
                    01- 234 567 890
                </a>
                <div class="me-16 d-lg-none d-block">
                    <div class="flex-align flex-wrap gap-12">
    <button type="button" class="search-icon flex-align d-lg-none d-flex gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative item-hover__text">
            <i class="ph ph-magnifying-glass"></i>
        </span>
    </button>
    <a href="cart.html" class="flex-align gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-heart"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-gray-500 item-hover__text d-none d-lg-flex">Wishlist</span>
    </a>
    <a href="cart.html" class="flex-align gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-shopping-cart-simple"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-gray-500 item-hover__text d-none d-lg-flex">Cart</span>
    </a>
</div>
                </div>
                <button type="button" class="toggle-mobileMenu d-lg-none ms-3n text-gray-800 text-4xl d-flex"> <i class="ph ph-list"></i> </button>
            </div>
            <!-- Header Right End  -->
        </nav>
    </div>
</header>
<!-- ==================== Header End Here ==================== -->






@yield('frontend_contains')




































    
<!-- ==================== Footer Start Here ==================== -->
<footer class="footer py-120">
    <img src="frontend_assets/images/bg/body-bottom-bg.png" alt="BG" class="body-bottom-bg">
    <div class="container container-lg">
        <div class="footer-item-wrapper d-flex align-items-start flex-wrap">
            <div class="footer-item" data-aos="fade-up" data-aos-duration="200">
                <div class="footer-item__logo">
                    <a href="index.html"> <img src="frontend_assets/images/logo/logo.png" alt=""></a>
                </div>
                <p class="mb-24">We're Grocery Shop, an innovative team of food supliers.</p>
                <div class="flex-align gap-16 mb-16">
                    <span class="w-32 h-32 flex-center rounded-circle bg-main-600 text-white text-md flex-shrink-0"><i class="ph-fill ph-map-pin"></i></span>
                    <span class="text-md text-gray-900 ">789 Inner Lane, Biyes park, California, USA</span>
                </div>
                <div class="flex-align gap-16 mb-16">
                    <span class="w-32 h-32 flex-center rounded-circle bg-main-600 text-white text-md flex-shrink-0"><i class="ph-fill ph-phone-call"></i></span>
                    <div class="flex-align gap-16 flex-wrap">
                        <a href="tel:+00123456789" class="text-md text-gray-900 hover-text-main-600">+00 123 456 789</a>
                        <span class="text-md text-main-600 ">or</span>
                        <a href="tel:+00987654012" class="text-md text-gray-900 hover-text-main-600">+00 987 654 012</a>
                    </div>
                </div>
                <div class="flex-align gap-16 mb-16">
                    <span class="w-32 h-32 flex-center rounded-circle bg-main-600 text-white text-md flex-shrink-0"><i class="ph-fill ph-envelope"></i></span>
                    <a href="mailto:support24@marketpro.com" class="text-md text-gray-900 hover-text-main-600">support24@marketpro.com</a>
                </div>
            </div>
            
            <div class="footer-item" data-aos="fade-up" data-aos-duration="400">
                <h6 class="footer-item__title">Information</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Become a Vendor</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Affiliate Program</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Privacy Policy</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Our Suppliers</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Extended Plan</a>
                    </li>
                    <li class="">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Community</a>
                    </li>
                </ul>
            </div>

            <div class="footer-item" data-aos="fade-up" data-aos-duration="600">
                <h6 class="footer-item__title">Customer Support</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Help Center</a>
                    </li>
                    <li class="mb-16">
                        <a href="contact.html" class="text-gray-600 hover-text-main-600">Contact Us</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Report Abuse</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Submit and Dispute</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Policies & Rules</a>
                    </li>
                    <li class="">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Online Shopping</a>
                    </li>
                </ul>
            </div>

            <div class="footer-item" data-aos="fade-up" data-aos-duration="800">
                <h6 class="footer-item__title">My Account</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">My Account</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Order History</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Shoping Cart</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Compare</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Help Ticket</a>
                    </li>
                    <li class="">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Wishlist</a>
                    </li>
                </ul>
            </div>

            <div class="footer-item" data-aos="fade-up" data-aos-duration="1000">
                <h6 class="footer-item__title">Daily Groceries</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Dairy & Eggs</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Meat & Seafood</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Breakfast Food</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Household Supplies</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Bread & Bakery</a>
                    </li>
                    <li class="">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Pantry Staples</a>
                    </li>
                </ul>
            </div>
            
            <div class="footer-item" data-aos="fade-up" data-aos-duration="1200">
                <h6 class="">Shop on The Go</h6>
                <p class="mb-16">Marketpro App is available.  Get it now</p>
                <div class="flex-align gap-8 my-32">
                    <a href="https://www.apple.com/store" class="">
                        <img src="frontend_assets/images/thumbs/store-img1.png" alt="">
                    </a>
                    <a href="https://play.google.com/store/apps?hl=en" class="">
                        <img src="frontend_assets/images/thumbs/store-img2.png" alt="">
                    </a>
                </div>

                <ul class="flex-align gap-16">
    <li>
        <a href="https://www.facebook.com" class="w-44 h-44 flex-center bg-main-100 text-main-600 text-xl rounded-circle hover-bg-main-600 hover-text-white">
            <i class="ph-fill ph-facebook-logo"></i>
        </a>
    </li>
    <li>
        <a href="https://www.twitter.com" class="w-44 h-44 flex-center bg-main-100 text-main-600 text-xl rounded-circle hover-bg-main-600 hover-text-white">
            <i class="ph-fill ph-twitter-logo"></i>
        </a>
    </li>
    <li>
        <a href="https://www.linkedin.com" class="w-44 h-44 flex-center bg-main-100 text-main-600 text-xl rounded-circle hover-bg-main-600 hover-text-white">
            <i class="ph-fill ph-instagram-logo"></i>
        </a>
    </li>
    <li>
        <a href="https://www.pinterest.com" class="w-44 h-44 flex-center bg-main-100 text-main-600 text-xl rounded-circle hover-bg-main-600 hover-text-white">
            <i class="ph-fill ph-linkedin-logo"></i>
        </a>
    </li>
</ul>
            </div>
        </div>
    </div>
</footer>

<!-- bottom Footer -->
<div class="bottom-footer bg-color-one py-8">
    <div class="container container-lg">
        <div class="bottom-footer__inner flex-between flex-wrap gap-16 py-16">
            <p class="bottom-footer__text wow fadeInLeftBig">Marketpro eCommerce &copy; 2024. All Rights Reserved </p>
            <div class="flex-align gap-8 flex-wrap wow fadeInRightBig">
                <span class="text-heading text-sm">We Are Accepting</span>
                <img src="frontend_assets/images/thumbs/payment-method.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- ==================== Footer End Here ==================== -->
  

    
    <!-- Jquery js -->
    <script src="{{ asset('frontend_assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('frontend_assets/js/boostrap.bundle.min.js') }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('frontend_assets/js/phosphor-icon.js') }}"></script>
    <!-- Select 2 -->
    <script src="{{ asset('frontend_assets/js/select2.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('frontend_assets/js/slick.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('frontend_assets/js/count-down.js') }}"></script>
    <!-- jquery UI js -->
    <script src="{{ asset('frontend_assets/js/jquery-ui.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('frontend_assets/js/wow.min.js') }}"></script>
    <!-- AOS Animation -->
    <script src="{{ asset('frontend_assets/js/aos.js') }}"></script>
    <!-- marque -->
    <script src="{{ asset('frontend_assets/js/marque.min.js') }}"></script>
    <!-- marque -->
    <script src="{{ asset('frontend_assets/js/vanilla-tilt.min.js') }}"></script>
    <!-- Counter -->
    <script src="{{ asset('frontend_assets/js/counter.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('frontend_assets/js/main.js') }}"></script>



    </body>
</html>