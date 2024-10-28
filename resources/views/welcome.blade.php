@extends('frontend.Layout')
@section('frontend_contains')
    

    <!-- ============================ Banner Section start =============================== -->
<div class="banner">
    <div class="container container-lg">
        <div class="banner-item rounded-24 overflow-hidden position-relative arrow-center">
            <a href="index.html#featureSection" class="scroll-down w-84 h-84 text-center flex-center bg-main-600 rounded-circle border border-5 text-white border-white position-absolute start-50 translate-middle-x bottom-0 hover-bg-main-800">
                <span class="icon line-height-0"><i class="ph ph-caret-double-down"></i></span> 
            </a>
            
            <img src="frontend_assets/images/bg/banner-bg.png" alt="" class="banner-img position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 z-n1 object-fit-cover rounded-24">

            <div class="flex-align">
                <button type="button" id="banner-prev" class="slick-prev slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                    <i class="ph ph-caret-left"></i>
                </button>
                <button type="button" id="banner-next" class="slick-next slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                    <i class="ph ph-caret-right"></i>
                </button>
            </div>

            <div class="banner-slider">
                <div class="banner-slider__item">   
                    <div class="banner-slider__inner flex-between position-relative">
                        <div class="banner-item__content">
                            <h1 class="banner-item__title wow bounceInDown"  data-wow-duration="1s">Daily Grocery Order and Get Express Delivery</h1>
                            <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 wow bounceInUp"  data-wow-duration="1s">
                                Explore Shop <span class="icon text-xl d-flex"><i class="ph ph-shopping-cart-simple"></i>   </span> 
                            </a>
                        </div>
                        <div class="banner-item__thumb wow bounceIn" data-wow-duration="1s" data-tilt data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-scale="1.06">
                            <img src="frontend_assets/images/thumbs/banner-img1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="banner-slider__item">   
                    <div class="banner-slider__inner flex-between position-relative">
                        <div class="banner-item__content">
                            <h1 class="banner-item__title wow bounceInDown"  data-wow-duration="1s">Daily Grocery Order and Get Express Delivery</h1>
                            <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 wow bounceIn"  data-wow-duration="1s">
                                Explore Shop <span class="icon text-xl d-flex"><i class="ph ph-shopping-cart-simple"></i>   </span> 
                            </a>
                        </div>
                        <div class="banner-item__thumb wow bounceIn" data-wow-duration="1s" data-tilt data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-scale="1.06">
                            <img src="frontend_assets/images/thumbs/banner-img3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
<!-- ============================ Banner Section End =============================== -->

    <!-- ============================ Feature Section start =============================== -->
<div class="feature" id="featureSection">
    <div class="container container-lg">
        <div class="position-relative arrow-center">
            <div class="flex-align">
                <button type="button" id="feature-item-wrapper-prev" class="slick-prev slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1" >
                    <i class="ph ph-caret-left"></i>
                </button>
                <button type="button" id="feature-item-wrapper-next" class="slick-next slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1" >
                    <i class="ph ph-caret-right"></i>
                </button>
            </div>
            <div class="feature-item-wrapper">
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="400">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="frontend_assets/images/thumbs/feature-img1.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Vegetables</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="600">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="frontend_assets/images/thumbs/feature-img2.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Fish & Meats</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="800">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="frontend_assets/images/thumbs/feature-img3.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Desserts</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1000">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="frontend_assets/images/thumbs/feature-img4.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Drinks & Juice</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1200">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="frontend_assets/images/thumbs/feature-img5.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Animals Food</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1400">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="frontend_assets/images/thumbs/feature-img6.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Fresh Fruits</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1600">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="frontend_assets/images/thumbs/feature-img7.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Yummy Candy</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1800">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="frontend_assets/images/thumbs/feature-img2.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Fish & Meats</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2000">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="frontend_assets/images/thumbs/feature-img8.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Dairy & Eggs</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2200">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="frontend_assets/images/thumbs/feature-img9.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Snacks</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2400">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="frontend_assets/images/thumbs/feature-img10.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Frozen Foods</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Feature Section End =============================== -->

    <!-- ======================== promotional banner Start ============================== -->
