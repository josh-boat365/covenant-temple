<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Triumphant Christian Center Pokuase Branch">
    <meta property="og:description" content="A church where lives are being changed, the move of God is at work.">
    <meta property="og:image" content="{{ asset('images/tcc-title-logo.png') }}">
    <meta property="og:url" content="http://digipunk.netii.net">
    <link rel="icon" href="{{ asset('images/tcc-title-logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('components/base/base.css') }}">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    <div class="page">
        <!-- Intro slider-->
        <section class="intro intro-line context-dark">
            <!--RD Navbar-->
            <header class="section rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-line">
                    <div class="navbar-container intro-line-row">
                        <div class="intro-line-col">
                            <div class="navbar-cell">
                                <div class="navbar-panel">
                                    <button class="navbar-switch linearicons-menu"
                                        data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","isolate":"[data-multi-switch]"}'></button>
                                    <div class="navbar-logo"><a class="navbar-logo-link"
                                            href="{{ route('index') }}"><img class="navbar-logo-default"
                                                src="{{ asset('images/main-logo.png') }}" alt="TCC Logo" /><img
                                                class="navbar-logo-inverse" src="{{ asset('images/main-logo.png') }}"
                                                alt="TCC Logo" /></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-line-col intro-line-col-center">
                            <div class="navbar-cell">
                                <ul class="navbar-navigation rd-navbar-nav">
                                    <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link"
                                            href="about-us.html">About</a>
                                        <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                            <li class="navbar-navigation-back">
                                                <button class="navbar-navigation-back-btn">Back</button>
                                            </li>
                                            <li class="navbar-navigation-dropdown-item"><a
                                                    class="navbar-navigation-dropdown-link" href="team-member.html">Team
                                                    member</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link"
                                            href="donations.html">Donations</a>
                                        <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                            <li class="navbar-navigation-back">
                                                <button class="navbar-navigation-back-btn">Back</button>
                                            </li>
                                            <li class="navbar-navigation-dropdown-item"><a
                                                    class="navbar-navigation-dropdown-link"
                                                    href="single-donation.html">Single Donation</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="navbar-navigation-root-item navbar-navigation-item-hidden"><a
                                            class="navbar-navigation-root-link" href="#">Pages</a>
                                        <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                            <li class="navbar-navigation-back">
                                                <button class="navbar-navigation-back-btn">Back</button>
                                            </li>
                                            <li class="navbar-navigation-dropdown-item"><a
                                                    class="navbar-navigation-dropdown-link" href="#">Blog</a>
                                                <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                                    <li class="navbar-navigation-back">
                                                        <button class="navbar-navigation-back-btn">Back</button>
                                                    </li>
                                                    <li class="navbar-navigation-dropdown-item"><a
                                                            class="navbar-navigation-dropdown-link"
                                                            href="classic-blog.html">Classic blog</a>
                                                    </li>
                                                    <li class="navbar-navigation-dropdown-item"><a
                                                            class="navbar-navigation-dropdown-link"
                                                            href="blog-post.html">Blog post</a>
                                                    </li>
                                                    <li class="navbar-navigation-dropdown-item"><a
                                                            class="navbar-navigation-dropdown-link"
                                                            href="blog-carousel.html">Blog carousel</a>
                                                    </li>
                                                    <li class="navbar-navigation-dropdown-item"><a
                                                            class="navbar-navigation-dropdown-link"
                                                            href="blog-grid.html">Blog grid</a>
                                                    </li>
                                                    <li class="navbar-navigation-dropdown-item"><a
                                                            class="navbar-navigation-dropdown-link"
                                                            href="blog-grid-without-sidebar.html">Blog grid without
                                                            sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="navbar-navigation-dropdown-item"><a
                                                    class="navbar-navigation-dropdown-link" href="404.html">404</a>
                                            </li>
                                            <li class="navbar-navigation-dropdown-item"><a
                                                    class="navbar-navigation-dropdown-link"
                                                    href="typography.html">Typography</a>
                                            </li>
                                            <li class="navbar-navigation-dropdown-item"><a
                                                    class="navbar-navigation-dropdown-link"
                                                    href="coming-soon.html">Coming soon</a>
                                            </li>
                                            <li class="navbar-navigation-dropdown-item"><a
                                                    class="navbar-navigation-dropdown-link"
                                                    href="search-results.html">Search results</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="navbar-navigation-root-item navbar-navigation-item-hidden"><a
                                            class="navbar-navigation-root-link" href="sermons.html">Sermons</a>
                                        <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                            <li class="navbar-navigation-back">
                                                <button class="navbar-navigation-back-btn">Back</button>
                                            </li>
                                            <li class="navbar-navigation-dropdown-item"><a
                                                    class="navbar-navigation-dropdown-link"
                                                    href="sermon-categories.html">Sermon Categories</a>
                                            </li>
                                            <li class="navbar-navigation-dropdown-item"><a
                                                    class="navbar-navigation-dropdown-link"
                                                    href="single-sermon.html">Single Sermon</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="navbar-navigation-root-item navbar-navigation-item-hidden"><a
                                            class="navbar-navigation-root-link" href="shop.html">Shop</a>
                                        <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                            <li class="navbar-navigation-back">
                                                <button class="navbar-navigation-back-btn">Back</button>
                                            </li>
                                            <li class="navbar-navigation-dropdown-item"><a
                                                    class="navbar-navigation-dropdown-link"
                                                    href="single-product.html">Single product</a>
                                            </li>
                                            <li class="navbar-navigation-dropdown-item"><a
                                                    class="navbar-navigation-dropdown-link"
                                                    href="checkout.html">Checkout</a>
                                            </li>
                                            <li class="navbar-navigation-dropdown-item"><a
                                                    class="navbar-navigation-dropdown-link" href="cart.html">Cart</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="navbar-navigation-root-item navbar-navigation-item-hidden"><a
                                            class="navbar-navigation-root-link" href="contact-us.html">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="navbar-cell navbar-spacer"></div>
                            <div class="navbar-cell">
                                <div class="navbar-subpanel">
                                    <div class="navbar-subpanel-item">
                                        <button class="navbar-button navbar-list-button mdi-dots-vertical"
                                            data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-list-active","isolate":"[data-multi-switch]"}'></button>
                                        <div class="navbar-list">
                                            <div class="navbar-list-icon mdi-cellphone"></div><a
                                                class="link link-inherit navbar-list-link"
                                                href="tel:#">800.567.1234</a>
                                        </div>
                                    </div>
                                    <div class="navbar-subpanel-item">
                                        <button class="navbar-button navbar-cart-button mdi-cart"
                                            data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-cart-active","isolate":"[data-multi-switch]"}'><span
                                                class="navbar-button-badge">1</span></button>
                                        <div class="navbar-aside navbar-cart">
                                            <div class="navbar-cart-item">
                                                <div class="navbar-cart-item-left"><a class="thumbnail-small"
                                                        href="single-product.html"><img
                                                            src="images/product/product-1-72x91.jpg" alt=""
                                                            width="72" height="91" /></a></div>
                                                <div class="navbar-cart-item-body"><a class="navbar-cart-item-heading"
                                                        href="single-product.html">Spring Harvest 2020 Songbook:
                                                        Unleashed</a>
                                                    <div
                                                        class="navbar-cart-item-price d-flex group-10 justify-content-between">
                                                        <div>2 x <span
                                                                class="navbar-cart-item-price-value">$35.00</span>
                                                        </div>
                                                        <button class="navbar-cart-remove mdi-delete"></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="navbar-cart-total">Subtotal: $70.00</div><a
                                                class="btn btn-sm navbar-cart-btn" href="checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                    <div class="navbar-subpanel-item navbar-subpanel-item-mobile">
                                        <button
                                            class="navbar-button navbar-contact-btn navbar-contact-btn-rounded linearicons-menu"
                                            data-multi-switch='{"targets":".rd-navbar","scope":".navbar-subpanel-contact","class":"navbar-contact-active","isolate":"[data-multi-switch]:not( .navbar-button )"}'></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-line-col navbar-subpanel-contact">
                            <div class="navbar-cell align-items-center navbar-subpanel-item-desktop"><span
                                    class="navbar-contact-text">Contacts</span>
                                <button
                                    class="navbar-button navbar-contact-btn navbar-contact-btn-rounded linearicons-menu"
                                    data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-contact-active","isolate":"[data-multi-switch]:not( .navbar-button )"}'></button>
                            </div>
                            <div class="navbar-contact">
                                <ul class="list list-sm">
                                    <li class="list-item">
                                        <h4 class="text-uppercase text-primary">Free Consultation</h4>
                                    </li>
                                    <li class="list-item"><a class="link link-inherit-primary big2"
                                            href="tel:#">800.567.1234</a></li>
                                    <li class="list-item"><a class="link link-inherit-primary"
                                            href="mailto:#">info@demolink.org</a></li>
                                    <li class="list-item"><span>355 S Grand Ave, <br />Los Angeles, CA 90071</span>
                                    </li>
                                </ul>
                                <ul class="list list-divided">
                                    <li class="list-item">
                                        <!-- Blurb link-->
                                        <div class="blurb blurb-link">
                                            <div class="blurb-icon linearicons-credit-card"></div>
                                            <h4 class="blurb-title"><a href="donations.html">Make a Donation</a></h4>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <!-- Blurb link-->
                                        <div class="blurb blurb-link">
                                            <div class="blurb-icon linearicons-bookmark"></div>
                                            <h4 class="blurb-title"><a href="sermons.html">Sermons</a></h4>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <!-- Blurb link-->
                                        <div class="blurb blurb-link">
                                            <div class="blurb-icon linearicons-mic2"></div>
                                            <h4 class="blurb-title"><a href="sermons.html">Events</a></h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="intro-line-table">
                <div class="intro-line-row">
                    <div class="intro-line-col"></div>
                    <div class="intro-line-col intro-line-col-center"></div>
                    <div class="intro-line-col"></div>
                </div>
                <div class="intro-line-row intro-line-content">
                    <div class="intro-line-col"></div>
                    <div class="intro-line-col intro-line-col-center"></div>
                    <div class="intro-line-col"></div>
                </div>
                <div class="intro-line-row">
                    <div class="intro-line-col"></div>
                    <div class="intro-line-col intro-line-col-center intro-line-footer">
                        <div class="container" data-animate='{"class":"fadeIn"}'>
                            <div class="row row-25">
                                <div class="col-lg-9 col-xl-7 text-center text-lg-left">
                                    <!-- Blurb link-->
                                    <div class="blurb blurb-link-2">
                                        <div class="blurb-icon text-white linearicons-compass2"></div>
                                        <div class="blurb-content">
                                            <h4 class="blurb-title"><a href="#">355 S Grand Ave, Los Angeles, CA
                                                    90071</a></h4>
                                            <div class="blurb-subtitle">Feel free to visit our firm’s office at any
                                                time.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-xl-5 text-center text-lg-right">
                                    <div class="group-15 group-lg-30"><a
                                            class="icon icon-md icon-link icon-link-gray mdi-facebook"
                                            href="#"></a><a
                                            class="icon icon-md icon-link icon-link-gray mdi-linkedin"
                                            href="#"></a><a
                                            class="icon icon-md icon-link icon-link-gray mdi-twitter"
                                            href="#"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro-line-col"></div>
                </div>
            </div>
            <!-- Swiper slider-->
            <div class="swiper-container swiper-numbered" data-swiper>
                <!-- Additional required wrapper-->
                <div class="swiper-wrapper">
                    <!-- Slides-->
                    <div class="swiper-slide" style="background-image: url( images/background/bg-8-1920x930.jpg )">
                        <div class="intro-line-container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-lg-7">
                                        <h3 class="font-italic font-secondary"> Welcome to Our Church</h3>
                                        <h1>Join the prayer</h1>
                                        <p class="big">TCC Logo Church is a Family of Faith that is committed to
                                            Bible
                                            teaching and joyful worship for children, youth and adults of all ages.</p>
                                        <a class="btn btn-white" href="#">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url( images/background/bg-9-1920x930.jpg )">
                        <div class="intro-line-container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-lg-7">
                                        <h3 class="font-italic font-secondary"> Reconnect with the Creator</h3>
                                        <h1>Connect & Grow</h1>
                                        <p class="big">Our church is a perfect place for all local residents to come
                                            in with their families and join for a prayer and a newfound peace of mind.
                                        </p><a class="btn btn-white" href="#">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url( images/background/bg-4-1920x930.jpg )">
                        <div class="intro-line-container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-lg-7">
                                        <h3 class="font-italic font-secondary"> Embrace Your Faith</h3>
                                        <h1>Share the love</h1>
                                        <p class="big">At our church, we help people to find their way back to God.
                                            We accomplish this by reaching people far from God.</p><a
                                            class="btn btn-white" href="#">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination-->
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- Cases-->
        <section class="section-lg bg-100 text-center">
            <div class="container container-wide">
                <div class="row row-40 row-xl-55 row-xxl-100 row-offset-md">
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig"}'>
                        <!-- Thumbnail-->
                        <div class="thumbnail thumbnail-light"><a class="thumbnail-media" href="#"><img
                                    src="images/image-18-425x338.jpg" alt="" width="425"
                                    height="338" /></a>
                            <div class="thumbnail-subtitle">Explore the Bible with Us</div>
                            <h4 class="thumbnail-title"><a href="#">Bible Readings</a></h4>
                            <div class="thumbnail-divider"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig","delay":".15s"}'>
                        <!-- Thumbnail-->
                        <div class="thumbnail thumbnail-light"><a class="thumbnail-media" href="#"><img
                                    src="images/image-12-425x338.jpg" alt="" width="425"
                                    height="338" /></a>
                            <div class="thumbnail-subtitle">Take Part</div>
                            <h4 class="thumbnail-title"><a href="#">Our Events</a></h4>
                            <div class="thumbnail-divider"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig","delay":".3s"}'>
                        <!-- Thumbnail-->
                        <div class="thumbnail thumbnail-light"><a class="thumbnail-media" href="#"><img
                                    src="images/image-1-425x338.jpg" alt="" width="425"
                                    height="338" /></a>
                            <div class="thumbnail-subtitle">Locations</div>
                            <h4 class="thumbnail-title"><a href="#">Our Church </a></h4>
                            <div class="thumbnail-divider"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig","delay":".45s"}'>
                        <!-- Thumbnail-->
                        <div class="thumbnail thumbnail-light"><a class="thumbnail-media" href="#"><img
                                    src="images/image-8-425x338.jpg" alt="" width="425"
                                    height="338" /></a>
                            <div class="thumbnail-subtitle">Join Our Communities</div>
                            <h4 class="thumbnail-title"><a href="#">Our Groups</a></h4>
                            <div class="thumbnail-divider"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About us-->
        <section class="section-md bg-transparent section-creative-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-9" data-animate='{"class":"fadeIn"}'>
                        <h3 class="text-decorated text-decorated-large">Our church incorporates God’s family into our
                            fellowship. We provide a warm, authentic community, welcoming new believers into the body of
                            Christ through baptism.</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-double-2">
            <!-- Practice-->
            <section class="section-double-top">
                <div class="container">
                    <div class="layout layout-2">
                        <div class="layout-media bg-image" style="background-image: url(images/image-19-837x551.jpg)"
                            data-animate='{"class":"fadeInUpBig"}'></div>
                        <div class="layout-content bg-100" data-animate='{"class":"fadeInUpBig","delay":".2s"}'>
                            <h2>About Church</h2>
                            <p>At TCC Logo Church, we want the love that Christ showed on the cross to flow out of our
                                lives, impacting the community.</p>
                            <p>We come from all different backgrounds and cultures but are united in the pursuit and
                                worship of Christ. Above all else, we want to glorify God. We strongly believe that God
                                does His work through the local church and that it is a vital part of the Christian
                                life. Please join us as we come together and let the Gospel transform us!</p>
                            <div class="group-20 mt-5" data-lightgallery><a class="btn btn-primary"
                                    href="#">Donate Now</a><a class="btn btn-outline btn-icon lightgallery-item"
                                    href="https://youtu.be/hNQFjqDvPhA">
                                    <svg class="icon" width="9" height="12" viewBox="0 0 9 12"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 6L4.64275e-07 11.1962L9.18537e-07 0.803847L9 6Z"></path>
                                    </svg>Donate Now</a></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Counter icon-->
            <section class="section-md context-dark bg-darkest section-double-bottom">
                <div class="container">
                    <h2>Our Ministries</h2>
                    <div class="row row-30 row-offset-md">
                        <div class="col-6 col-md-3">
                            <div class="box-icon-bordered">
                                <div class="box-icon-bordered-icon text-primary linearicons-landscape"></div>
                                <div class="box-icon-bordered-title">Men’s Ministry</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="box-icon-bordered">
                                <div class="box-icon-bordered-icon text-primary linearicons-heart"></div>
                                <div class="box-icon-bordered-title">Ladies Ministry</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="box-icon-bordered">
                                <div class="box-icon-bordered-icon text-primary linearicons-mic2"></div>
                                <div class="box-icon-bordered-title">Couples’ Minstry</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="box-icon-bordered">
                                <div class="box-icon-bordered-icon text-primary linearicons-home3"></div>
                                <div class="box-icon-bordered-title">Teen Ministry</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- Blog carousel-->
        <section class="section-md bg-transparent">
            <div class="container">
                <div class="row row-5 align-items-center">
                    <div class="col-md-5" data-animate='{"class":"fadeIn"}'>
                        <h2>New Sermons</h2>
                    </div>
                    <div class="col-md-7" data-animate='{"class":"fadeIn","delay":".2s"}'>
                        <p class="big">Explore & listen to the latest seermons by our church’s pastors added daily
                            and available for download in all popular formats.</p>
                    </div>
                </div>
                <!-- Swiper slider-->
                <div class="swiper-carousel">
                    <div class="swiper-container"
                        data-swiper='{"breakpoints":{"576":{"slidesPerView":2,"spaceBetween":15},"768":{"slidesPerView":3,"spaceBetween":30}},"loop":false,"pagination":{"type":"custom"}}'>
                        <!-- Additional required wrapper-->
                        <div class="swiper-wrapper">
                            <!-- Slides-->
                            <div class="swiper-slide">
                                <!-- Post-->
                                <div class="post post-shadow"><a class="post-media" href="blog-post.html"><img
                                            src="images/image-12-370x257.jpg" alt="" width="370"
                                            height="257" />
                                        <div class="post-hover-btn">View</div>
                                    </a>
                                    <div class="post-content">
                                        <div class="post-tags group-5 text-small"><a class="post-tag"
                                                href="sermons.html">Sermons</a></div>
                                        <h4 class="post-title text-divider"><a href="blog-post.html">God’s Cure For
                                                the World’s Worst Disease</a></h4>
                                        <div class="post-date">November 12, 2021</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Post-->
                                <div class="post post-shadow"><a class="post-media" href="blog-post.html"><img
                                            src="images/image-1-370x257.jpg" alt="" width="370"
                                            height="257" />
                                        <div class="post-hover-btn">View</div>
                                    </a>
                                    <div class="post-content">
                                        <div class="post-tags group-5 text-small"><a class="post-tag"
                                                href="sermons.html">Sermons</a></div>
                                        <h4 class="post-title text-divider"><a href="blog-post.html">Christian Life:
                                                Running Well, Finishing Strong</a></h4>
                                        <div class="post-date">November 12, 2021</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Post-->
                                <div class="post post-shadow"><a class="post-media" href="blog-post.html"><img
                                            src="images/image-13-370x257.jpg" alt="" width="370"
                                            height="257" />
                                        <div class="post-hover-btn">View</div>
                                    </a>
                                    <div class="post-content">
                                        <div class="post-tags group-5 text-small"><a class="post-tag"
                                                href="sermons.html">Sermons</a></div>
                                        <h4 class="post-title text-divider"><a href="blog-post.html">The Passing of
                                                Religious Opportunity</a></h4>
                                        <div class="post-date">November 12, 2021</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Post-->
                                <div class="post post-shadow"><a class="post-media" href="blog-post.html"><img
                                            src="images/image-4-370x257.jpg" alt="" width="370"
                                            height="257" />
                                        <div class="post-hover-btn">View</div>
                                    </a>
                                    <div class="post-content">
                                        <div class="post-tags group-5 text-small"><a class="post-tag"
                                                href="sermons.html">Sermons</a></div>
                                        <h4 class="post-title text-divider"><a href="blog-post.html">Christian Life:
                                                Where Are My Strengths? (Romans 12:1-8)</a></h4>
                                        <div class="post-date">November 12, 2021</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Post-->
                                <div class="post post-shadow"><a class="post-media" href="blog-post.html"><img
                                            src="images/image-8-370x257.jpg" alt="" width="370"
                                            height="257" />
                                        <div class="post-hover-btn">View</div>
                                    </a>
                                    <div class="post-content">
                                        <div class="post-tags group-5 text-small"><a class="post-tag"
                                                href="sermons.html">Sermons</a></div>
                                        <h4 class="post-title text-divider"><a href="blog-post.html">Life is what
                                                Happens to You While You Are Making Plans</a></h4>
                                        <div class="post-date">November 12, 2021</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Post-->
                                <div class="post post-shadow"><a class="post-media" href="blog-post.html"><img
                                            src="images/image-9-370x257.jpg" alt="" width="370"
                                            height="257" />
                                        <div class="post-hover-btn">View</div>
                                    </a>
                                    <div class="post-content">
                                        <div class="post-tags group-5 text-small"><a class="post-tag"
                                                href="sermons.html">Sermons</a></div>
                                        <h4 class="post-title text-divider"><a href="blog-post.html">Rock Solid: How
                                                to Build a Life that Lasts</a></h4>
                                        <div class="post-date">November 12, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-controls">
                            <!-- Pagination-->
                            <div class="swiper-pagination"></div>
                            <!-- Scrollbar-->
                            <div class="swiper-progress">
                                <div class="swiper-progress-bar"></div>
                            </div>
                            <!-- Navigation-->
                            <div class="swiper-buttons">
                                <div class="swiper-button-prev mdi-chevron-left"></div>
                                <div class="swiper-button-next mdi-chevron-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Practice-->
        <section class="section-md bg-100">
            <div class="container">
                <div class="row row-40 justify-content-between align-items-center">
                    <div class="col-md-5" data-animate='{"class":"fadeInLeftBig"}'>
                        <div class="text-block-1">
                            <h2>Bringing Faith To Your Life for over 20 years</h2>
                            <p class="big">TCC Logo Church is a caring, Christian family committed to sharing the
                                love
                                of Christ.</p>
                            <p class="big">To have a better understanding about how we impact the lives of our
                                parishioners, read these recently submitted testimonials.</p><a class="btn btn-outline"
                                href="#consultation-form" data-anchor-link>Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-7 col-xl-6" data-animate='{"class":"fadeInRightBig"}'>
                        <div class="layout layout-3">
                            <div class="layout-media bg-image"
                                style="background-image: url( images/image-16-470x600.jpg )"></div>
                            <div class="layout-content bg-900 context-dark">
                                <div class="owl-carousel owl-quote-3" data-owl="{&quot;dots&quot;:true}"
                                    data-items="1">
                                    <!-- Quote icon line-->
                                    <div class="quote quote-line">
                                        <q class="quote-text h4">I first came to this church when visiting my sister.
                                            For me, TCC Logo is an oasis where I can be refreshed with living water.
                                            Every
                                            Sunday I come with expectation of what message I will receive from our
                                            Lord.</q>
                                        <div class="quote-person"><img class="quote-img"
                                                src="images/person/person-9-53x53.jpg" alt="" width="53"
                                                height="53" />
                                            <cite class="quote-cite"><span class="quote-author">Edward Harrison,
                                                </span><span class="quote-position">Parishioner</span></cite>
                                        </div>
                                    </div>
                                    <!-- Quote icon line-->
                                    <div class="quote quote-line">
                                        <q class="quote-text h4">For the first time in many years I have found a place
                                            at TCC Logo Church. It's like coming home again where the people are so warm
                                            and
                                            friendly and are genuinely concerned about you.</q>
                                        <div class="quote-person"><img class="quote-img"
                                                src="images/person/person-5-53x53.jpg" alt="" width="53"
                                                height="53" />
                                            <cite class="quote-cite"><span class="quote-author">Kate Adams,
                                                </span><span class="quote-position">Parishioner</span></cite>
                                        </div>
                                    </div>
                                    <!-- Quote icon line-->
                                    <div class="quote quote-line">
                                        <q class="quote-text h4">We attended our first Sunday here and we knew right
                                            away there was a uniqueness about this church. God used TCC Logo Church to
                                            develop in us a stronger passion for him and a deeper relationship with
                                            him.</q>
                                        <div class="quote-person"><img class="quote-img"
                                                src="images/person/person-10-53x53.jpg" alt="" width="53"
                                                height="53" />
                                            <cite class="quote-cite"><span class="quote-author">James Wilson,
                                                </span><span class="quote-position">Parishioner</span></cite>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our team-->
        <section class="section-md context-dark bg-900">
            <div class="container container-wide">
                <h2 class="text-center">Meet Our Team</h2>
                <div class="row row-5 row-gutters-5 row-offset-lg person-poster-container">
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig"}'>
                        <!-- Person--><a class="person person-poster" href="team-member.html">
                            <div class="person-media bg-image"
                                style="background-image: url(images/person/person-1-458x538.jpg)">
                                <div class="person-btn mdi mdi-arrow-right"></div>
                            </div>
                            <div class="person-content">
                                <h3 class="person-title"><span>Edward Gray</span><span class="person-meta"> - Care
                                        Pastor</span></h3>
                                <div class="person-text text-decorated text-decorated-3">Edward Gray supports our
                                    community groups and helps new parishioners.</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig","delay":".15s"}'>
                        <!-- Person--><a class="person person-poster" href="team-member.html">
                            <div class="person-media bg-image"
                                style="background-image: url(images/person/person-2-458x538.jpg)">
                                <div class="person-btn mdi mdi-arrow-right"></div>
                            </div>
                            <div class="person-content">
                                <h3 class="person-title"><span>Kate Lee</span><span class="person-meta"> - Campus
                                        Pastor</span></h3>
                                <div class="person-text text-decorated text-decorated-3">Kate supports our church
                                    ministries while also upholding Biblical priorities.</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig","delay":".3s"}'>
                        <!-- Person--><a class="person person-poster" href="team-member.html">
                            <div class="person-media bg-image"
                                style="background-image: url(images/person/person-3-458x538.jpg)">
                                <div class="person-btn mdi mdi-arrow-right"></div>
                            </div>
                            <div class="person-content">
                                <h3 class="person-title"><span>Harry Smith</span><span class="person-meta"> - Senior
                                        Pastor</span></h3>
                                <div class="person-text text-decorated text-decorated-3">Harry is our senior pastor who
                                    oversees church management in all areas.</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig","delay":".45s"}'>
                        <!-- Person--><a class="person person-poster" href="team-member.html">
                            <div class="person-media bg-image"
                                style="background-image: url(images/person/person-4-458x538.jpg)">
                                <div class="person-btn mdi mdi-arrow-right"></div>
                            </div>
                            <div class="person-content">
                                <h3 class="person-title"><span>Jane Peters</span><span class="person-meta"> - Youth
                                        Pastor</span></h3>
                                <div class="person-text text-decorated text-decorated-3">Harry is our senior pastor who
                                    oversees church management in all areas.</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Practice-->
        <section class="section-sm">
            <div class="container">
                <div class="layout layout-2">
                    <div class="layout-media bg-image" style="background-image: url(images/image-13-837x551.jpg)"
                        data-animate='{"class":"fadeInUpBig"}'></div>
                    <div class="layout-content bg-100" data-animate='{"class":"fadeInUpBig","delay":".2s"}'>
                        <div class="text-block-1">
                            <h2>Download the App</h2>
                            <p class="big">To stay connected with our church and receive the latest news and updates
                                from us, download the free TCC Logo Church app that offers:</p>
                            <div class="row row-15">
                                <div class="col-sm-auto">
                                    <ul class="list-marked">
                                        <li class="list-item">Simple Donations</li>
                                        <li class="list-item">Sermons</li>
                                        <li class="list-item">Event Notifications</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-marked">
                                        <li class="list-item">Prayer Requests</li>
                                        <li class="list-item">The Bible</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-5 group-20"><a class="btn btn-outline btn-icon" href="#"><span
                                        class="mdi-apple icon"></span>Apple Store</a><a
                                    class="btn btn-outline btn-icon mt-0" href="#"><span
                                        class="icon mdi-google-play"></span>Apple Store</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team member experience-->
        <section class="section-md bg-900 context-dark" id="consultation-form">
            <div class="container">
                <div class="row row-5 align-items-baseline">
                    <div class="col-lg-6" data-animate='{"class":"fadeIn"}'>
                        <h2> Free Consultation</h2>
                    </div>
                    <div class="col-lg-6" data-animate='{"class":"fadeIn","delay":".2s"}'>
                        <h3 class="font-italic font-secondary" style="opacity: .6">Get an appointment with one of our
                            pastors</h3>
                    </div>
                </div>
                <form class="rd-mailform rd-form" data-form-output="form-appointment" data-form-type="contact"
                    method="post" action="components/rd-mailform/rd-mailform.php">
                    <div class="row row-20 row-gutters-20">
                        <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig"}'>
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Your Name*">
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig","delay":".15s"}'>
                            <div class="form-group">
                                <input class="form-control" type="email" name="email"
                                    placeholder="Your E-mail*">
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig","delay":".3s"}'>
                            <div class="form-group">
                                <input class="form-control" type="text" name="phone" placeholder="Your Phone*">
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig","delay":".45s"}'>
                            <button class="btn btn-block" type="submit">Make an appointment</button>
                        </div>
                    </div>
                </form>
                <div class="form-output snackbar snackbar-primary" id="form-appointment"></div>
            </div>
        </section>
        <!-- Awards-->
        <section class="section-sm bg-100 text-center">
            <div class="container">
                <div class="owl-carousel owl-vertical-center owl-content-1" data-owl="{&quot;dots&quot;:true}"
                    data-items="2" data-sm-items="3" data-md-items="4"><img src="images/logo/logo-1-157x39.png"
                        alt="" width="157" height="39" /><img src="images/logo/logo-2-95x25.png"
                        alt="" width="95" height="25" /><img src="images/logo/logo-3-92x39.png"
                        alt="" width="92" height="39" /><img src="images/logo/logo-4-116x33.png"
                        alt="" width="116" height="33" />
                </div>
            </div>
        </section>
        <!-- Footer contact-->
        <footer class="footer-contact context-dark bg-900 text-center">
            <div class="container">
                <div class="footer-row">
                    <div class="footer-logo"><a class="logo-link" href="index.html"><img
                                src="images/logo-inverse-1-296x104.png" alt="" width="148"
                                height="52" /></a></div>
                </div>
                <div class="footer-row">
                    <ul class="footer-menu">
                        <li><a href="about-us.html">About</a></li>
                        <li><a href="donations.html">Donations</a></li>
                        <li><a href="sermons.html">Events</a></li>
                        <li><a href="sermons.html">Sermons</a></li>
                        <li><a href="contact-us.html">Contact us</a></li>
                    </ul>
                </div>
                <div class="footer-row">
                    <h4>Call us 24\7</h4><a class="link link-large" href="tel:#">800.567.1234</a>
                    <ul class="social social-bordered footer-social">
                        <li><a class="social-icon icon icon-md mdi-youtube-play" href="#"></a></li>
                        <li><a class="social-icon icon icon-md mdi-linkedin" href="#"></a></li>
                        <li><a class="social-icon icon icon-md mdi-twitter" href="#"></a></li>
                    </ul>
                </div>
                <div class="footer-row">
                    <div class="h6">355 S Grand Ave, Los Angeles, CA 90071</div>
                    <!-- Copyright-->
                    <p class="rights"><span>&copy; 2021&nbsp;</span><span>TCC Logo</span><span>. All rights
                            reserved.&nbsp;</span><a class="link link-inherit rights-link"
                            href="privacy-policy.html">Privacy Policy</a></p>
                </div>
            </div>
        </footer>
        <!-- coded by barber-->
    </div>
    <!-- Preloader-->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
        </div>
    </div>
    <script src="{{ asset('components/base/core.min.js') }}"></script>
    <script src="{{ asset('components/base/script.js') }}"></script>
    {{--  @vite(['resources/components/base/core.min.js', 'resources/components/base/script.js'])  --}}
</body>

</html>
