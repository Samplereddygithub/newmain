<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from themeforest.kreativdev.com/treats/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2023 09:58:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="KreativDev">

    <!-- Title -->
    <title>Treats - Fast Food & Restaurant HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/fav.png" type="image/x-icon">

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&amp;family=Lora:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendors/bootstrap.min.css">
    <!-- Fontawesome Icon CSS -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
    <!-- Icomoon Icon CSS -->
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/vendors/magnific-popup.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/vendors/nice-select.css">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="assets/css/vendors/swiper-bundle.min.css">
    <!-- AOS Animation CSS -->
    <link rel="stylesheet" href="assets/css/vendors/aos.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/vendors/animate.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="theme-dark theme-color-1">
    <!-- Preloader start -->
    <div id="preLoader">
        <div class="loader">
            <img src="assets/images/loader-1.gif" alt="Preloader">
        </div>
    </div>
    <!-- Preloader end -->

    <!-- Header-area start -->
    <header class="header-area header-1" data-aos="fade-down">
        <!-- Start mobile menu -->
        <div class="mobile-menu">
            <div class="container">
                <div class="mobile-menu-wrapper"></div>
            </div>
        </div>
        <!-- End mobile menu -->
<?php
session_start(); // Start the session

if(isset($_SESSION['username'])) {
    // Database connection setup (replace with your actual database configuration)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "task1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Retrieve user's username from the users table
    $loggedInUsername = $_SESSION['username'];
    $sql = "SELECT username FROM users WHERE username = '$loggedInUsername'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $usernameToShow = $row['username'];
    }

    // Close the database connection
    $conn->close();
}
?>
        <div class="main-responsive-nav">
            <div class="container">
                <!-- Mobile Logo -->
                <div class="logo">
                    <a href="index.html" target="_self" title="Treats">
                        <img class="lazyload" src="assets/images/logo/logo-2.png" data-src="assets/images/logo/logo-2.png" alt="Treats logo">
                    </a>
                </div>
                <!-- Menu toggle button -->
                <button class="menu-toggler" type="button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <div class="main-navbar">
            <div class="header-top py-2">
                <div class="container">
                    <div class="header-top-items mobile-item d-flex flex-wrap justify-content-between gap-15 align-items-center">
                        <a href="tel:91 7702029288" class="icon-start" target="_self" title="Call Us">
                            <span class="color-primary">
                                Call Us:
                            </span>
                            +917702029288
                        </a>
                        <div class="social-link icon-only">
                            <a class="rounded-pill" href="https://www.instagram.com/" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a>
                            <a class="rounded-pill" href="https://www.dribbble.com/" target="_blank" title="dribbble"><i class="fab fa-dribbble"></i></a>
                            <a class="rounded-pill" href="https://www.twitter.com/" target="_blank" title="twitter"><i class="fab fa-twitter"></i></a>
                            <a class="rounded-pill" href="https://www.youtube.com/" target="_blank" title="youtube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.html" target="_self" title="Treats">
                            <img class="lazyload" src="assets/images/logo/logo-2.png" data-src="assets/images/logo/logo-2.png" alt="Treats logo">
                        </a>
                        <!-- Navigation items -->
                        <div class="collapse navbar-collapse">
                            <ul id="mainMenu" class="navbar-nav mobile-item mx-auto">
                                <li class="nav-item">
                                    <a href="#home" class="nav-link toggle">Home <i class="fal fa-plus"></i></a>
                                    <ul class="menu-dropdown">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html">Home Demo 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index-2.html">Home Demo 2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index-3.html">Home Demo 3</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index-4.html">Home Demo 4</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index-5.html">Home Demo 5</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link toggle" href="menu.html">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link toggle" href="#">Shop<i class="fal fa-plus"></i></a>
                                    <ul class="menu-dropdown">
                                        <li class="nav-item">
                                            <a class="nav-link" href="shop.html">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="shop-details.html">Shop Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cart.html">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="wishlist.html">Wishlist</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link toggle" href="#">Pages<i class="fal fa-plus"></i></a>
                                    <ul class="menu-dropdown">
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.html">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="reservation.html">Reservation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cart.html">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="wishlist.html">Wishlist</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="checkout.html">Checkout</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="faq.html">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.html">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="signup.html">Signup</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="404.html">404</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="coming-soon.html">Coming Soon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="terms-conditions.html">Terms &amp; Conditions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link toggle" href="#">Blog<i class="fal fa-plus"></i></a>
                                    <ul class="menu-dropdown">
                                        <li class="nav-item">
                                            <a class="nav-link" href="blogs.html">Blogs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog-details.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="more-option mobile-item">
                            <div class="item">
                                <div class="language">
                                    <select class="niceselect">
                                        <option value="1">English</option>
                                        <option value="2">Chinese</option>
                                        <option value="3">French</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item">
    <?php
    if(isset($usernameToShow)) {
        echo "<p>Welcome, $usernameToShow!</p>";
    } else {
        echo "<a href='login.html' class='btn-icon' target='_self' aria-label='User' title='User'>
                <i class='fal fa-user-circle'></i>
            </a>";
    }
    ?>