<section class="promotional-banner pt-80">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="400">
                <div class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1">
                    <img src="frontend_assets/images/thumbs/promotional-banner-img1.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                    <div class="promotional-banner-item__content">
                        <h6 class="promotional-banner-item__title text-32">Everyday Fresh Meat</h6>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="600">
                <div class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1">
                    <img src="frontend_assets/images/thumbs/promotional-banner-img2.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                    <div class="promotional-banner-item__content">
                        <h6 class="promotional-banner-item__title text-32">Daily Fresh Vegetables</h6>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="800">
                <div class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1">
                    <img src="frontend_assets/images/thumbs/promotional-banner-img3.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                    <div class="promotional-banner-item__content">
                        <h6 class="promotional-banner-item__title text-32">Everyday Fresh Milk</h6>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="1000">
                <div class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1">
                    <img src="frontend_assets/images/thumbs/promotional-banner-img4.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                    <div class="promotional-banner-item__content">
                        <h6 class="promotional-banner-item__title text-32">Everyday Fresh Fruits</h6>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================== promotional banner End ============================== -->
    
    <!-- ========================= flash sales Start ================================ -->
<section class="flash-sales pt-80 overflow-hidden">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0 wow bounceInLeft">Flash Sales Today</h5>
                <div class="flex-align gap-16 wow bounceInRight">
                    <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                    <div class="flex-align gap-8">
                        <button type="button" id="flash-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="flash-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flash-sales__slider arrow-style-two">
            <div class="" data-aos="fade-up" data-aos-duration="600">
                <div class="flash-sales-item rounded-16 overflow-hidden z-1 position-relative flex-align flex-0 justify-content-between gap-8">
                    <img src="frontend_assets/images/bg/flash-sale-bg1.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1 flash-sales-item__bg">
                    <div class="flash-sales-item__thumb d-sm-block d-none">
                        <img src="frontend_assets/images/thumbs/flash-sale-img1.png" alt="">
                    </div>
                    <div class="flash-sales-item__content ms-sm-auto">
                        <h6 class="text-32 mb-20">Fresh Vegetables</h6>
                        <div class="countdown" id="countdown1">
                            <ul class="countdown-list flex-align flex-wrap">
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                            </ul>
                        </div>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="" data-aos="fade-up" data-aos-duration="1000">
                <div class="flash-sales-item rounded-16 overflow-hidden z-1 position-relative flex-align flex-0 justify-content-between gap-8">
                    <img src="frontend_assets/images/bg/flash-sale-bg2.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1 flash-sales-item__bg">
                    <div class="flash-sales-item__thumb d-sm-block d-none">
                        <img src="frontend_assets/images/thumbs/flash-sale-img2.png" alt="">
                    </div>
                    <div class="flash-sales-item__content ms-sm-auto">
                        <h6 class="text-32 mb-20">Daily Snacks</h6>
                        <div class="countdown" id="countdown2">
                            <ul class="countdown-list flex-align flex-wrap">
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                            </ul>
                        </div>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="" data-aos="fade-up" data-aos-duration="1400">
                <div class="flash-sales-item rounded-16 overflow-hidden z-1 position-relative flex-align flex-0 justify-content-between gap-8">
                    <img src="frontend_assets/images/bg/flash-sale-bg2.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1 flash-sales-item__bg">
                    <div class="flash-sales-item__thumb d-sm-block d-none">
                        <img src="frontend_assets/images/thumbs/flash-sale-img2.png" alt="">
                    </div>
                    <div class="flash-sales-item__content ms-sm-auto">
                        <h6 class="text-32 mb-20">Daily Snacks</h6>
                        <div class="countdown" id="countdown3">
                            <ul class="countdown-list flex-align flex-wrap">
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                            </ul>
                        </div>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= flash sales End ================================ -->

    <div class="product mt-24">
    <div class="container container-lg">
        <div class="row gy-4 g-12">
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                   
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="frontend_assets/images/thumbs/product-img1.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="frontend_assets/images/thumbs/product-img2.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="frontend_assets/images/thumbs/product-img3.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="frontend_assets/images/thumbs/product-img1.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="frontend_assets/images/thumbs/product-img5.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="frontend_assets/images/thumbs/product-img6.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- =========================== Offer Section Start =============================== -->
 <section class="offer pt-80 pb-80">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                <div class="offer-card position-relative rounded-16 bg-main-600 overflow-hidden p-16 flex-align gap-16 flex-wrap z-1">
                    <img src="frontend_assets/images/shape/offer-shape.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">
                    <div class="offer-card__thumb d-lg-block d-none">
                        <img src="frontend_assets/images/thumbs/offer-img1.png" alt="">
                    </div>
                    <div class="py-xl-4">
                        <div class="offer-card__logo mb-16 w-80 h-80 flex-center bg-white rounded-circle">
                            <img src="frontend_assets/images/thumbs/offer-logo.png" alt=""> 
                        </div>
                        <h4 class="text-white mb-8">$5 off your first order</h4>
                        <div class="flex-align gap-8">
                            <span class="text-sm text-white">Delivery by 6:15am</span>
                            <span class="text-sm text-main-two-600">expired Aug 5</span>
                        </div>
                        <a href="shop.html" class="mt-16 btn bg-white hover-text-white hover-bg-main-800 text-heading fw-medium d-inline-flex align-items-center rounded-pill gap-8" tabindex="0">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="offer-card position-relative rounded-16 bg-main-600 overflow-hidden p-16 flex-align gap-16 flex-wrap z-1">
                    <img src="frontend_assets/images/shape/offer-shape.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">
                    <div class="offer-card__thumb d-lg-block d-none">
                        <img src="frontend_assets/images/thumbs/offer-img2.png" alt="">
                    </div>
                    <div class="py-xl-4">
                        <div class="offer-card__logo mb-16 w-80 h-80 flex-center bg-white rounded-circle">
                            <img src="frontend_assets/images/thumbs/offer-logo.png" alt=""> 
                        </div>
                        <h4 class="text-white mb-8">$5 off your first order</h4>
                        <div class="flex-align gap-8">
                            <span class="text-sm text-white">Delivery by 6:15am</span>
                            <span class="text-sm text-main-two-600">expired Aug 5</span>
                        </div>
                        <a href="shop.html" class="mt-16 btn bg-white hover-text-white hover-bg-main-800 text-heading fw-medium d-inline-flex align-items-center rounded-pill gap-8" tabindex="0">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- =========================== Offer Section End =============================== -->
    
    <!-- ========================= Recommended Start ================================ -->
