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
    {{--  <link rel="stylesheet" href="{{ asset('components/base/base.css') }}">
    <script src="{{ asset('components/base/core.min.js') }}"></script>
    <script src="{{ asset('components/base/script.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('custom/custom.css') }}">  --}}
     @vite(['resources/components/base/base.css','resources/custom/custom.css', 'resources/components/base/core.min.js','resources/components/base/script.js', ])
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="page">
        <!-- Intro slider-->
        {{--  Hero section  --}}
        @if (URL::current() == route('index'))
            <section class="intro intro-line context-dark">

                <!--RD Navbar-->

                @include('layouts.navbar')

                @include('layouts.index-hero')

            </section>
        @elseif (URL::current() == route('about-us'))
            <section class="section page-title bg-image about-bg-image context-dark"
                style="background-image: url(images/background/about-us-hero2.jpg);">

                @include('layouts.navbar2')

                {{--  @include('layouts.about-hero')  --}}
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-xl-8">
                            <h2 class="page-title-text">About Church</h2>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <main>
            {{ $slot }}
        </main>

        {{--  <!-- Blog carousel-->  --}}
        {{--  This section shows the new sermons  --}}

        {{--  !-- Practice-->  --}}
        {{--  This part show the testimonials  --}}

        {{--  <!-- The Leadership -->  --}}
        <section class="section-md context-dark bg-900">
            <div class="container container-wide">
                <h2 class="text-center">The Leadership</h2>
                <div class="row row-5 row-gutters-5 row-offset-lg person-poster-container">
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig"}'>
                        <!-- Person--><a class="person person-poster" href="team-member.html">
                            <div class="person-media bg-image"
                                style="background-image: url(images/person/Evans-Okuma-Sakyi.png)">
                                <div class="person-btn mdi mdi-arrow-right"></div>
                            </div>
                            <div class="person-content">
                                <h3 class="person-title"><span class="evans-name">Evans Okuma
                                        Sakyi</span><span class="person-meta"> Head Pastor</span></h3>
                                {{--  <div class="person-text text-decorated text-decorated-3">Edward Gray supports our community groups and helps new parishioners.</div>  --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig","delay":".15s"}'>
                        <!-- Person--><a class="person person-poster" href="team-member.html">
                            <div class="person-media bg-image"
                                style="background-image: url(images/person/Kingsley-Acheampong.png)">
                                <div class="person-btn mdi mdi-arrow-right"></div>
                            </div>
                            <div class="person-content">
                                <h3 class="person-title"><span class="kingsley-name">Kingsley
                                        Acheampong</span><span class="person-meta"> Associate Pastor</span>
                                </h3>
                                {{--  <div class="person-text text-decorated text-decorated-3">Kate supports our church ministries while also upholding Biblical priorities.</div>  --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig","delay":".3s"}'>
                        <!-- Person--><a class="person person-poster" href="team-member.html">
                            <div class="person-media bg-image"
                                style="background-image: url(images/person/Stephen-Nti.png)">
                                <div class="person-btn mdi mdi-arrow-right"></div>
                            </div>
                            <div class="person-content">
                                <h3 class="person-title"><span class="stephen-name">Stephen Nti
                                        Aniakwaah</span><span class="person-meta">
                                        Youth Pastor</span></h3>
                                {{--  <div class="person-text text-decorated text-decorated-3">Harry is our senior pastor who oversees church management in all areas.</div>  --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-animate='{"class":"fadeInUpBig","delay":".45s"}'>
                        <!-- Person--><a class="person person-poster" href="team-member.html">
                            <div class="person-media bg-image"
                                style="background-image: url(images/person/Frank-Anku.png)">
                                <div class="person-btn mdi mdi-arrow-right"></div>
                            </div>
                            <div class="person-content">
                                <h3 class="person-title">
                                    <span>Frank Anku</span>
                                    <span class="person-meta">Children's Pastor</span>
                                </h3>
                                {{--  <div class="person-text text-decorated text-decorated-3">Harry is our senior pastor who  --}}
                                {{--  oversees church management in all areas.</div>  --}}
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{--  !-- Practice   --}}
        {{--  <section class="section-sm">
                    <div class="container">
                        <div class="layout layout-2">
                            <div class="layout-media bg-image"
                                style="background-image: url(images/image-13-837x551.jpg)"
                                data-animate='{"class":"fadeInUpBig"}'></div>
                            <div class="layout-content bg-100" data-animate='{"class":"fadeInUpBig","delay":".2s"}'>
                                <div class="text-block-1">
                                    <h2>Download the App</h2>
                                    <p class="big">To stay connected with our church and receive the latest news and
                                        updates from us, download the free Calm Church app that offers:</p>
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
                                    <div class="mt-5 group-20"><a class="btn btn-outline btn-icon"
                                            href="#"><span class="mdi-apple icon"></span>Apple Store</a><a
                                            class="btn btn-outline btn-icon mt-0" href="#"><span
                                                class="icon mdi-google-play"></span>Apple Store</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>  --}}
        {{--  !-- Team member experience --  --}}
        {{--  contact consultation form   --}}
        <section class="section-md bg-900 context-dark" id="consultation-form">
            <div class="container">
                <div class="row row-5 align-items-baseline">
                    <div class="col-lg-6" data-animate='{"class":"fadeIn"}'>
                        <h2> Free Consultation</h2>
                    </div>
                    <div class="col-lg-6" data-animate='{"class":"fadeIn","delay":".2s"}'>
                        <h3 class="font-italic font-secondary" style="opacity: .6">Get an appointment with one
                            of our
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
        {{--  !-- Awards--  --}}
        {{--  This section displays the list of sponsors and initiatives by the church  --}}

        <!-- Footer contact-->
        @include('layouts.footer')
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
</body>

</html>
