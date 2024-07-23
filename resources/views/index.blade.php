<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Violet | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.html"><img src="{{ asset('frontend/img/logo.png') }}" alt="Logo"></a>
                </div>
                <div class="header-right">
                    <img src="{{ asset('frontend/img/icons/search.png') }}" alt="" class="search-trigger">
                    <img src="{{ asset('frontend/img/icons/man.png') }}" alt="">
                    <a href="#">
                        <img src="{{ asset('frontend/img/icons/bag.png') }}" alt="">
                        <span>2</span>
                    </a>
                </div>
                <div class="user-access">
                    <a href="#">Register</a>
                    <a href="#" class="in">Sign in</a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a class="active" href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('shop') }}">Shop</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Info Begin -->
    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-item">
                        <img src="{{ asset('frontend/img/icons/delivery.png') }}" alt="">
                        <p>Free shipping on orders over $30 in USA</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="{{ asset('frontend/img/icons/voucher.png') }}" alt="">
                        <p>20% Student Discount</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-xl-right">
                    <div class="header-item">
                        <img src="{{ asset('frontend/img/icons/sales.png') }}" alt="">
                        <p>30% off on dresses. Use code: 30OFF</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Info End -->
    <!-- Header End -->

    <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="{{ asset('frontend/img/slider-1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="{{ asset('frontend/img/slider-2.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="{{ asset('frontend/img/slider-3.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Features Section Begin -->
    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="{{ asset('frontend/img/icons/f-delivery.png') }}" alt="">
                            <h4>Free shipping</h4>
                            <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vestibulum malesuada aliquet libero viverra cursus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="{{ asset('frontend/img/icons/coin.png') }}" alt="">
                            <h4>100% Money back</h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vestibulum malesuada aliquet libero viverra cursus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="{{ asset('frontend/img/icons/chat.png') }}" alt="">
                            <h4>Online support 24/7</h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vestibulum malesuada aliquet libero viverra cursus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Box -->
        <div class="features-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-box-item first-box">
                                    <img src="{{ asset('frontend/img/f-box-1.jpg') }}" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Party</span>
                                        <h2>Jewelry</h2>
                                        <span class="trend-alert">Trend Allert</span>
                                        <a href="#" class="primary-btn">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-box-item second-box">
                                    <img src="{{ asset('frontend/img/f-box-2.jpg') }}" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Trend</span>
                                        <h2>Footwear</h2>
                                        <span class="trend-alert">Bold & Black</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box-item large-box">
                            <img src="{{ asset('frontend/img/f-box-3.jpg') }}" alt="">
                            <div class="box-text">
                                <span class="trend-year">2019 Party</span>
                                <h2>Collection</h2>
                                <div class="trend-alert">Cool & Elegant</div>
                                <a href="#" class="primary-btn">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="section-title">
                    <h2>Latest Products</h2>
                </div>
                <ul class="product-controls">
                    <li data-filter="all">All</li>
                    <li data-filter=".women">Women</li>
                    <li data-filter=".men">Men</li>
                    <li data-filter=".kids">Kids</li>
                </ul>
            </div>
            <div class="row" id="product-list">
                <div class="col-lg-3 col-sm-6 mix all men">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="{{ asset('frontend/img/products/img-1.jpg') }}" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <h6>Green Dress with details</h6>
                            <p>$22.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all women">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="{{ asset('frontend/img/products/img-2.jpg') }}" alt=""></a>
                            <div class="p-status sale">sale</div>
                        </figure>
                        <div class="product-text">
                            <h6>Yellow Maxi Dress</h6>
                            <p>$25.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all kids">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="{{ asset('frontend/img/products/img-3.jpg') }}" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <h6>One piece bodysuit</h6>
                            <p>$19.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all men">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="{{ asset('frontend/img/products/img-4.jpg') }}" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <h6>Blue Dress with details</h6>
                            <p>$22.90</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product End -->

    <!-- Lookbok Section Begin -->
    <section class="lookbok-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="lookbok-left">
                        <div class="section-title">
                            <h2>2019 <br />#lookbook</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium id eros sed suscipit. Pellentesque vestibulum dui eget libero tempus sodales. Quisque ac bibendum libero. Etiam viverra ut turpis a tincidunt. </p>
                        <a href="#" class="primary-btn look-btn">See More</a>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="lookbok-pic set-bg" data-setbg="{{ asset('frontend/img/lookbok.jpg') }}"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lookbok Section End -->

    <!-- Logo Section Begin -->
    <div class="logo-section spad">
        <div class="container">
            <div class="logo-items owl-carousel">
                <div class="logo-item">
                    <img src="{{ asset('frontend/img/logos/logo-1.png') }}" alt="">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('frontend/img/logos/logo-2.png') }}" alt="">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('frontend/img/logos/logo-3.png') }}" alt="">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('frontend/img/logos/logo-4.png') }}" alt="">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('frontend/img/logos/logo-5.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-logo">
                <a href="#"><img src="{{ asset('frontend/img/logo.png') }}" alt=""></a>
            </div>
            <div class="newslatter-form">
                <form action="#">
                    <input type="text" placeholder="Your email address">
                    <button type="submit">Subscribe to our newsletter</button>
                </form>
            </div>
            <div class="footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
            <div class="copyright-text">
                <p>
                    &copy; 2023 All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