<section class="recommended overflow-hidden">
    <div class="container container-lg">
        <div class="section-heading flex-between flex-wrap gap-16">
            <h5 class="mb-0 wow bounceInLeft">Recommended for you</h5>
            <ul class="nav common-tab nav-pills wow bounceInRight" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-grocery-tab" data-bs-toggle="pill" data-bs-target="#pills-grocery" type="button" role="tab" aria-controls="pills-grocery" aria-selected="false">Grocery</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-fruits-tab" data-bs-toggle="pill" data-bs-target="#pills-fruits" type="button" role="tab" aria-controls="pills-fruits" aria-selected="false">Fruits</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-juices-tab" data-bs-toggle="pill" data-bs-target="#pills-juices" type="button" role="tab" aria-controls="pills-juices" aria-selected="false">Juices</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-vegetables-tab" data-bs-toggle="pill" data-bs-target="#pills-vegetables" type="button" role="tab" aria-controls="pills-vegetables" aria-selected="false">Vegetables</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-snacks-tab" data-bs-toggle="pill" data-bs-target="#pills-snacks" type="button" role="tab" aria-controls="pills-snacks" aria-selected="false">Snacks</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-organic-tab" data-bs-toggle="pill" data-bs-target="#pills-organic" type="button" role="tab" aria-controls="pills-organic" aria-selected="false">Organic Foods</button>
                </li>
            </ul>
        </div>
        
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img7.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img8.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img9.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img10.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img11.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img12.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img13.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img14.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img15.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img16.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img17.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img18.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-grocery" role="tabpanel" aria-labelledby="pills-grocery-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img7.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img8.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img9.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img10.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img11.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img12.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img13.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img14.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img15.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img16.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img17.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img18.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-fruits" role="tabpanel" aria-labelledby="pills-fruits-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img7.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img8.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img9.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img10.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img11.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img12.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img13.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img14.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img15.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img16.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img17.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img18.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-juices" role="tabpanel" aria-labelledby="pills-juices-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img7.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img8.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img9.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img10.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img11.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img12.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img13.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img14.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img15.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img16.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img17.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img18.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-vegetables" role="tabpanel" aria-labelledby="pills-vegetables-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img7.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img8.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img9.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img10.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img11.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img12.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img13.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img14.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img15.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img16.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img17.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img18.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-snacks" role="tabpanel" aria-labelledby="pills-snacks-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img7.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img8.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img9.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img10.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img11.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img12.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img13.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img14.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img15.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img16.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img17.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img18.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-organic" role="tabpanel" aria-labelledby="pills-organic-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img7.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img8.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img9.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img10.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img11.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img12.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img13.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img14.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img15.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img16.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img17.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="frontend_assets/images/thumbs/product-img18.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= Recommended End ================================ -->


    <!-- ========================= hot-deals Start ================================ -->
