<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ororus - eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">


    <!-- CSS files
    ============================================ -->

    <!-- Boostrap stylesheet -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">

    <!-- Plugins stylesheet -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Master stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!--[if lt IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
    <![endif]-->

    <!-- Start of Whole Site Wrapper with mobile menu support -->
    <div id="whole" class="whole-site-wrapper color-scheme-one">

        <!-- Start of Header -->
        <header class="header bgc-white inner-header">
            <div class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 align-self-center">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt="Logo" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                            <div class="top-header">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-12 col-md-7 col-lg-6 order-md-2 order-lg-1">
                                        <div class="top-search">
                                            <p>Trending Search: <a href="#">Headphones</a>, <a href="#">Electronics</a>, <a href="#">Mobile</a>...</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-md-1 order-lg-2">
                                        <ul class="list-inline">
                                            <li class="top-links list-inline-item">
                                                <div class="btn-group">
                                                    <button class="btn-link dropdown-toggle">
                                                       My Account <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                           <li><a href="register.html">Register</a></li>
                                                           <li><a href="login.html">Login</a></li>
                                                           <li><a href="cart.html">Shopping Cart</a></li>
                                                           <li><a href="checkout.html">Checkout</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="language list-inline-item">
                                                <div class="btn-group">
                                                    <button class="btn-link dropdown-toggle"><img src="assets/images/icons/en-gb.png" alt="Icons"> English <i class="fa fa-angle-down"></i></button>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                           <li><a href="#"><img src="assets/images/icons/en-gb.png" alt="Icons"> English</a></li>
                                                           <li><a href="#"><img src="assets/images/icons/fr-fr.png" alt="Icons"> French</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="currency list-inline-item">
                                                <div class="btn-group">
                                                    <button class="btn-link dropdown-toggle"> USD <i class="fa fa-angle-down"></i></button>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                           <li><a href="#">€ Euro</a></li>
                                                           <li><a href="#">£ Pound Sterling</a></li>
                                                           <li><a href="#">$ US Dollar</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- end of top-header -->

                            <div class="bottom-header">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                                        <div class="header-search-area">
                                            <div class="search-categories">
                                                <form action="#">
                                                    <div class="search-form-input">
                                                        <select id="select" name="select" class="nice-select">
                                                            <option>All Categories</option>
                                                            <option>Gamepad</option>
                                                            <option>Laptop</option>
                                                            <option>Mobile</option>
                                                            <option>Cell Phones</option>
                                                            <option>Phone Cases</option>
                                                            <option>Cell Phones</option>
                                                            <option>SmartWatch</option>
                                                            <option>Tvs</option>
                                                            <option>D-Series TVs</option>
                                                            <option>LED TVs</option>
                                                            <option>OLED TVs</option>
                                                            <option>Video Games</option>
                                                            <option>Controllers</option>
                                                            <option>PC Gamepads</option>
                                                            <option>Xbox 360</option>
                                                            <option>Shop</option>
                                                            <option>Earbud</option>
                                                            <option>Keyboard</option>
                                                            <option>Watches</option>
                                                            <option>Blazers</option>
                                                            <option>Microphones</option>
                                                        </select>
                                                        <div class="search-wrapper">
                                                            <input type="text" placeholder="Search">
                                                            <button class="header-search-btn" type="submit"><i class="ion ion-ios-search"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div> <!-- end of header-search-area -->
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                                        <div class="header-cart-area">
                                            <div class="header-cart">
                                                <div class="btn-group">
                                                    <button class="btn-link dropdown-toggle icon-cart">
                                                        <i class="pe-7s-cart"></i>
                                                        <span class="count-style">2</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <div class="shopping-cart-content">
                                                            <ul class="list-unstyled">
                                                                <li class="single-cart-item media">
                                                                    <div class="shopping-cart-img mr-4">
                                                                        <a href="#">
                                                                            <img class="img-fluid" alt="Cart Item" src="assets/images/cart/cart-1.jpg">
                                                                            <span class="product-quantity">1x</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="shopping-cart-title media-body">
                                                                        <h4><a href="#">Donec Ac Tempus</a></h4>
                                                                        <p class="cart-price">$120.00</p>
                                                                        <div class="product-attr">
                                                                            <span>Size: S</span>
                                                                            <span>Color: Black</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shopping-cart-delete">
                                                                        <a href="#"><i class="ion ion-md-close"></i></a>
                                                                    </div>
                                                                </li>
                                                                <li class="single-cart-item media">
                                                                    <div class="shopping-cart-img mr-4">
                                                                        <a href="#">
                                                                            <img class="img-fluid" alt="Cart Item" src="assets/images/cart/cart-2.jpg">
                                                                            <span class="product-quantity">2x</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="shopping-cart-title media-body">
                                                                        <h4><a href="#">Aliquam Consequat</a></h4>
                                                                        <p class="cart-price">$200.00</p>
                                                                        <div class="product-attr">
                                                                            <span>Color: White</span>
                                                                            <span>Accessories: Yes</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shopping-cart-delete">
                                                                        <a href="#"><i class="ion ion-md-close"></i></a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="shopping-cart-total">
                                                                <h4>Sub-Total : <span>$320.00</span></h4>
                                                                <h4>Total : <span>$320.00</span></h4>
                                                            </div>
                                                            <div class="shopping-cart-btn">
                                                                <a class="default-btn" href="cart.html">view cart</a>
                                                                <a class="default-btn" href="checkout.html">checkout</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="header-contact media">
                                                <div class="header-contact-icon mr-4">
                                                    <i class="pe-7s-headphones"></i>
                                                </div>
                                                <div class="header-contact-content media-body">
                                                    <p><span>CALL US NOW:</span> <br><a href="#">+88 123.456.789</a></p>
                                                </div>
                                            </div>
                                        </div> <!-- end of header-cart-area -->
                                    </div>
                                </div>
                            </div> <!-- end of bottom-header -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of header-area -->

            <!-- Start of Main and Mobile Navigation -->
            <div class="main-nav-area">
                <div class="container">
                    <nav id="main_nav" class="stellarnav">
                        <ul class="text-left">
                            <li><a href="index.html"><span>Home</span></a>
                                <ul>
                                    <li><a href="index.html">Home Page 1</a></li>
                                    <li><a href="index-2.html">Home Page 2</a></li>
                                    <li><a href="index-3.html">Home Page 3</a></li>
                                    <li><a href="index-4.html">Home Page 4</a></li>
                                </ul>
                            </li>
                            <li class="mega" data-columns="3"><a href="my-account.html"><span>Pages</span></a>
                                <ul class="mega-container">
                                    <li><a href="my-account.html" class="mega-menu-title"><h3>Inner pages 01</h3></a>
                                        <ul>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#" class="mega-menu-title"><h3>Inner pages 02</h3></a>
                                        <ul>
                                            <li><a href="cart.html">Cart Page</a><li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="wishlist.html">Wishlist Page</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#" class="mega-menu-title"><h3>Inner pages 03</h3></a>
                                        <ul>
                                            <li><a href="compare.html">Product Compare</a></li>
                                            <li><a href="faqs.html">FAQs Page</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop-grid.html"><span>Shop Pages</span></a>
                                <ul>
                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                    <li><a href="single-product.html">Single Product Page</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html"><span>Blog Pages</span></a>
                                <ul>
                                    <li><a href="blog.html">Blog FullWidth</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html"><span>About Us</span></a></li>
                            <li><a href="contact.html"><span>Contact Us</span></a></li>
                        </ul>
                    </nav>
                </div> <!-- end of container -->
            </div>
            <!-- End of Main and Mobile Navigation -->
        </header>
        <!-- End of Header -->
        
        <div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

        <!-- Start of Breadcrumbs -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="index.html">Home</a>
                            <?php 
                                if(!isset($_POST['send_message'])) { ?>
                                    <span class="breadcrumb-item active">Form Not Submitted</span>                                
                                <?php
                                } else { ?>
                                    <span class="breadcrumb-item active">Thanks for Your Submission</span>
                                <?php
                                }
                             ?>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            <div class="feedback-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-8 offset-sm-2 col-md-8 offset-md-2 text-center">
                            <main id="primary" class="site-main">
                                <section class="feedback-wrapper">
                                    <div class="section-heading">
                                        <?php

                                            if(isset($_POST['send_message'])) {
                                                $status = 'Thanks for <span class="primary-color">contacting us!</span>';
                                                $feedback = 'We will get back to you as quickly as possible.';

                                                $name = @trim(stripslashes($_POST['name'])); 
                                                $email = @trim(stripslashes($_POST['email'])); 
                                                $subject = @trim(stripslashes($_POST['subject']));
                                                $message = @trim(stripslashes($_POST['message']));
                                                $notes = 'This email was sent from '.$_SERVER['HTTP_HOST'];
                                                $email_from = $email;
                                                $email_to = 'admin@example.com'; //replace with your email

                                                $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' ."\n". $message . "\n\n\n\n" . $notes;
                                                $success = @mail($email_to, $subject, $body, 'From: <'.$name.'>'); ?>

                                                <h2><?php echo $status; ?></h2>
                                                <p class="subtitle"><?php echo $feedback; ?></p>
                                            <?php
                                            } else { ?>

                                                <h2>Form Not Submitted!</h2>
                                                <p class="subtitle">Please make sure you entered the form information correctly.</p>

                                            <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="feedback-socials mt-full">
                                        <h3>Follow Us:</h3>
                                        <div class="social-sharing d-flex align-items-center justify-content-center">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="#" class="bg-facebook" data-toggle="tooltip" data-position="top" data-original-title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="bg-twitter" data-toggle="tooltip" data-position="top" data-original-title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="bg-gplus" data-toggle="tooltip" data-position="top" data-original-title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="bg-pinterest" data-toggle="tooltip" data-position="top" data-original-title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </section> <!-- end of feedback-wrapper -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>

            <!-- Start of Newsletter Section -->
            <section class="newsletter-section vpadding bgc-offset">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                            <div class="newsletter-title d-lg-flex justify-content-lg-start">
                                <h6>Subscribe to our Newsletter</h6>
                                <h3>Subscribe to our newsletter and know first about all the promotions and discounts. Be always trendy.</h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                            <div class="newsletter-form-wrapper">
                                <form action="index.html" method="post">
                                    <input type="email" name="email" placeholder="Enter you email address here..." value="" required> 
                                    <input type="submit" class="default-btn" name="contact" value="Subscribe">
                                </form>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Newsletter Section -->
        </div>
        <!-- End of Main Content Wrapper -->

        <!-- Start of Footer -->
        <footer id="colophon">

            <!-- Footer Widgets Area -->
            <div class="footer-widgets-area">
                <div class="container">
                    <div class="footer-inner">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                                <aside class="widget-container">
                                    <h4 class="widgettitle">Contact Info</h4>
                                    <div class="widget-content">
                                        <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                                        <div class="footer-contact">
                                            <p class="footer-address">The Barn, Ullenhall, Henley in Arden B578 5CC, England</p>
                                            <p class="footer-phone">+123.456.789 - +123.456.678</p>
                                            <p class="footer-email">support@example.com</p>
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                                <aside class="widget-container">
                                    <h4 class="widgettitle">Recent Posts</h4>
                                    <div class="widget-content">
                                        <div class="recent-posts-widget">

                                            <!-- Slides -->
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="posts-single media">
                                                        <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                            <a href="#">
                                                                <img src="assets/images/blog/blog-thumb-1.jpg" alt="Blog Image">
                                                                <div class="overlay"></div>
                                                            </a>
                                                        </div>
                                                        <div class="post-content media-body">
                                                            <div class="post-title">
                                                                <h5><a href="">Aypi non habent claritatem insitam</a></h5>
                                                            </div>
                                                            <div class="post-date">09 Aug</div>
                                                        </div>
                                                    </div> <!-- end of posts-single -->

                                                    <div class="posts-single media">
                                                        <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                            <a href="#">
                                                                <img src="assets/images/blog/blog-thumb-2.jpg" alt="Blog Image">
                                                                <div class="overlay"></div>
                                                            </a>
                                                        </div>
                                                        <div class="post-content media-body">
                                                            <div class="post-title">
                                                                <h5><a href="">Bypi non habent claritatem insitam</a></h5>
                                                            </div>
                                                            <div class="post-date">09 Aug</div>
                                                        </div>
                                                    </div> <!-- end of posts-single -->
                                                </div>

                                                <div class="swiper-slide">
                                                    <div class="posts-single media">
                                                        <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                            <a href="#">
                                                                <img src="assets/images/blog/blog-thumb-3.jpg" alt="Blog Image">
                                                                <div class="overlay"></div>
                                                            </a>
                                                        </div>
                                                        <div class="post-content media-body">
                                                            <div class="post-title">
                                                                <h5><a href="">Cabent claritatem insitam</a></h5>
                                                            </div>
                                                            <div class="post-date">21 Nov</div>
                                                        </div>
                                                    </div> <!-- end of posts-single -->

                                                    <div class="posts-single media">
                                                        <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                            <a href="#">
                                                                <img src="assets/images/blog/blog-thumb-4.jpg" alt="Blog Image">
                                                                <div class="overlay"></div>
                                                            </a>
                                                        </div>
                                                        <div class="post-content media-body">
                                                            <div class="post-title">
                                                                <h5><a href="">Cypi non habent claritatem insitam</a></h5>
                                                            </div>
                                                            <div class="post-date">09 Aug</div>
                                                        </div>
                                                    </div> <!-- end of posts-single -->
                                                </div>
                                            </div>
                                        </div> <!-- end of recent-posts-widget -->
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-2">
                                <aside class="widget-container">
                                    <h4 class="widgettitle">Information</h4>
                                    <div class="widget-content">
                                        <div class="widgetized-menu">
                                            <ul class="list-unstyled">
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Delivery Information</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Terms &amp; Conditions</a></li>
                                                <li><a href="#">Brands</a></li>
                                                <li><a href="#">Gift Certificates</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <aside class="widget-container">
                                    <h4 class="widgettitle">Popular Tags</h4>
                                    <div class="widget-content">
                                        <div class="tags-widget">
                                            <ul>
                                                <li><a href="#">headphones</a></li>
                                                <li><a href="#">mobile</a></li>
                                                <li><a href="#">gamepad</a></li>
                                                <li><a href="#">cameras</a></li>
                                                <li><a href="#">drone</a></li>
                                                <li><a href="#">tvs</a></li>
                                                <li><a href="#">smartwatch</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->
                            </div>
                        </div> <!-- end of row -->
                    </div> <!-- end of footer-inner -->
                </div> <!-- end of container -->
            </div> <!-- end of footer-widgets-area -->

            <!-- Footer Description -->
            <div class="footer-description">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <h2>Online Shopping at Ororus.</h2>
                            <p>Our extensive and affordable range features the very latest electronics and gadgets including smart phones, tablets, smart watches, action cams, tv boxes, televisions, drones, 3d printers, car dvr, along with the latest cool toys like scooters, gaming accessories, doll houses, pretend play and high quality lifestyle products comprising vacuum cleaners, air purifier, kitchen tools, ceiling lights, flashlight, oil painting, etc.</p>
                        </div>
                    </div> <!-- endo of row -->
                </div> <!-- end of container -->
            </div> <!-- end of footer-description -->

            <!-- Footer Copyright -->
            <div class="footer-copyright">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <p class="copyright-text">Copyright © 2018 <a href="#" rel="nofollow">Ororus Themes</a>. All Right Reserved.</p>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="footer-payment">
                                <ul>
                                    <li><a href="#"><img src="assets/images/icons/payment-1.jpg" alt="Payment Icons"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/payment-2.jpg" alt="Payment Icons"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/payment-3.jpg" alt="Payment Icons"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/payment-4.jpg" alt="Payment Icons"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/payment-5.jpg" alt="Payment Icons"></a></li>
                                    <li><a href="#"><img src="assets/images/icons/payment-6.jpg" alt="Payment Icons"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of footer-copyright -->
        </footer>
        <!-- End of Footer -->

        <!-- Start of Scroll to Top -->
        <div id="to_top">
            <i class="ion ion-ios-arrow-forward"></i>
            <i class="ion ion-ios-arrow-forward"></i>
        </div>
        <!-- End of Scroll to Top -->
    </div>
    <!-- End of Whole Site Wrapper -->

    <!-- Initializing Photoswipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Photoswipe -->


    <!-- JS
    ============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/jquery.1.12.4.min.js"></script>

    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>
</html>
<?php die; ?>