</div>
                             <!--<div class="item">
   <?php
    session_start(); // Start the session

    // Check if the user is logged in
    if(isset($_SESSION['username'])) {
        $loggedInUsername = $_SESSION['username'];
        echo "<p>Welcome, $loggedInUsername!</p>";
    } else {
        echo "<a href='login.html' class='btn-icon' target='_self' aria-label='User' title='User'>
                <i class='fal fa-user-circle'></i>
            </a>";
    }
    ?>
</div>-->

                            <!--<div class="item">
                                <a href="login.html" class="btn-icon" target="_self" aria-label="User" title="User">
                                    <i class="fal fa-user-circle"></i>
                                </a>
                            </div>-->
                            <div class="item">
                                <a href="cart.html" class="btn-icon pe-2" target="_self" aria-label="Cart" title="Cart">
                                    <i class="fal fa-shopping-bag"></i>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="reservation.html" class="btn btn-md btn-primary rounded-pill" title="Book a Table" target="_self">Reservation</a>
                            </div>
                            <div class="item">
                                <a href="login.html" class="btn btn-md btn-primary rounded-pill" title="Book a Table" target="_self">Logout</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        
        <script>
            <?php
            session_start();
            if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "<p>Welcome, $username!</p>";
            }
            if (isset($_SESSION['login_success']) && $_SESSION['login_success']) {
                echo 'alert("Login successful!");';
                $_SESSION['login_success'] = false; // Reset the session variable
            }
            ?>
        
        <?php
    session_start();
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "<p>Welcome, $username!</p>";
    }
    ?>
    </script>
    </header>
    <!-- Header-area end -->

    <!-- Home-area start-->
    <section class="hero-banner hero-banner-1 parallax bg-white">
        <div class="overlay opacity-75"></div>
        <div class="container-fluid">
            <div class="row align-items-center gx-xl-5">
                <div class="col-lg-6">
                    <div class="fluid-left">
                        <div class="banner-content mb-40">
                            <h1 class="title mb-30" data-aos="fade-up" data-aos-delay="100">Make Life Sweeter, One Treat at a Time</h1>
                            <p class="text" data-aos="fade-up" data-aos-delay="100">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            </p>
                            <div class="d-flex align-items-center gap-25 flex-wrap mt-40" data-aos="fade-up" data-aos-delay="200">
                                <a href="menu.html" class="btn btn-lg btn-primary rounded-pill" title="Discover Item" target="_self">Discover Item</a>
                                <div class="author d-flex align-items-center gap-15">
                                    <div class="author-img">
                                        <div class="lazy-container rounded-pill ratio ratio-1-1">
                                            <img class="lazyload" src="assets1/1.png" data-src="assets1/1.png" alt="Person Image">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h6 class="name mb-0 font-sm">
                                            <a href="contact.html" target="_self" title="Link">Kallesh D R</a>
                                        </h6>
                                        <span class="designation font-xsm">Founder & CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="banner-image mb-40 parallax-img" data-speed="0.1" data-revert="true">
                        <img class="lazyload blur-up" src="https://themeforest.kreativdev.com/treats/demo/assets/images/banner/hero-banner-1.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/banner/hero-banner-1.png" alt="Banner Image">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-img" data-bg-image="assets/images/banner/hero-banner-bg-1.png"></div>
    </section>
    <!-- Home-area end -->

    <!-- About-area start -->
    <section class="about-area about-1 pt-100 pb-60 bg-white">
        <div class="container">
            <div class="row align-items-center gx-xl-5">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="image mb-40">
                        <img class="lazyload blur-up" src="https://themeforest.kreativdev.com/treats/demo/assets/images/about-1.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/about-1.png" alt="Image">

                        <div class="absolute-text bg-primary">
                            <div class="center-text">
                                <span class="h3 color-dark">05+</span>
                                <span class="h4 mb-0 color-dark">Years Of Experience</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="content-title pb-10 ps-xl-2">
                        <h2 class="title mb-20">
                            Quality And Passion With Our Services Priority
                        </h2>
                        <div class="content-text">
                            <p>
                                The study is the work of researchers at Nottingham University’s School of Medicine who focused on chemicals known as antigens.In particular, they cause our bodies to make auto-antibodies that target and try to block those invading antigens.
                            </p>
                        </div>
                        <div class="info-list mt-30">
                            <div class="row gx-xl-5">
                                <div class="col-md-6 item mb-30">
                                    <div class="card">
                                        <div class="card-icon rounded-pill">
                                            <i class="ico-premium-quality"></i>
                                        </div>
                                        <div class="card-content">
                                            <h6 class="card-title mb-2">Premium Quality</h6>
                                            <p class="card-text">We provide premium
                                                & quality food items</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 item mb-30">
                                    <div class="card">
                                        <div class="card-icon rounded-pill">
                                            <i class="ico-call-order"></i>
                                        </div>
                                        <div class="card-content">
                                            <h6 class="card-title mb-2">Online Delivery</h6>
                                            <p class="card-text">
                                                We provide fast online
                                                delivery for all items
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 item mb-30">
                                    <div class="card">
                                        <div class="card-icon rounded-pill">
                                            <i class="ico-nature-product"></i>
                                        </div>
                                        <div class="card-content">
                                            <h6 class="card-title mb-2">100% Pure Food</h6>
                                            <p class="card-text">We provide 100& Pure
                                                & handmade foods</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 item mb-30">
                                    <div class="card">
                                        <div class="card-icon rounded-pill">
                                            <i class="ico-support"></i>
                                        </div>
                                        <div class="card-content">
                                            <h6 class="card-title mb-2">24/7 Hours Open</h6>
                                            <p class="card-text">Our shop always 24/7
                                                hours open for you</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-area end -->

    <!-- Category-area start -->
    <section class="category-area category-1 pb-100 bg-img" data-bg-image="assets/images/category-bg-1.png">
        <div class="overlay opacity-50"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title title-center mb-50" data-aos="fade-up">
                        <h2 class="title mb-0">Explore Our Most Popular Bakery & Pastry Items</h2>
                    </div>
                </div>
                <div class="col-12" data-aos="fade-up">
                    <div class="swiper category-slider" id="category-slider-1" data-slides-per-view="4" data-swiper-loop="true">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card text-center p-40 rounded-circle">
                                    <div class="card-image mb-10 mx-auto">
                                        <a href="shop.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                            <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/category/food/cat-1.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/category/food/cat-1.png" alt="Image">
                                        </a>
                                    </div>
                                    <h6 class="card-title lc-1 mb-0"><a href="shop.html" target="_self" title="Chocolate Cake">Chocolate Cake</a></h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card text-center p-40 rounded-circle">
                                    <div class="card-image mb-10 mx-auto">
                                        <a href="shop.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                            <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/category/food/cat-2.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/category/food/cat-2.png" alt="Image">
                                        </a>
                                    </div>
                                    <h6 class="card-title lc-1 mb-0"><a href="shop.html" target="_self" title="Bread Items">Bread Items</a></h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card text-center p-40 rounded-circle">
                                    <div class="card-image mb-10 mx-auto">
                                        <a href="shop.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                            <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/category/food/cat-3.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/category/food/cat-3.png" alt="Image">
                                        </a>
                                    </div>
                                    <h6 class="card-title lc-1 mb-0"><a href="shop.html" target="_self" title="Pastry Items">Pastry Items</a></h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card text-center p-40 rounded-circle">
                                    <div class="card-image mb-10 mx-auto">
                                        <a href="shop.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                            <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/category/food/cat-4.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/category/food/cat-4.png" alt="Image">
                                        </a>
                                    </div>
                                    <h6 class="card-title lc-1 mb-0"><a href="shop.html" target="_self" title="Fruits Cake">Fruits Cake</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination position-static mt-40" id="category-slider-1-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category-area end -->

    <!-- Product-area start -->
    <section class="product-area product-1 pt-100 pb-75 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title title-center mb-20" data-aos="fade-up">
                        <h2 class="title mb-30">Find Out Your Favorite Bakery And Pastry Foods</h2>
                        <div class="tabs-navigation tabs-navigation-2 mb-30">
                            <ul class="nav nav-tabs border-bottom" data-hover="fancyHover">
                                <li class="nav-item active">
                                    <button class="nav-link hover-effect active btn-lg" data-bs-toggle="tab" data-bs-target="#tab1" type="button">All</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link hover-effect btn-lg" data-bs-toggle="tab" data-bs-target="#tab2" type="button">Donuts</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link hover-effect btn-lg" data-bs-toggle="tab" data-bs-target="#tab3" type="button">Bread</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link hover-effect btn-lg" data-bs-toggle="tab" data-bs-target="#tab4" type="button">Cake</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="tab-content" data-aos="fade-up">
                        <div class="tab-pane slide show active" id="tab1">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-1.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-1.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Butter Bread">Butter Bread</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$5.00</span>
                                                <span class="prev-price font-sm">$10.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-2.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-2.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Softfoam Cake">Softfoam Cake</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$4.00</span>
                                                <span class="prev-price font-sm">$5.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-3.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-3.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Chocolate Cookie">Chocolate Cookie</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$9.00</span>
                                                <span class="prev-price font-sm">$8.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-4.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-4.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Fruits Cake">Fruits Cake</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$3.00</span>
                                                <span class="prev-price font-sm">$5.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-5.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-5.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Candy Donut">Candy Donut</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$4.00</span>
                                                <span class="prev-price font-sm">$6.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-6.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-6.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Coco Danish">Coco Danish</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$8.00</span>
                                                <span class="prev-price font-sm">$9.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-7.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-7.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Muffin Cake">Muffin Cake</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$3.00</span>
                                                <span class="prev-price font-sm">$4.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-8.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-8.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Potato Ball">Potato Ball</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$3.23</span>
                                                <span class="prev-price font-sm">$4.50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane slide" id="tab2">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-9.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-9.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Coco Danish">Coco Danish</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$4.00</span>
                                                <span class="prev-price font-sm">$6.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-10.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-10.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Muffin Cake">Muffin Cake</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$3.00</span>
                                                <span class="prev-price font-sm">$6.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-8.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-8.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Potato Ball">Potato Ball</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$8.00</span>
                                                <span class="prev-price font-sm">$7.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-4.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-4.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Fruits Cake">Fruits Cake</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$8.00</span>
                                                <span class="prev-price font-sm">$9.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane slide" id="tab3">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-1.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-1.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Butter Bread">Butter Bread</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$3.00</span>
                                                <span class="prev-price font-sm">$4.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-4.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-4.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Fruits Cake">Fruits Cake</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$6.00</span>
                                                <span class="prev-price font-sm">$8.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-5.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-5.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Candy Donut">Candy Donut</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$4.00</span>
                                                <span class="prev-price font-sm">$6.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-6.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-6.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Coco Danish">Coco Danish</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$05.00</span>
                                                <span class="prev-price font-sm">$10.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane slide" id="tab4">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-2.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-2.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Softfoam Cake">Softfoam Cake</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$05.00</span>
                                                <span class="prev-price font-sm">$10.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-3.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-3.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Chocolate Cookie">Chocolate Cookie</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$05.00</span>
                                                <span class="prev-price font-sm">$10.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-6.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-6.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Coco Danish">Coco Danish</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$05.00</span>
                                                <span class="prev-price font-sm">$10.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="product text-center p-40 rounded-circle mb-25">
                                        <figure class="product-img mb-10 mx-auto">
                                            <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-7.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-7.png" alt="Image">
                                            </a>
                                            <div class="hover-show">
                                                <a href="cart.html" class="btn btn-md btn-primary rounded-pill" title="Add to Cart" target="_self">Add to Cart</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h5 class="product-title lc-1 mb-1"><a href="shop-details.html" target="_self" title="Muffin Cake">Muffin Cake</a></h5>
                                            <div class="product-price">
                                                <span class="h6 new-price color-primary">$05.00</span>
                                                <span class="prev-price font-sm">$10.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cta-btn text-center mt-15 mb-25">
                        <a href="shop.html" class="btn btn-lg btn-primary rounded-pill" title="More Items" target="_self">More Items</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product-area end -->

    <!-- Product-area start -->
    <section class="product-area product-lg-1 pt-100 pb-70 bg-img" data-bg-image="assets/images/product-bg-1.jpg">
        <div class="overlay opacity-85"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title title-center mb-50" data-aos="fade-up">
                        <h2 class="title">We Offer Low Prices on All Bakery & Pastry Food</h2>
                    </div>
                </div>
                <div class="col-12" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="product text-center p-30 radius-md mb-30">
                                <div class="inner">
                                    <figure class="product-img mb-10 mx-auto">
                                        <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                            <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-10.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-10.png" alt="Image">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-title lc-1 mb-10"><a href="shop-details.html" target="_self" title="Fresh Bred & Danish">Fresh Bred & Danish</a></h3>
                                        <div class="product-price mb-15">
                                            <span class="h4 new-price">$10.00</span>
                                            <span class="prev-price">$12.00</span>
                                        </div>
                                        <p class="product-text mb-25">Donec et nibh maximus, congue est euouru mattis nunc. Praesentut quam quis quam venenatis fringilla. Morbi vestibulumn.</p>
                                        <a href="cart.html" class="btn btn-lg btn-outline rounded-pill" title="Place Your Order" target="_self">Place Your Order</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="product text-center p-30 radius-md mb-30">
                                <figure class="product-img mb-10 mx-auto">
                                    <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                        <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-9.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-9.png" alt="Image">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title lc-1 mb-10"><a href="shop-details.html" target="_self" title="Black Chocolate Items">Black Chocolate Items</a></h3>
                                    <div class="product-price mb-15">
                                        <span class="h4 new-price">$14.00</span>
                                        <span class="prev-price">$16.00</span>
                                    </div>
                                    <p class="product-text mb-25">Morbi elementum bibendum enim non sollicitudin. Cras mattis sem sed mi faucibus laoreet at lorem sem. Morbi convallis tincidunt Sed velit.</p>
                                    <a href="cart.html" class="btn btn-lg btn-outline rounded-pill" title="Place Your Order" target="_self">Place Your Order</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="product text-center p-30 radius-md mb-30">
                                <figure class="product-img mb-10 mx-auto">
                                    <a href="shop-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 bg-none">
                                        <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-11.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/product/food/pro-11.png" alt="Image">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title lc-1 mb-10"><a href="shop-details.html" target="_self" title="Birthday Fruits Cake">Birthday Fruits Cake</a></h3>
                                    <div class="product-price mb-15">
                                        <span class="h4 new-price">$12.00</span>
                                        <span class="prev-price">$11.00</span>
                                    </div>
                                    <p class="product-text mb-25">Curabitur non ex laoreet, hendrerit lectus ut, viverra enim. Aliquam finibus justo eget lacinia commodo. Curabitur venenatis eget.</p>
                                    <a href="cart.html" class="btn btn-lg btn-outline rounded-pill" title="Place Your Order" target="_self">Place Your Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product-area end -->

    <!-- Testimonial-area start -->
    <section class="testimonial-area testimonial-1 pt-100 pb-60">
        <div class="overlay opacity-85"></div>
        <div class="container">
            <div class="row align-items-center gx-xl-5">
                <div class="col-lg-6">
                    <div class="content-title mb-40" data-aos="fade-up">
                        <h2 class="title mb-20">
                            Wonderful Words from Our Satisfied Clients
                        </h2>
                        <div class="content-text mb-40">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic enim minus numquam necessitatibus soluta sed quidem excepturi omnis voluptatem, beatae, quisquam iusto nulla aperiam aliquid et laborum. Magnam accusamus voluptatum officia facere.
                            </p>
                        </div>
                    </div>
                    <div class="swiper mb-40" id="testimonial-slider-1" data-aos="fade-up">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slider-item radius-md">
                                    <div class="client gap-20 flex-wrap">
                                        <div class="client-info d-flex align-items-center">
                                            <div class="client-img">
                                                <div class="lazy-container rounded-circle ratio ratio-1-1">
                                                    <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/avatar-1.jpg" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/avatar-1.jpg" alt="Person Image">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h6 class="name mb-1">John Morris</h6>
                                                <span class="designation font-sm">Food Reviewer</span>
                                            </div>
                                        </div>
                                        <div class="ratings size-md flex-column align-items-start gap-2">
                                            <div class="rate">
                                                <div class="rating-icon"></div>
                                            </div>
                                            <div class="ratings-total">5 star of 20 review</div>
                                        </div>
                                    </div>
                                    <div class="quote">
                                        <span class="icon"><i class="fal fa-quote-right"></i></span>
                                        <p class="text font-lg mb-0">
                                            Lorem sit amet nulla massa. Nulla facilisi. Sed purus dui, luctus eget lectus quis, volutpat volutpat est. Aliquam porttitor vitae lacus ac imperdiet. Aliquam luctus lacinia felis, vel rutrum ex tempus at Donec malesuada mauris in leo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-item radius-md">
                                    <div class="client gap-20 flex-wrap">
                                        <div class="client-info d-flex align-items-center">
                                            <div class="client-img">
                                                <div class="lazy-container rounded-circle ratio ratio-1-1">
                                                    <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/avatar-2.jpg" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/avatar-2.jpg" alt="Person Image">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h6 class="name mb-1">Kelly Minar</h6>
                                                <span class="designation font-sm">Cake Designer</span>
                                            </div>
                                        </div>
                                        <div class="ratings size-md flex-column align-items-start gap-2">
                                            <div class="rate">
                                                <div class="rating-icon"></div>
                                            </div>
                                            <div class="ratings-total">5 star of 20 review</div>
                                        </div>
                                    </div>
                                    <div class="quote">
                                        <span class="icon"><i class="fal fa-quote-right"></i></span>
                                        <p class="text font-lg mb-0">
                                            Pellentesque sit amet nulla massa. Nulla facilisi. Sed purus dui, luctus eget lectus quis, volutpat volutpat est. Aliquam porttitor vitae lacus ac imperdiet. Aliquam luctus lacinia felis, vel rutrum ex tempus at Donec malesuada mauris in leo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-item radius-md">
                                    <div class="client gap-20 flex-wrap">
                                        <div class="client-info d-flex align-items-center">
                                            <div class="client-img">
                                                <div class="lazy-container rounded-circle ratio ratio-1-1">
                                                    <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/avatar-3.jpg" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/avatar-3.jpg" alt="Person Image">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h6 class="name mb-1">Maria May</h6>
                                                <span class="designation font-sm">CEO, Foodcred</span>
                                            </div>
                                        </div>
                                        <div class="ratings size-md flex-column align-items-start gap-2">
                                            <div class="rate">
                                                <div class="rating-icon"></div>
                                            </div>
                                            <div class="ratings-total">5 star of 20 review</div>
                                        </div>
                                    </div>
                                    <div class="quote">
                                        <span class="icon"><i class="fal fa-quote-right"></i></span>
                                        <p class="text font-lg mb-0">
                                            Donec sit amet nulla massa. Nulla facilisi. Sed purus dui, luctus eget lectus quis, volutpat volutpat est. Aliquam porttitor vitae lacus ac imperdiet. Aliquam luctus lacinia felis, vel rutrum ex tempus at Donec malesuada mauris in leo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination position-static mt-30" id="testimonial-slider-1-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image mb-40" data-aos="fade-left">
                        <img class="lazyload blur-up" src="https://themeforest.kreativdev.com/treats/demo/assets/images/testimonial-img-1.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/testimonial-img-1.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial-area end -->

    <!-- Blog-area start -->
    <section class="blog-area blog-1 pt-100 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <div class="section-title title-inline mb-50" data-aos="fade-up">
                            <div>
                                <h2 class="title">Explore Our Blog Post</h2>
                            </div>
                            <button class="btn btn-lg btn-primary rounded-pill" type="button" aria-label="Read Now">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-4 col-md-6" data-aos="fade-up">
                            <article class="card mb-25 radius-md">
                                <div class="card-img">
                                    <a href="blog-details.html" target="_self" title="Link" class="lazy-container ratio ratio-5-3">
                                        <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/blog/blog-1.jpg" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/blog/blog-1.jpg" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="card-content radius-md p-25">
                                    <ul class="card-list list-unstyled mb-15">
                                        <li class="font-sm icon-start">
                                            <a href="blogs.html" target="_self" title="Link"><i class="fal fa-user"></i>By Admin</a>
                                        </li>
                                        <li class="font-sm icon-start">
                                            <a href="blogs.html" target="_self" title="Link"><i class="fal fa-calendar-check"></i>30.08.2023</a>
                                        </li>
                                        <li class="font-sm icon-start">
                                            <a href="blogs.html" target="_self" title="Link"><i class="fal fa-tag"></i>Pizza</a>
                                        </li>
                                    </ul>
                                    <h4 class="card-title lc-2 mb-15">
                                        <a href="blog-details.html" target="_self" title="Link">
                                            10 Must-Try Restaurants That Will Take Your Taste Buds on a World Tour!
                                        </a>
                                    </h4>
                                    <a href="blogs.html" class="btn-text color-primary" target="_self" title="Read More">Read More</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-md-6" data-aos="fade-up">
                            <article class="card mb-25 radius-md">
                                <div class="card-img">
                                    <a href="blog-details.html" target="_self" title="Link" class="lazy-container ratio ratio-5-3">
                                        <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/blog/blog-2.jpg" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/blog/blog-2.jpg" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="card-content radius-md p-25">
                                    <ul class="card-list list-unstyled mb-15">
                                        <li class="font-sm icon-start">
                                            <a href="blogs.html" target="_self" title="Link"><i class="fal fa-user"></i>By Max</a>
                                        </li>
                                        <li class="font-sm icon-start">
                                            <a href="blogs.html" target="_self" title="Link"><i class="fal fa-calendar-check"></i>03.06.2023</a>
                                        </li>
                                        <li class="font-sm icon-start">
                                            <a href="blogs.html" target="_self" title="Link"><i class="fal fa-tag"></i>Drinks</a>
                                        </li>
                                    </ul>
                                    <h4 class="card-title lc-2 mb-15">
                                        <a href="blog-details.html" target="_self" title="Link">
                                            From Foodie Heaven to Budget-Friendly Eats: Top Restaurants for Every Palate!
                                        </a>
                                    </h4>
                                    <a href="blogs.html" class="btn-text color-primary" target="_self" title="Read More">Read More</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-md-6" data-aos="fade-up">
                            <article class="card mb-25 radius-md">
                                <div class="card-img">
                                    <a href="blog-details.html" target="_self" title="Link" class="lazy-container ratio ratio-5-3">
                                        <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/blog/blog-3.jpg" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/blog/blog-3.jpg" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="card-content radius-md p-25">
                                    <ul class="card-list list-unstyled mb-15">
                                        <li class="font-sm icon-start">
                                            <a href="blogs.html" target="_self" title="Link"><i class="fal fa-user"></i>By Linda</a>
                                        </li>
                                        <li class="font-sm icon-start">
                                            <a href="blogs.html" target="_self" title="Link"><i class="fal fa-calendar-check"></i>21.01.2023</a>
                                        </li>
                                        <li class="font-sm icon-start">
                                            <a href="blogs.html" target="_self" title="Link"><i class="fal fa-tag"></i>Food</a>
                                        </li>
                                    </ul>
                                    <h4 class="card-title lc-2 mb-15">
                                        <a href="blog-details.html" target="_self" title="Link">
                                            Restaurant Secrets Revealed: The Inside Scoop on Creating Irresistible Dishes!
                                        </a>
                                    </h4>
                                    <a href="blogs.html" class="btn-text color-primary" target="_self" title="Read More">Read More</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog-area end -->

    <!-- Gallery-area start -->
    <div class="gallery-area" data-aos="fade-up">
        <div class="container">
            <div class="swiper gallery-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="https://www.instagram.com/" class="slider-item" title="Image" target="_blank">
                            <div class="lazy-container ratio ratio-2-3">
                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/gallery/gallery-1.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/gallery/gallery-1.png" alt="Image">
                            </div>
                            <div class="icon rounded-pill"><img class="lazyload blur-up" src="assets/images/placeholder.png" data-src="assets/images/instagram.png" alt="Image"></div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.instagram.com/" class="slider-item" title="Image" target="_blank">
                            <div class="lazy-container ratio ratio-2-3">
                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/gallery/gallery-2.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/gallery/gallery-2.png" alt="Image">
                            </div>
                            <div class="icon rounded-pill"><img class="lazyload blur-up" src="assets/images/instagram.png" data-src="assets/images/instagram.png" alt="Image"></div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.instagram.com/" class="slider-item" title="Image" target="_blank">
                            <div class="lazy-container ratio ratio-2-3">
                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/gallery/gallery-3.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/gallery/gallery-3.png" alt="Image">
                            </div>
                            <div class="icon rounded-pill"><img class="lazyload blur-up" src="assets/images/placeholder.png" data-src="assets/images/instagram.png" alt="Image"></div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.instagram.com/" class="slider-item" title="Image" target="_blank">
                            <div class="lazy-container ratio ratio-2-3">
                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/gallery/gallery-4.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/gallery/gallery-4.png" alt="Image">
                            </div>
                            <div class="icon rounded-pill"><img class="lazyload blur-up" src="assets/images/placeholder.png" data-src="assets/images/instagram.png" alt="Image"></div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.instagram.com/" class="slider-item" title="Image" target="_blank">
                            <div class="lazy-container ratio ratio-2-3">
                                <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/gallery/gallery-5.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/gallery/gallery-5.png" alt="Image">
                            </div>
                            <div class="icon rounded-pill"><img class="lazyload blur-up" src="assets/images/placeholder.png" data-src="assets/images/instagram.png" alt="Image"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery-area end -->

    <!-- Footer-area start -->
    <footer class="footer-area bg-img bg-cover" data-bg-image="assets/images/footer-bg-1.jpg">
        <div class="overlay opacity-95"></div>
        <div class="container">
            <div class="footer-top pt-90 pb-60">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-7 col-sm-12">
                        <div class="footer-widget" data-aos="fade-up">
                            <div class="navbar-brand">
                                <a href="index.html" target="_self" title="Link">
                                    <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/logo/logo-1.png" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/logo/logo-1.png" alt="Treats logo">
                                </a>
                            </div>
                            <p>
                                We invite you to embark on a culinary adventure with us. Discover a harmonious blend of flavors, impeccable service, and a dining experience that will linger in your memory long after you leave.
                            </p>
                            <div class="social-link">
                                <a href="https://www.instagram.com/" target="_blank" title="Link"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.dribbble.com/" target="_blank" title="Link"><i class="fab fa-dribbble"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" title="Link"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.youtube.com/" target="_blank" title="Link"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget" data-aos="fade-up">
                            <h4>Useful Links</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="shop.html" target="_self" title="link">All Categories</a>
                                </li>
                                <li>
                                    <a href="menu.html" target="_self" title="link">Food Menu</a>
                                </li>
                                <li>
                                    <a href="contact.html" target="_self" title="link">My Account</a>
                                </li>
                                <li>
                                    <a href="contact.html" target="_self" title="link">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="about.html" target="_self" title="link">About Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-widget" data-aos="fade-up">
                            <h4>Recent Post</h4>
                            <article class="article-item">
                                <div class="image">
                                    <a href="blog-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 radius-sm">
                                        <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/blog/footer-blog-1.jpg" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/blog/footer-blog-1.jpg" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="lc-2 mb-10">
                                        <a href="blog-details.html" target="_self" title="Blog">
                                            The Ultimate Food Challenge: Can You Handle These Epic Restaurant Dishes?
                                        </a>
                                    </h6>
                                    <ul class="blog-list list-unstyled">
                                        <li class="font-sm icon-start"><i class="far fa-user-alt"></i>Admin</li>
                                        <li class="font-sm icon-start"><i class="fal fa-calendar-alt"></i>18-08-2023</li>
                                    </ul>
                                </div>
                            </article>
                            <article class="article-item">
                                <div class="image">
                                    <a href="blog-details.html" target="_self" title="Link" class="lazy-container ratio ratio-1-1 radius-sm">
                                        <img class="lazyload" src="https://themeforest.kreativdev.com/treats/demo/assets/images/blog/footer-blog-2.jpg" data-src="https://themeforest.kreativdev.com/treats/demo/assets/images/blog/footer-blog-2.jpg" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="lc-2 mb-10">
                                        <a href="blog-details.html" target="_self" title="Blog">
                                            Savor the Moment: 5 Unique Restaurants with Stunning Views You Must Visit!
                                        </a>
                                    </h6>
                                    <ul class="blog-list list-unstyled">
                                        <li class="font-sm icon-start"><i class="far fa-user-alt"></i>Admin</li>
                                        <li class="font-sm icon-start"><i class="fal fa-calendar-alt"></i>18-08-2023</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-widget" data-aos="fade-up">
                            <h4>Contact Us</h4>
                            <ul class="info-list">
                                <li>
                                    <i class="fal fa-map-marker-alt"></i>
                                    <span>piler, chittoor</span>
                                </li>
                                <li>
                                    <i class="fal fa-envelope"></i>
                                    <div class="link">
                                        <a href="mailto:helpline@example.com" target="_self" title="Link">helpline@example.com</a>
                                        <a href="mailto:getinfo@example.com" target="_self" title="Link">getinfo@example.com</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="fal fa-headset"></i>
                                    <div class="link">
                                        <a href="tel:99911446666" target="_self" title="Link">+999 11 44 6666</a>
                                        <a href="tel:9992233555" target="_self" title="Link">+999 22 33 5555</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="newsletter radius-md">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-md-6">
                        <h4 class="mb-15">Subscribe Our Newsletter</h4>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="newsletter-form mb-15">
                            <form id="newsletterForm">
                                <div class="form-group">
                                    <input class="form-control shadow-md rounded-pill" placeholder="Enter email here..." type="text" name="EMAIL" required="" autocomplete="off">
                                    <button class="btn btn-lg btn-primary rounded-pill" type="submit">
                                        <span class="d-inline d-sm-none">
                                            <i class="fal fa-paper-plane"></i>
                                        </span>
                                        <span class="d-none d-sm-inline">Subscribe</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right-area ptb-30">
                <div class="copy-right-content">
                    <span>
                        Copyright <i class="fal fa-copyright"></i><span id="footerDate"></span> <a href="index.html" target="_self" title="Treats" class="color-primary">Treats</a>. All Rights Reserved
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer-area end-->

    <!-- Go to Top -->
    <div class="go-top"><i class="fal fa-angle-up"></i></div>
    <!-- Go to Top -->

    <!-- Jquery JS -->
    <script src="assets/js/vendors/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <!-- Counter JS -->
    <script src="assets/js/vendors/jquery.counterup.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/vendors/jquery.nice-select.min.js"></script>
    <!-- Swiper Slider JS -->
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <!-- Lazysizes -->
    <script src="assets/js/vendors/lazysizes.min.js"></script>
    <!-- Mouse Hover JS -->
    <script src="assets/js/vendors/mouse-hover-move.js"></script>
    <!-- Twinmax JS -->
    <script src="assets/js/vendors/tweenMax.min.js"></script>
    <!-- AOS JS -->
    <script src="assets/js/vendors/aos.min.js"></script>
    <!-- Main script JS -->
    <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themeforest.kreativdev.com/treats/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2023 09:58:47 GMT -->
</html>