<section class="hot-deals pt-80 overflow-hidden">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0 wow bounceInLeft">Hot Deals Todays</h5>
                <div class="flex-align gap-16 wow bounceInRight">
                    <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                    <div class="flex-align gap-8">
                        <button type="button" id="deals-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="deals-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row g-12">
            <div class="col-md-4" data-aos="zoom-in">
                <div class="hot-deals position-relative rounded-16 bg-main-600 overflow-hidden p-28 z-1 text-center">
                    <img src="frontend_assets/images/shape/offer-shape.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">
                    <div class="hot-deals__thumb">
                        <img src="frontend_assets/images/thumbs/hot-deals-img.png" alt="">
                    </div>
                    <div class="py-xl-4">
                        <h4 class="text-white mb-8">Fresh Vegetables</h4>
                        <div class="countdown my-32" id="countdown4">
                            <ul class="countdown-list flex-center flex-wrap">
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="days"></span>Days</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="hours"></span>Hours</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="minutes"></span>Min</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="seconds"></span>Sec</li>
                            </ul>
                        </div>
                        <a href="shop.html" class="mt-16 btn btn-main-two fw-medium d-inline-flex align-items-center rounded-pill gap-8" tabindex="0">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="hot-deals-slider arrow-style-two">
                    <div  data-aos="fade-up" data-aos-duration="200">
                        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                            <a href="product-details.html" class="product-card__thumb flex-center">
                                <img src="frontend_assets/images/thumbs/product-img8.png" alt="">
                            </a>
                            <div class="product-card__content p-sm-2 w-100">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
        
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  data-aos="fade-up" data-aos-duration="400">
                        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                            <a href="product-details.html" class="product-card__thumb flex-center">
                                <img src="frontend_assets/images/thumbs/product-img9.png" alt="">
                            </a>
                            <div class="product-card__content p-sm-2 w-100">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
        
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  data-aos="fade-up" data-aos-duration="600">
                        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
                            <a href="product-details.html" class="product-card__thumb flex-center">
                                <img src="frontend_assets/images/thumbs/product-img10.png" alt="">
                            </a>
                            <div class="product-card__content p-sm-2 w-100">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
        
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  data-aos="fade-up" data-aos-duration="800">
                        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                            <a href="product-details.html" class="product-card__thumb flex-center">
                                <img src="frontend_assets/images/thumbs/product-img18.png" alt="">
                            </a>
                            <div class="product-card__content p-sm-2 w-100">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
        
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  data-aos="fade-up" data-aos-duration="1000">
                        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                            <a href="product-details.html" class="product-card__thumb flex-center">
                                <img src="frontend_assets/images/thumbs/product-img9.png" alt="">
                            </a>
                            <div class="product-card__content p-sm-2 w-100">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
        
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= hot-deals End ================================ -->


    <!-- ============================== Top Vendors Section Start ================================= -->
 <section class="top-vendors py-80">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0">Weekly Top Vendors</h5>
                <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">All Vendors</a>
            </div>
        </div>

        <div class="row gy-4 vendor-card-wrapper">
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="200">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="frontend_assets/images/thumbs/vendor-logo1.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Organic Market</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="frontend_assets/images/thumbs/vendor-logo2.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Safeway</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="frontend_assets/images/thumbs/vendor-logo3.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Food Max</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="frontend_assets/images/thumbs/vendor-logo4.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">HRmart</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="200">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="frontend_assets/images/thumbs/vendor-logo5.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Lucky Supermarket</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="frontend_assets/images/thumbs/vendor-logo6.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Arico Farmer</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="frontend_assets/images/thumbs/vendor-logo7.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Farmer Market</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="frontend_assets/images/thumbs/vendor-logo8.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Foodsco</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="frontend_assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- ============================== Top Vendors Section End ================================= -->

        <!-- ========================= best sells Start ================================ -->
