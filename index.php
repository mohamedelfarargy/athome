<?php
require "admin/function/connect.php";
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>XeMart - Ecommerce Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/assets/bootstrap.min.css">

		<!-- Fontawesome Icon -->
        <link rel="stylesheet" href="css/assets/font-awesome.min.css">

		<!-- Animate Css -->
        <link rel="stylesheet" href="css/assets/animate.css">

        <!-- Owl Slider -->
        <link rel="stylesheet" href="css/assets/owl.carousel.min.css">

        <!-- Custom Style -->
        <link rel="stylesheet" href="css/assets/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/assets/responsive.css">

        <style>
            .ul_s{
                background :red;
                text-align : center;
                font-size:20px;
                z-index: 999;
                cursor: pointer;
                margin-top:5px;
                border-radius:3px;
            }
            .ul_s li{
                list-style: none;
                border-bottom:5px solid gray;
                padding: 5px;
                color: #ffff;
                font-size : 18px;
            }

        </style>

    </head>
    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="load-list">
                <div class="load"></div>
                <div class="load load2"></div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Top Bar -->
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4">
                        <div class="top-left d-flex">
                            <div class="lang-box">
                                <span><img src="images/fl-eng.png">English<i class="fa fa-angle-down"></i></span>
                                <ul class="list-unstyled">
                                    <li><img src="images/fl-eng.png">English</li>
                                    <li><img src="images/fl-fra.png">French</li>
                                    <li><img src="images/fl-ger.png">German</li>
                                    <li><img src="images/fl-bra.png">Brazilian</li>
                                </ul>
                            </div>
                            <div class="mny-box">
                                <span>USD<i class="fa fa-angle-down"></i></span>
                                <ul class="list-unstyled">
                                    <li>USD</li>
                                    <li>GBP</li>
                                    <li>EUR</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="top-right text-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#"><img src="images/user.png">My Account</a></li>
                                <li class="list-inline-item"><a href="#"><img src="images/wishlist.png">Wishlist</a></li>
                                <li class="list-inline-item"><a href="#"><img src="images/checkout.png">Checkout</a></li>
                                <?php
                                    if(!isset($_SESSION["client"])){
                                    

                                    
                                    ?>
                                <li class="list-inline-item"><a href="08-login.php"><img src="images/login.png" alt="">Login</a></li>
                                <li class="list-inline-item"><a href="09-register.php"><img src="images/login.png" alt="">register</a></li>
                                <?php }else{

                                    ?>
                                        <li class="list-inline-item"><a href="admin/function/logout_c.php"><img src="images/login.png" alt="">logout</a></li>
                                    <?php }?>
                               
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Bar -->

        <!-- Logo Area -->
        <section class="logo-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php"><img src="images/logo.png"></a>
                        </div>
                    </div>
                    <div class="col-md-5 padding-fix">
                        <form action="04-category.php" class="search-bar" method="get">
                            <input type="text" name="search_s" placeholder="I'm looking for..." class="inp_search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <ul class="ul_s">
                       
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="carts-area d-flex">
                            <div class="call-box d-flex">
                                <div class="call-ico">
                                    <img src="images/call.png">
                                </div>
                                <div class="call-content">
                                    <span>Call Us</span>
                                    <p>+20 (15) 5 166 9241</p>
                                </div>
                            </div>
                            <div class="cart-box ml-auto text-center">
                                <a href="#" class="cart-btn">
                                    <img src="images/cart.png" alt="cart">
                                    <span>2</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Area -->

        <!-- Cart Body -->
        <div class="cart-body">
            <div class="close-btn">
                <button class="close-cart"><img src="images/close.png">Close</button>
            </div>
            <div class="crt-bd-box">
                <div class="cart-heading text-center">
                    <h5>Shopping Cart</h5>
                </div>
                <div class="cart-content">
                    <div class="content-item d-flex justify-content-between">
                        <div class="cart-img">
                            <a href="#"><img src="images/cart1.png"></a>
                        </div>
                        <div class="cart-disc">
                            <p><a href="#">SMART LED TV</a></p>
                            <span>1 x $199.00</span>
                        </div>
                        <div class="delete-btn">
                            <a href="#"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                    <div class="content-item d-flex justify-content-between">
                        <div class="cart-img">
                            <a href="#"><img src="images/cart2.png"></a>
                        </div>
                        <div class="cart-disc">
                            <p><a href="#">SMART LED TV</a></p>
                            <span>1 x $199.00</span>
                        </div>
                        <div class="delete-btn">
                            <a href="#"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="cart-btm">
                    <p class="text-right">Sub Total: <span>$398.00</span></p>
                    <a href="#">Checkout</a>
                </div>
            </div>
        </div>
        <div class="cart-overlay"></div>
        <!-- End Cart Body -->

        <!-- Sticky Menu -->
        <section class="sticky-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <div class="sticky-logo">
                            <a href="index-2.php"><img src="images/logo.png" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="main-menu">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a>HOME <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="index-2.php">Home Style 1</a></li>
                                        <li><a href="02-home-two.php">Home Style 2</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item mega-menu"><a>MEGA MENU <i class="fa fa-angle-down"></i></a>
                                    <div class="mega-box">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="clt-area">
                                                    <h6>Clothing</h6>
                                                    <div class="link-box">
                                                        <a href="#">- Western Clothing</a>
                                                        <a href="#">- Traditional Clothing</a>
                                                        <a href="#">- Winter Clothing</a>
                                                        <a href="#">- Summer Clothing</a>
                                                        <a href="#">- Inner Wear</a>
                                                        <a href="#">- Night Wear</a>
                                                        <a href="#">- Mens Clothing</a>
                                                        <a href="#">- Womens Clothing</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="sm-phn">
                                                    <h6>Smartphones</h6>
                                                    <div class="dept-box">
                                                        <a href="#">- Samsung</a>
                                                        <a href="#">- Huawei</a>
                                                        <a href="#">- One Plus</a>
                                                        <a href="#">- Xiaomi</a>
                                                        <a href="#">- Iphone</a>
                                                        <a href="#">- Blackberry</a>
                                                        <a href="#">- Nokia</a>
                                                        <a href="#">- Oppo</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="lt-news">
                                                    <h6>Latest News</h6>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-1.jpg">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 10, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-2.jpg">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 12, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-3.jpg">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 21, 2020</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="m-slider owl-carousel">
                                                    <div class="slider-item">
                                                        <img src="images/mega-1.jpg" class="img-fluid">
                                                        <span>-65%</span>
                                                    </div>
                                                    <div class="slider-item">
                                                        <img src="images/mega-2.jpg" class="img-fluid">
                                                        <span>-50%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mega-bnr">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-1.jpg">
                                                                <span>Camera</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-2.jpg">
                                                                <span>Mouse</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-3.jpg">
                                                                <span>Earphone</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-4.jpg">
                                                                <span>Speaker</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item"><a>PAGES <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="03-about-us.php">About Us</a></li>
                                        <li><a href="04-category.php">Category</a></li>
                                        <li><a href="05-single-product.php">Single Product</a></li>
                                        <li><a href="06-shopping-cart.php">Shopping Cart</a></li>
                                        <li><a href="07-checkout.php">Checkout</a></li>
                                        <li><a href="08-login.php">Log In</a></li>
                                        <li><a href="09-register.php">Register</a></li>
                                        <li><a href="10-wishlist.php">Wishlist</a></li>
                                        <li><a href="11-compare.php">Compare</a></li>
                                        <li><a href="15-track-order.php">Track Order</a></li>
                                        <li><a href="12-terms-condition.php">Terms & Condition</a></li>
                                        <li><a href="13-faq.php">Faq</a></li>
                                        <li><a href="14-404.php">404</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a>BLOG <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="16-blog-one.php">Blog Style 1</a></li>
                                        <li><a href="17-blog-two.php">Blog Style 2</a></li>
                                        <li><a href="18-blog-three.php">Blog Style 3</a></li>
                                        <li><a href="19-blog-details.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a href="20-contact.php">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-2">
                        <div class="carts-area d-flex">
                            <div class="src-box">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search Here">
                                    <button type="button" name="button"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="wsh-box ml-auto">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                    <img src="images/heart.png" alt="favorite">
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="cart-box ml-4">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Shopping Cart" class="cart-btn">
                                    <img src="images/cart.png" alt="cart">
                                    <span>2</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Sticky Menu -->

        <!-- Menu Area -->
        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-menu">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a>HOME <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="index.php">Home Style 1</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="list-inline-item mega-menu"><a>MEGA MENU <i class="fa fa-angle-down"></i></a>
                                    <div class="mega-box">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="clt-area">
                                                    <h6>Clothing</h6>
                                                    <div class="link-box">
                                                        <a href="#">- Western Clothing</a>
                                                        <a href="#">- Traditional Clothing</a>
                                                        <a href="#">- Winter Clothing</a>
                                                        <a href="#">- Summer Clothing</a>
                                                        <a href="#">- Inner Wear</a>
                                                        <a href="#">- Night Wear</a>
                                                        <a href="#">- Mens Clothing</a>
                                                        <a href="#">- Womens Clothing</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="sm-phn">
                                                    <h6>Smartphones</h6>
                                                    <div class="dept-box">
                                                        <a href="#">- Samsung</a>
                                                        <a href="#">- Huawei</a>
                                                        <a href="#">- One Plus</a>
                                                        <a href="#">- Xiaomi</a>
                                                        <a href="#">- Iphone</a>
                                                        <a href="#">- Blackberry</a>
                                                        <a href="#">- Nokia</a>
                                                        <a href="#">- Oppo</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="lt-news">
                                                    <h6>Latest News</h6>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-1.jpg">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 10, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-2.jpg">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 12, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="images/mega-img-3.jpg">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 21, 2020</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="m-slider owl-carousel">
                                                    <div class="slider-item">
                                                        <img src="images/mega-1.jpg" class="img-fluid">
                                                        <span>-65%</span>
                                                    </div>
                                                    <div class="slider-item">
                                                        <img src="images/mega-2.jpg" class="img-fluid">
                                                        <span>-50%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mega-bnr">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-1.jpg">
                                                                <span>Camera</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-2.jpg">
                                                                <span>Mouse</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-3.jpg">
                                                                <span>Earphone</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="images/mega-b-4.jpg">
                                                                <span>Speaker</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item"><a>PAGES <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="03-about-us.php">About Us</a></li>
                                        <li><a href="04-category.php">Category</a></li>
                                        <li><a href="05-single-product.php">Single Product</a></li>
                                        <li><a href="06-shopping-cart.php">Shopping Cart</a></li>
                                        <li><a href="07-checkout.php">Checkout</a></li>
 
                                        <li><a href="10-wishlist.php">Wishlist</a></li>
                                        <li><a href="11-compare.php">Compare</a></li>
                                        <li><a href="15-track-order.php">Track Order</a></li>
                                        <li><a href="12-terms-condition.php">Terms & Condition</a></li>
                                        <li><a href="13-faq.php">Faq</a></li>
                                        <li><a href="14-404.php">404</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a>BLOG <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="16-blog-one.php">Blog Style 1</a></li>
                                        <li><a href="17-blog-two.php">Blog Style 2</a></li>
                                        <li><a href="18-blog-three.php">Blog Style 3</a></li>
                                        <li><a href="19-blog-details.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a href="20-contact.php">CONTACT</a></li>
                                <li class="list-inline-item trac-btn"><a href="#">Track Your Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Menu Area -->

        <!-- Mobile Menu -->
        <section class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <a href="#"><img src="images/logo.png"></a>
                                <a href="#"><span>Sign In</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Home</a>
                                        <ul class="list-unstyled">
                                            <li><a href="index-2.php">Home Style 1</a></li>
	                                        <li><a href="02-home-two.php">Home Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="list-unstyled">
                                            <li><a href="03-about-us.php">About Us</a></li>
                                            <li><a href="04-category.php">Category</a></li>
                                            <li><a href="05-single-product.php">Single Product</a></li>
                                            <li><a href="06-shopping-cart.php">Shopping Cart</a></li>
                                            <li><a href="07-checkout.php">Checkout</a></li>
                                            <li><a href="08-login.php">Log In</a></li>
                                            <li><a href="09-register.php">Register</a></li>
                                            <li><a href="10-wishlist.php">Wishlist</a></li>
                                            <li><a href="11-compare.php">Compare</a></li>
                                            <li><a href="15-track-order.php">Track Order</a></li>
                                            <li><a href="12-terms-condition.php">Terms & Condition</a></li>
                                            <li><a href="13-faq.php">Faq</a></li>
                                            <li><a href="14-404.php">404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog</a>
                                        <ul class="list-unstyled">
                                            <li><a href="16-blog-one.php">Blog Style 1</a></li>
                                            <li><a href="17-blog-two.php">Blog Style 2</a></li>
                                            <li><a href="18-blog-three.php">Blog Style 3</a></li>
                                            <li><a href="19-blog-details.php">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="20-contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mobile Menu -->

        <!-- Slider Area -->
        <section class="slider-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-0">
                        <div class="menu-widget">
                            <p><i class="fa fa-bars"></i>All Categories</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><img src="images/m-cloth.png">Men's Clothing<i class="fa fa-angle-right"></i></a>
                                    <div class="mega-menu">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="smartphone">
                                                    <h6>Smartphones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Asus</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Oppo</a>
                                                    <a href="#">- One Plus</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Htc</a>
                                                    <a href="#">- Vivo</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="tablet">
                                                    <h6>Tablets</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Asus</a>
                                                </div>
                                                <div class="f-phone">
                                                    <h6>Feature Phones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Infinix</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="accesories">
                                                    <h6>Accessories</h6>
                                                    <a href="#">- Power Bank</a>
                                                    <a href="#">- Battery & Charger</a>
                                                    <a href="#">- Cables & Adapters</a>
                                                    <a href="#">- Back / Flip Cover</a>
                                                    <a href="#">- Screen Protector</a>
                                                    <a href="#">- Earphones</a>
                                                    <a href="#">- Memory Card</a>
                                                    <a href="#">- Phone Cases</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mg-bnr">
                                                    <img src="images/ipn.png">
                                                    <div class="mg-content text-right">
                                                        <h4>Iphone</h4>
                                                        <span>Save upto 50% off</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img src="images/w-cloth.png">Women's Clothing<i class="fa fa-angle-right"></i></a>
                                    <div class="mega-menu">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="smartphone">
                                                    <h6>Smartphones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Asus</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Oppo</a>
                                                    <a href="#">- One Plus</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Htc</a>
                                                    <a href="#">- Vivo</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="tablet">
                                                    <h6>Tablets</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Asus</a>
                                                </div>
                                                <div class="f-phone">
                                                    <h6>Feature Phones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Infinix</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="accesories">
                                                    <h6>Accessories</h6>
                                                    <a href="#">- Power Bank</a>
                                                    <a href="#">- Battery & Charger</a>
                                                    <a href="#">- Cables & Adapters</a>
                                                    <a href="#">- Back / Flip Cover</a>
                                                    <a href="#">- Screen Protector</a>
                                                    <a href="#">- Earphones</a>
                                                    <a href="#">- Memory Card</a>
                                                    <a href="#">- Phone Cases</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mg-bnr tab-bnr">
                                                    <img src="images/tab.png">
                                                    <div class="mg-content text-right">
                                                        <h4>Tablet</h4>
                                                        <span>Save upto 50% off</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img src="images/ele.png">Electronics<i class="fa fa-angle-right"></i></a>
                                    <div class="mega-menu">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="smartphone">
                                                    <h6>Smartphones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Asus</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Oppo</a>
                                                    <a href="#">- One Plus</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Htc</a>
                                                    <a href="#">- Vivo</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="tablet">
                                                    <h6>Tablets</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Huawei</a>
                                                    <a href="#">- Apple</a>
                                                    <a href="#">- Xiaomi</a>
                                                    <a href="#">- Sony</a>
                                                    <a href="#">- Asus</a>
                                                </div>
                                                <div class="f-phone">
                                                    <h6>Feature Phones</h6>
                                                    <a href="#">- Samsung</a>
                                                    <a href="#">- Nokia</a>
                                                    <a href="#">- Infinix</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="accesories">
                                                    <h6>Accessories</h6>
                                                    <a href="#">- Power Bank</a>
                                                    <a href="#">- Battery & Charger</a>
                                                    <a href="#">- Cables & Adapters</a>
                                                    <a href="#">- Back / Flip Cover</a>
                                                    <a href="#">- Screen Protector</a>
                                                    <a href="#">- Earphones</a>
                                                    <a href="#">- Memory Card</a>
                                                    <a href="#">- Phone Cases</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mg-bnr pw-bnr">
                                                    <img src="images/pbank.png">
                                                    <div class="mg-content text-right">
                                                        <h4>Powerbank</h4>
                                                        <span>Save upto 50% off</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img src="images/sm.png">Smartphone & Tablet</a></li>
                                <li><a href="#"><img src="images/com.png">Computer & Office</a></li>
                                <li><a href="#"><img src="images/tv.png">Home Applience</a></li>
                                <li><a href="#"><img src="images/shoe.png">Leather & Shoes</a></li>
                                <li><a href="#"><img src="images/kid.png">Kids & Babies</a></li>
                                <li><a href="#"><img src="images/watch.png">Jewelary & Watches</a></li>
                                <li><a href="#"><img src="images/health.png">Health & Beauty</a></li>
                                <li><a href="#"><img src="images/car.png">Automobiles</a></li>
                                <li><a href="#"><img src="images/sport.png">Sports & Outdoors</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 padding-fix-l20">
                        <div class="owl-carousel owl-slider">
                            <div class="slider-item slider-item1">
                                <img src="images/girl-1.png" class="img1 wow fadeInRight effect"  data-wow-duration="1s" data-wow-delay="0s">
                                <div class="slider-box">
                                    <div class="slider-table">
                                        <div class="slider-tablecell">
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.5s">
                                                <h5>Big Sale</h5>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                                <h2>New Product Collection</h2>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.7s">
                                                <p>Save Up To 25% Off</p>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                                <a href="#">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item slider-item2">
                                <img src="images/girl-2.png" class="img2 wow fadeInRight effect"  data-wow-duration="1s" data-wow-delay="0s">
                                <div class="slider-box">
                                    <div class="slider-table">
                                        <div class="slider-tablecell text-right">
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.5s">
                                                <h5>Home Appliance</h5>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                                <h2>Top Quality Products</h2>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.7s">
                                                <p>Save Up To 50% Off</p>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                                <a href="#">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-btm-box d-flex justify-content-around">
                            <div class="single-box mr-20">
                                <a href="#"><img src="images/sb-1.png" class="img-fluid"></a>
                            </div>
                            <div class="single-box mr-20">
                                <a href="#"><img src="images/sb-2.png" class="img-fluid"></a>
                            </div>
                            <div class="single-box">
                                <a href="#"><img src="images/sb-3.png" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Slider Area -->

        <!-- Product Area-->
        <section class="product-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bt-deal">
                                    <div class="sec-title">
                                        <h6>Best Deals</h6>
                                    </div>
                                    <div class="bt-body owl-carousel">
                                        <div class="bt-items">
                                            <div class="bt-box d-flex">
                                                <div class="bt-img">
                                                    <a href="#"><img src="images/sbar-1.png"></a>
                                                </div>
                                                <div class="bt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="bt-box d-flex">
                                                <div class="bt-img">
                                                    <a href="#"><img src="images/sbar-2.png"></a>
                                                </div>
                                                <div class="bt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="bt-box d-flex">
                                                <div class="bt-img">
                                                    <a href="#"><img src="images/sbar-3.png"></a>
                                                </div>
                                                <div class="bt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="bt-box d-flex">
                                                <div class="bt-img">
                                                    <a href="#"><img src="images/sbar-4.png"></a>
                                                </div>
                                                <div class="bt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bt-items">
                                            <div class="bt-box d-flex">
                                                <div class="bt-img">
                                                    <a href="#"><img src="images/sbar-2.png"></a>
                                                </div>
                                                <div class="bt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="bt-box d-flex">
                                                <div class="bt-img">
                                                    <a href="#"><img src="images/sbar-4.png"></a>
                                                </div>
                                                <div class="bt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="bt-box d-flex">
                                                <div class="bt-img">
                                                    <a href="#"><img src="images/sbar-5.png"></a>
                                                </div>
                                                <div class="bt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="bt-box d-flex">
                                                <div class="bt-img">
                                                    <a href="#"><img src="images/sbar-1.png"></a>
                                                </div>
                                                <div class="bt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="ht-offer">
                                    <div class="sec-title">
                                        <h6>Hot Offer</h6>
                                    </div>
                                    <div class="ht-body owl-carousel">
                                        <div class="ht-item">
                                            <div class="ht-img">
                                                <a href="#"><img src="images/tab-15.png" class="img-fluid"></a>
                                                <span>- 59%</span>
                                                <ul class="list-unstyled list-inline counter-box">
                                                    <li class="list-inline-item">185 <p>Days</p></li>
                                                    <li class="list-inline-item">11 <p>Hrs</p></li>
                                                    <li class="list-inline-item">39 <p>Mins</p></li>
                                                    <li class="list-inline-item">51 <p>Sec</p></li>
                                                </ul>
                                            </div>
                                            <div class="ht-content">
                                                <p><a href="#">Items Title Here</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline price">
                                                    <li class="list-inline-item">$120.00</li>
                                                    <li class="list-inline-item">$150.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ht-item">
                                            <div class="ht-img">
                                                <a href="#"><img src="images/tab-14.png" class="img-fluid"></a>
                                                <span>- 59%</span>
                                                <ul class="list-unstyled list-inline counter-box">
                                                    <li class="list-inline-item">185 <p>Days</p></li>
                                                    <li class="list-inline-item">11 <p>Hrs</p></li>
                                                    <li class="list-inline-item">39 <p>Mins</p></li>
                                                    <li class="list-inline-item">51 <p>Sec</p></li>
                                                </ul>
                                            </div>
                                            <div class="ht-content">
                                                <p><a href="#">Items Title Here</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline price">
                                                    <li class="list-inline-item">$120.00</li>
                                                    <li class="list-inline-item">$150.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="hm-test">
                                    <div class="test-body owl-carousel">
                                        <div class="test-item text-center">
                                            <img src="images/test-1.jpg" class="img-fluid">
                                            <h6>John Doe</h6>
                                            <span>Photographer</span>
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore."</p>
                                        </div>
                                        <div class="test-item text-center">
                                            <img src="images/test-2.jpg" class="img-fluid">
                                            <h6>Eric Shell</h6>
                                            <span>Developer</span>
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="top-rtd">
                                    <div class="sec-title">
                                        <h6>Top Rated</h6>
                                    </div>
                                    <div class="rt-slider owl-carousel">
                                        <div class="rt-items">
                                            <div class="rt-box d-flex">
                                                <div class="rt-img">
                                                    <a href="#"><img src="images/sbar-6.png"></a>
                                                </div>
                                                <div class="rt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="rt-box d-flex">
                                                <div class="rt-img">
                                                    <a href="#"><img src="images/sbar-7.png"></a>
                                                </div>
                                                <div class="rt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="rt-box d-flex">
                                                <div class="rt-img">
                                                    <a href="#"><img src="images/sbar-8.png"></a>
                                                </div>
                                                <div class="rt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="rt-box d-flex">
                                                <div class="rt-img">
                                                    <a href="#"><img src="images/sbar-9.png"></a>
                                                </div>
                                                <div class="rt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rt-items">
                                            <div class="rt-box d-flex">
                                                <div class="rt-img">
                                                    <a href="#"><img src="images/sbar-10.png"></a>
                                                </div>
                                                <div class="rt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="rt-box d-flex">
                                                <div class="rt-img">
                                                    <a href="#"><img src="images/sbar-11.png"></a>
                                                </div>
                                                <div class="rt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="rt-box d-flex">
                                                <div class="rt-img">
                                                    <a href="#"><img src="images/sbar-12.png"></a>
                                                </div>
                                                <div class="rt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="rt-box d-flex">
                                                <div class="rt-img">
                                                    <a href="#"><img src="images/sbar-13.png"></a>
                                                </div>
                                                <div class="rt-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="nw-ltr">
                                    <div class="sec-title">
                                        <h6>Newsletter</h6>
                                    </div>
                                    <div class="nw-box">
                                        <p>Sign Up And Get Latest News, Updates, Offers & Deals</p>
                                        <form class="nw-form" action="#">
                                            <input type="text" name="email" placeholder="Email Here..." required>
                                            <button type="submit" name="button">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="row">
                            <div class="col-md-12 padding-fix-l20">
                                <div class="ftr-product">
                                    <div class="tab-box d-flex justify-content-between">
                                        <div class="sec-title">
                                            <h5>Feature Product</h5>
                                        </div>
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#all">All</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#elec">Electronics</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#smart">Smartphones</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#shoe">Shoes</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="all" role="tabpanel">
                                            <div class="tab-slider owl-carousel">
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-1.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-2.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <span class="sale">Sale</span>
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-3.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-4.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="elec" role="tabpanel">
                                            <div class="tab-slider owl-carousel">
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-5.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-6.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <span class="new">New</span>
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-7.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-8.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="smart" role="tabpanel">
                                            <div class="tab-slider owl-carousel">
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-9.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-10.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <span class="sale">Sale</span>
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-11.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-12.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="shoe" role="tabpanel">
                                            <div class="tab-slider owl-carousel">
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-13.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-14.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <span class="new">New</span>
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-15.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-item">
                                                    <div class="tab-heading">
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="#">Samsung Smart Led Tv 42"</a></p>
                                                    </div>
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" src="images/tab-9.png">
                                                        <img class="sec-img img-fluid" src="images/tab-16.png">
                                                        <div class="layer-box">
                                                            <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                            <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                        </div>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline price">
                                                                <li class="list-inline-item">$120.00</li>
                                                                <li class="list-inline-item">$150.00</li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 padding-fix-l20">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="banner">
                                            <a href="#"><img src="images/banner-1.png" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="banner">
                                            <a href="#"><img src="images/banner-2.png" class="img-fluid"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 padding-fix-l20">
                                <div class="new-product">
                                    <div class="sec-title">
                                        <h5>New Product</h5>
                                    </div>
                                    <div class="new-slider owl-carousel">

                                    <?php
                                    
                                    $Select_products = "SELECT * FROM product ORDER BY id DESC";
                                   $result = $connect->query($Select_products);

                                //    $cout_product = $result -> num_rows;
                                //    $limite = 3;
                                //    $page = isset($_GET['page']) ? $_GET['page'] : 0 ;
                                //    $offset = $page * $limite;
                                //    $select = "SELECT * FROM product LIMIT $offset,$limite";

           
                                    foreach($result as $row_products){

                               ?>
                                        <div class="new-item">
                                            <div class="tab-heading">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#"></a></li>
                                                    <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                </ul>
                                                <p><a href="05-single-product.php?id=<?php echo$row_products['id'];?>"><?php echo$row_products['name'];?></a></p>
                                            </div>
                                            <div class="new-img">
                                                <img class="main-img img-fluid" src="admin/images/<?php $img = explode('/',$row_products['images']);
                                               echo$img[0];?>" style="width:200px;height:200px;">
                                                <img class="sec-img img-fluid" src="admin/images/<?php $img = explode('/',$row_products['images']);
                                               echo$img[1];?>" style="width:200px;height:200px;">
                                                <div class="layer-box">
                                                    <a href="#" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png"></a>
                                                    <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png"></a>
                                                </div>
                                            </div>
                                          

                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item"><?php echo$row_products['price'];?></li>
                                                        <li class="list-inline-item"><?php echo$row_products['sale'];?></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php  }?>
                                    </div>
                                </div>
                            </div>





                            <div class="col-md-12 padding-fix-l20">
                                <div class="banner-two">
                                    <a href="#"><img src="images/banner-3.png" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="col-md-12 padding-fix-l20">
                                <div class="top-slr">
                                    <div class="sec-title">
                                        <h5>Top Seller</h5>
                                    </div>
                                    <div class="slr-slider owl-carousel">
                                        <div class="slr-items">
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-6.png"></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-7.png"></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-8.png"></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slr-items">
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-9.png"></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-10.png"></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-11.png"></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slr-items">
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-12.png"></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-13.png"></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-14.png"></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slr-items">
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-6.png"></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-4.png"></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="#"><img src="images/sbar-2.png"></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="#">Items Title Here</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 padding-fix-l20">
                                <div class="hm-blog">
                                    <div class="sec-title">
                                        <h5>Latest News</h5>
                                    </div>
                                    <div class="blog-slider owl-carousel">
                                        <div class="blog-item">
                                            <div class="blog-img">
                                                <a href="#"><img src="images/news-1.jpg" class="img-fluid"></a>
                                            </div>
                                            <div class="blog-content">
                                                <h6><a href="#">Sint eius inventore magni quod.</a></h6>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="#">John</a></li>
                                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>12 Feb, 2020</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum tenetur soluta...</p>
                                            </div>
                                        </div>
                                        <div class="blog-item">
                                            <div class="blog-img">
                                                <a href="#"><img src="images/news-2.jpg" class="img-fluid"></a>
                                            </div>
                                            <div class="blog-content">
                                                <h6><a href="#">Sint eius inventore magni quod.</a></h6>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="#">John</a></li>
                                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>12 Mar, 2020</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum tenetur soluta...</p>
                                            </div>
                                        </div>
                                        <div class="blog-item">
                                            <div class="blog-img">
                                                <a href="#"><img src="images/news-3.jpg" class="img-fluid"></a>
                                            </div>
                                            <div class="blog-content">
                                                <h6><a href="#">Sint eius inventore magni quod.</a></h6>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="#">John</a></li>
                                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>12 Jan, 2020</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum tenetur soluta...</p>
                                            </div>
                                        </div>
                                        <div class="blog-item">
                                            <div class="blog-img">
                                                <a href="#"><img src="images/news-4.jpg" class="img-fluid"></a>
                                            </div>
                                            <div class="blog-content">
                                                <h6><a href="#">Sint eius inventore magni quod.</a></h6>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="#">John</a></li>
                                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>12 Feb, 2020</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum tenetur soluta...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="tp-bnd owl-carousel">
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-01.png" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-02.png" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-03.png" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-04.png" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-05.png" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-06.png" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-07.png" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Area -->
        <?php

include "body/footer.php";
        ?>
