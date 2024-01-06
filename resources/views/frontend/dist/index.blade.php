<x-base-layout>

    <!-- Cases-->
        @include('layouts.sub-hero')
        <!-- About us-->
        <section class="section-md bg-transparent section-creative-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-9" data-animate='{"class":"fadeIn"}'>
                        <h3 class="text-decorated text-decorated-large">
                            Triumphant Christian Center - Covenant Temple is the House of God where the 
                            fundamental principles of our faith in Christ are a priority. Our activities are meant 
                            to bring each member to that place of growth so that the person dedicated to God may 
                            be capable and equipped for every good work.
                        </h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-double-2">
            <!-- Practice-->
            <section class="section-double-top">
                <div class="container">
                    <div class="layout layout-2">
                        <div class="layout-media bg-image" style="background-image: url({{ asset('images/church.jpg') }})"
                            data-animate='{"class":"fadeInUpBig"}'></div>
                        <div class="layout-content bg-100" data-animate='{"class":"fadeInUpBig","delay":".2s"}'>
                            <h2>About Church</h2>
                            <p>At Triumphant Christian Center - Covenant Temple, we want the love that Christ showed on the cross to flow out of our
                                lives, impacting the community.</p>
                            <p>
                              At our church, we warmly welcome all into God's family, fostering a genuine community where everyone finds 
                              belonging. Through baptism, we joyfully embrace new believers, deepening our connection in Christ. 
                              Additionally, we run 'Raising Champions,' a program enabling donations to assist those in need within our 
                              church community. We extend our support beyond by visiting orphanages, offering donations to brighten their 
                              lives. Join us in this transformative journey of faith, where everyone is valued and uplifted in their spiritual walk.
                            </p>
                            <div class="group-20 mt-5" data-lightgallery><a class="btn btn-primary"
                                    href="#">Donate Now</a><a class="btn btn-outline btn-icon lightgallery-item"
                                    href="#">
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
                                <div class="box-icon-bordered-title">Men’s Fellowship</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="box-icon-bordered">
                                <div class="box-icon-bordered-icon text-primary linearicons-heart"></div>
                                <div class="box-icon-bordered-title">Women’s Fellowship</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="box-icon-bordered">
                                <div class="box-icon-bordered-icon text-primary linearicons-mic2"></div>
                                <div class="box-icon-bordered-title">Youth Fellowship</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="box-icon-bordered">
                                <div class="box-icon-bordered-icon text-primary linearicons-home3"></div>
                                <div class="box-icon-bordered-title">Children’s Fellowship</div>
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
                <h2 class="text-center">Meet The Leadership</h2>
                <div class="row row-5 row-gutters-5 row-offset-lg person-poster-container">
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig"}'>
                        <!-- Person--><a class="person person-poster" href="#">
                            <div class="person-media bg-image"
                                style="background-image: url({{ asset('images/person/Evans-Okuma-Sakyi.png') }})">
                                <div class="person-btn mdi mdi-arrow-right"></div>
                            </div>
                            <div class="person-content">
                                <h3 class="person-title"><span>Evans Okuma Sakyi</span><span class="person-meta">   Head
                                        Pastor</span></h3>
                                {{--  <div class="person-text text-decorated text-decorated-3">Edward Gray supports our
                                    community groups and helps new parishioners.</div>  --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig","delay":".15s"}'>
                        <!-- Person--><a class="person person-poster" href="#">
                            <div class="person-media bg-image"
                                style="background-image: url({{ asset('images/person/Kingsley-Acheampong.png') }})">
                                <div class="person-btn mdi mdi-arrow-right"></div>
                            </div>
                            <div class="person-content">
                                <h3 class="person-title"><span>Kingsley Acheampong</span><span class="person-meta">   Associate
                                        Pastor</span></h3>
                                {{--  <div class="person-text text-decorated text-decorated-3">Kate supports our church
                                    ministries while also upholding Biblical priorities.</div>  --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig","delay":".3s"}'>
                        <!-- Person--><a class="person person-poster" href="#">
                            <div class="person-media bg-image"
                                style="background-image: url({{ asset('images/person/Stephen-Nti.png') }})">
                                <div class="person-btn mdi mdi-arrow-right"></div>
                            </div>
                            <div class="person-content">
                                <h3 class="person-title"><span>Stephen Nti Aniakwaa</span><span class="person-meta">   Youth
                                        Pastor</span></h3>
                                {{--  <div class="person-text text-decorated text-decorated-3">Harry is our senior pastor who
                                    oversees church management in all areas.</div>  --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig","delay":".45s"}'>
                        <!-- Person--><a class="person person-poster" href="team-member.html">
                            <div class="person-media bg-image"
                                style="background-image: url({{ asset('images/person/Frank-Anku.png') }})">
                                <div class="person-btn mdi mdi-arrow-right"></div>
                            </div>
                            <div class="person-content">
                                <h3 class="person-title"><span>Frank Anku</span><span class="person-meta">   Childrens
                                        Pastor</span></h3>
                                {{--  <div class="person-text text-decorated text-decorated-3">Harry is our senior pastor who
                                    oversees church management in all areas.</div>  --}}
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Practice-->
        {{--  Download App Section  --}}
        
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

</x-base-layout>