<section class="best sells pb-80">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0 wow bounceInLeft">Daily Best Sells</h5>
            </div>
        </div>

        <div class="row g-12">
            <div class="col-xxl-8">
                <div class="row gy-4">
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="200">
                        <div class="product-card style-two h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 flex-align gap-16">
                            <div class="">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                                <a href="product-details.html" class="product-card__thumb flex-center">
                                    <img src="frontend_assets/images/thumbs/best-sell1.png" alt="">
                                </a>
                                <div class="countdown" id="countdown6">
                                    <ul class="countdown-list style-three flex-align flex-wrap">
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-card__content">
                                <div class="product-card__price mb-16">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                </div>
                                <div class="flex-align gap-6">
                                    <span class="text-xs fw-bold text-gray-600">4.8</span>
                                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                </div>
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
                                <div class="mt-12">
                                    <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>
                                <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                    Add To Cart <i class="ph ph-shopping-cart"></i> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="400">
                        <div class="product-card style-two h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 flex-align gap-16">
                            <div class="">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                                <a href="product-details.html" class="product-card__thumb flex-center">
                                    <img src="frontend_assets/images/thumbs/best-sell2.png" alt="">
                                </a>
                                <div class="countdown" id="countdown7">
                                    <ul class="countdown-list style-three flex-align flex-wrap">
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-card__content">
                                <div class="product-card__price mb-16">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                </div>
                                <div class="flex-align gap-6">
                                    <span class="text-xs fw-bold text-gray-600">4.8</span>
                                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                </div>
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
                                <div class="mt-12">
                                    <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>
                                <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                    Add To Cart <i class="ph ph-shopping-cart"></i> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="200">
                        <div class="product-card style-two h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 flex-align gap-16">
                            <div class="">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                                <a href="product-details.html" class="product-card__thumb flex-center">
                                    <img src="frontend_assets/images/thumbs/best-sell3.png" alt="">
                                </a>
                                <div class="countdown" id="countdown8">
                                    <ul class="countdown-list style-three flex-align flex-wrap">
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-card__content">
                                <div class="product-card__price mb-16">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                </div>
                                <div class="flex-align gap-6">
                                    <span class="text-xs fw-bold text-gray-600">4.8</span>
                                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                </div>
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
                                <div class="mt-12">
                                    <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>
                                <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                    Add To Cart <i class="ph ph-shopping-cart"></i> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="400">
                        <div class="product-card style-two h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 flex-align gap-16">
                            <div class="">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                                <a href="product-details.html" class="product-card__thumb flex-center">
                                    <img src="frontend_assets/images/thumbs/best-sell4.png" alt="">
                                </a>
                                <div class="countdown" id="countdown9">
                                    <ul class="countdown-list style-three flex-align flex-wrap">
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-card__content">
                                <div class="product-card__price mb-16">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                </div>
                                <div class="flex-align gap-6">
                                    <span class="text-xs fw-bold text-gray-600">4.8</span>
                                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                </div>
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
                                <div class="mt-12">
                                    <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>
                                <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                    Add To Cart <i class="ph ph-shopping-cart"></i> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4" data-aos="zoom-in" data-aos-duration="600">
                <div class="position-relative rounded-16 bg-light-purple overflow-hidden p-28 z-1 text-center">
                    <div class="">
                        <img src="frontend_assets/images/bg/special-snacks.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 cover-img">
                        <div class="d-xxl-block d-none">
                            <img src="frontend_assets/images/thumbs/special-snacks-img.png" alt="">
                        </div>
                    </div>
                    <div class="py-xl-4">
                        <h4 class="mb-8">Special Snacks</h4>
                        <div class="countdown my-32" id="countdown5">
                            <ul class="countdown-list style-two flex-center flex-wrap">
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="days"></span>Days</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="hours"></span>Hours</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="minutes"></span>Min</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="seconds"></span>Sec</li>
                            </ul>
                        </div>
                        <a href="shop.html" class="mt-16 btn btn-main-two fw-medium d-inline-flex align-items-center rounded-pill gap-8" tabindex="0">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= best sells End ================================ -->


    <!-- ========================= Delivery Section Start ================================ -->
<div class="delivery-section">
    <div class="container container-lg">
        <div class="delivery position-relative rounded-16 bg-main-600 p-16 flex-align gap-16 flex-wrap z-1">
            <img src="frontend_assets/images/bg/delivery-bg.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100">
            <div class="row align-items-center">
                <div class="col-md-3 d-md-block d-none">
                    <div class="delivery__man text-center" data-aos="fade-down-right">
                        <img src="frontend_assets/images/thumbs/delivery-man.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-sm-7">
                    <div class="text-center">
                        <h4 class="text-white mb-8" data-aos="fade-down">We Delivery on Next Day from 10:00 AM to 08:00 PM</h4>
                        <p class="text-white" data-aos="zoom-in">For Orders starts from $100</p>
                        <a href="shop.html" class="mt-16 btn btn-main-two fw-medium d-inline-flex align-items-center rounded-pill gap-8" data-aos="fade-up" tabindex="0">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 d-sm-block d-none" data-aos="zoom-out" data-aos-duration="800">
                    <img src="frontend_assets/images/thumbs/special-snacks-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========================= Delivery Section End ================================ -->


    <!-- ========================= organic food Start ================================ -->
<section class="organic-food py-80 overflow-hidden">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0 wow bounceInLeft">Organic Food</h5>
                <div class="flex-align gap-16 wow bounceInRight">
                    <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline"> All Categories</a>
                    <div class="flex-align gap-8">
                        <button type="button" id="organic-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="organic-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="organic-food__slider arrow-style-two">
            <div data-aos="fade-up" data-aos-duration="200">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                   <a href="product-details.html" class="product-card__thumb flex-center">
                       <img src="frontend_assets/images/thumbs/product-img20.png" alt="">
                   </a>
                   <div class="product-card__content mt-12">
                       <div class="flex-align gap-6">
                           <span class="text-xs fw-bold text-gray-500">4.8</span>
                           <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                           <span class="text-xs fw-bold text-gray-500">(17k)</span>
                       </div>
                       <h6 class="title text-lg fw-semibold mt-12 mb-8">
                           <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                       </h6>
                       <div class="flex-align gap-4">
                           <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                           <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                       </div>

                       <div class="flex-between gap-8 mt-24 flex-wrap">
                           <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                           <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                       </div>
                   </div>
               </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="400">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                   <a href="product-details.html" class="product-card__thumb flex-center">
                       <img src="frontend_assets/images/thumbs/product-img21.png" alt="">
                   </a>
                   <div class="product-card__content mt-12">
                       <div class="flex-align gap-6">
                           <span class="text-xs fw-bold text-gray-500">4.8</span>
                           <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                           <span class="text-xs fw-bold text-gray-500">(17k)</span>
                       </div>
                       <h6 class="title text-lg fw-semibold mt-12 mb-8">
                           <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                       </h6>
                       <div class="flex-align gap-4">
                           <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                           <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                       </div>

                       <div class="flex-between gap-8 mt-24 flex-wrap">
                           <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                           <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                       </div>
                   </div>
               </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="600">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                   <a href="product-details.html" class="product-card__thumb flex-center">
                       <img src="frontend_assets/images/thumbs/product-img22.png" alt="">
                   </a>
                   <div class="product-card__content mt-12">
                       <div class="flex-align gap-6">
                           <span class="text-xs fw-bold text-gray-500">4.8</span>
                           <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                           <span class="text-xs fw-bold text-gray-500">(17k)</span>
                       </div>
                       <h6 class="title text-lg fw-semibold mt-12 mb-8">
                           <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                       </h6>
                       <div class="flex-align gap-4">
                           <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                           <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                       </div>

                       <div class="flex-between gap-8 mt-24 flex-wrap">
                           <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                           <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                       </div>
                   </div>
               </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="800">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                   <a href="product-details.html" class="product-card__thumb flex-center">
                       <img src="frontend_assets/images/thumbs/product-img23.png" alt="">
                   </a>
                   <div class="product-card__content mt-12">
                       <div class="flex-align gap-6">
                           <span class="text-xs fw-bold text-gray-500">4.8</span>
                           <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                           <span class="text-xs fw-bold text-gray-500">(17k)</span>
                       </div>
                       <h6 class="title text-lg fw-semibold mt-12 mb-8">
                           <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                       </h6>
                       <div class="flex-align gap-4">
                           <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                           <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                       </div>

                       <div class="flex-between gap-8 mt-24 flex-wrap">
                           <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                           <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                       </div>
                   </div>
               </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                   <a href="product-details.html" class="product-card__thumb flex-center">
                       <img src="frontend_assets/images/thumbs/product-img24.png" alt="">
                   </a>
                   <div class="product-card__content mt-12">
                       <div class="flex-align gap-6">
                           <span class="text-xs fw-bold text-gray-500">4.8</span>
                           <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                           <span class="text-xs fw-bold text-gray-500">(17k)</span>
                       </div>
                       <h6 class="title text-lg fw-semibold mt-12 mb-8">
                           <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                       </h6>
                       <div class="flex-align gap-4">
                           <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                           <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                       </div>

                       <div class="flex-between gap-8 mt-24 flex-wrap">
                           <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                           <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                       </div>
                   </div>
               </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1200">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                   <a href="product-details.html" class="product-card__thumb flex-center">
                       <img src="frontend_assets/images/thumbs/product-img25.png" alt="">
                   </a>
                   <div class="product-card__content mt-12">
                       <div class="flex-align gap-6">
                           <span class="text-xs fw-bold text-gray-500">4.8</span>
                           <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                           <span class="text-xs fw-bold text-gray-500">(17k)</span>
                       </div>
                       <h6 class="title text-lg fw-semibold mt-12 mb-8">
                           <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                       </h6>
                       <div class="flex-align gap-4">
                           <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                           <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                       </div>

                       <div class="flex-between gap-8 mt-24 flex-wrap">
                           <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                           <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                       </div>
                   </div>
               </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1400">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                   <a href="product-details.html" class="product-card__thumb flex-center">
                       <img src="frontend_assets/images/thumbs/product-img21.png" alt="">
                   </a>
                   <div class="product-card__content mt-12">
                       <div class="flex-align gap-6">
                           <span class="text-xs fw-bold text-gray-500">4.8</span>
                           <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                           <span class="text-xs fw-bold text-gray-500">(17k)</span>
                       </div>
                       <h6 class="title text-lg fw-semibold mt-12 mb-8">
                           <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                       </h6>
                       <div class="flex-align gap-4">
                           <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                           <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                       </div>

                       <div class="flex-between gap-8 mt-24 flex-wrap">
                           <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                           <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= organic food End ================================ -->

    <!-- ========================== Short Product Section Start ============================== -->
 <div class="short-product">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                <div class="p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 ">
                    <div class="p-16 bg-main-50 rounded-16 mb-32">
                        <h6 class="underlined-line position-relative mb-0 pb-16 d-inline-block">Featured Products</h6>
                    </div>
                    <div class="short-product-list arrow-style-two">
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img1.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img2.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img3.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img4.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img1.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img2.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img3.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img4.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                <div class="p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 ">
                    <div class="p-16 bg-main-50 rounded-16 mb-32">
                        <h6 class="underlined-line position-relative mb-0 pb-16 d-inline-block">Top Selling Products</h6>
                    </div>
                    <div class="short-product-list arrow-style-two">
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img5.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img6.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img7.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img8.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img5.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img6.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img7.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img8.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 ">
                    <div class="p-16 bg-main-50 rounded-16 mb-32">
                        <h6 class="underlined-line position-relative mb-0 pb-16 d-inline-block">On-sale Products</h6>
                    </div>
                    <div class="short-product-list arrow-style-two">
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img9.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img4.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img7.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img4.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img9.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img4.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img7.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img4.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                <div class="p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 ">
                    <div class="p-16 bg-main-50 rounded-16 mb-32">
                        <h6 class="underlined-line position-relative mb-0 pb-16 d-inline-block">Top Rated Products</h6>
                    </div>
                    <div class="short-product-list arrow-style-two">
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img3.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img7.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img1.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img8.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img1.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img7.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img3.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="frontend_assets/images/thumbs/short-product-img8.png" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>



<!-- ========================== Short Product Section End ============================== -->

    <!-- ============================== Brand Section Start =============================== -->
<div class="brand py-80 overflow-hidden">
    <div class="container container-lg">
        <div class="brand-inner bg-color-one p-24 rounded-16">
            <div class="section-heading">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0 wow bounceInLeft">Shop by Brands</h5>
                    <div class="flex-align gap-16 wow bounceInRight">
                        <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                        <div class="flex-align gap-8">
                            <button type="button" id="brand-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1" >
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="brand-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1" >
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brand-slider arrow-style-two">
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="200">    
                    <img src="frontend_assets/images/thumbs/brand-img1.png" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="400">    
                    <img src="frontend_assets/images/thumbs/brand-img2.png" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="600">    
                    <img src="frontend_assets/images/thumbs/brand-img3.png" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="800">    
                    <img src="frontend_assets/images/thumbs/brand-img4.png" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="1000">    
                    <img src="frontend_assets/images/thumbs/brand-img5.png" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="1200">    
                    <img src="frontend_assets/images/thumbs/brand-img6.png" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="1400">    
                    <img src="frontend_assets/images/thumbs/brand-img7.png" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="1600">    
                    <img src="frontend_assets/images/thumbs/brand-img8.png" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="1800">    
                    <img src="frontend_assets/images/thumbs/brand-img3.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================== Brand Section End =============================== -->

    <!-- ========================== New Arrival Section Start ============================= -->
 <section class="new-arrival pb-80">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0">New Arrivals</h5>
                <div class="flex-align gap-16">
                    <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                    <div class="flex-align gap-8">
                        <button type="button" id="new-arrival-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1" >
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="new-arrival-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1" >
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="new-arrival__slider arrow-style-two">
            <div data-aos="fade-up" data-aos-duration="200">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="frontend_assets/images/thumbs/product-img20.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="400">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="frontend_assets/images/thumbs/product-img21.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="600">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="frontend_assets/images/thumbs/product-img22.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="800">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="frontend_assets/images/thumbs/product-img23.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="frontend_assets/images/thumbs/product-img24.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1200">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="frontend_assets/images/thumbs/product-img25.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1400">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="frontend_assets/images/thumbs/product-img21.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- ========================== New Arrival Section End ============================= -->

    <!-- ========================== Shipping Section Start ============================ -->
 <section class="shipping mb-24" id="shipping">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-car-profile"></i></span>
                    <div class="">
                        <h6 class="mb-0">Free Shipping</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-hand-heart"></i></span>
                    <div class="">
                        <h6 class="mb-0"> 100% Satisfaction</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-credit-card"></i></span>
                    <div class="">
                        <h6 class="mb-0"> Secure Payments</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-chats"></i></span>
                    <div class="">
                        <h6 class="mb-0"> 24/7 Support</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- ========================== Shipping Section End ============================ -->

    <!-- =============================== Newsletter Section Start ============================ -->
<div class="newsletter">
    <div class="container container-lg">
        <div class="newsletter-box position-relative rounded-16 flex-align gap-16 flex-wrap z-1">
            <img src="frontend_assets/images/bg/newsletter-bg.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="">
                        <h1 class="text-white mb-12" data-aos="fade-down" data-aos-duration="800">Don't Miss Out on Grocery Deals</h1>
                        <p class="text-white h5 mb-0" data-aos="fade-up" data-aos-duration="800">SING UP FOR THE UPDATE NEWSLETTER</p>
                        <form action="index.html#" class="position-relative mt-40" data-aos="zoom-in" data-aos-duration="800">
                            <input type="text" class="form-control common-input rounded-pill text-white py-22 px-16 pe-144" placeholder="Your email address...">
                            <button type="submit" class="btn btn-main-two rounded-pill position-absolute top-50 translate-middle-y inset-inline-end-0 me-10">Subscribe </button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 text-center d-xl-block d-none">
                    <img src="frontend_assets/images/thumbs/newsletter-img.png" alt="" data-aos="zoom-in" data-aos-duration="800">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =============================== Newsletter Section End ============================ -->
    

@endsection