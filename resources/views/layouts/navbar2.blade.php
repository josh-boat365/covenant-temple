<header class="section rd-navbar-wrap">
    <nav class="rd-navbar rd-navbar-line about-bg">
        <div class="navbar-container navbar-responsive">
            <div class="intro-line-col">
                <div class="navbar-cell">
                    <div class="navbar-panel">
                        <button class="navbar-switch linearicons-menu"></button>
                        <div class="navbar-logo">
                            <a class="navbar-logo-link" href={{ route('index') }}>
                                <img class="navbar-logo-default" src="{{ asset('images/main-logo.png') }}" />
                                <img class="navbar-logo-inverse" src="{{ asset('images/main-logo.png') }}"
                                    alt="Tcc Logo" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-line-col intro-line-col-center">
                <div class="navbar-cell">
                    <ul class="navbar-navigation rd-navbar-nav">
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link"
                                href={{ route('about-us') }}>About</a>
                        </li>

                        <li class="navbar-navigation-root-item navbar-navigation-item-hidden">
                            <a class="navbar-navigation-root-link" href="#">Events</a>
                        </li>

                        <li class="navbar-navigation-root-item navbar-navigation-item-hidden"><a
                                class="navbar-navigation-root-link" href="#">Gallery</a>
                        </li>

                        <li class="navbar-navigation-root-item navbar-navigation-item-hidden"><a
                                class="navbar-navigation-root-link" href="#">Donations</a>
                        </li>

                        <li class="navbar-navigation-root-item navbar-navigation-item-hidden"><a
                                class="navbar-navigation-root-link" href="#">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-cell navbar-spacer"></div>
                <div class="navbar-cell">
                    <div class="navbar-subpanel">
                        <div class="navbar-subpanel-item navbar-subpanel-item-mobile">
                            <button
                                class="navbar-button navbar-contact-btn navbar-contact-btn-rounded linearicons-menu"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-line-col navbar-subpanel-contact">
                <div class="navbar-cell align-items-center navbar-subpanel-item-desktop">

                    <button class="navbar-button navbar-contact-btn navbar-contact-btn-rounded linearicons-menu"
                        data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-contact-active","isolate":"[data-multi-switch]:not( .navbar-button )"}'></button>
                </div>
                <div class="navbar-contact">
                    <ul class="list list-sm">
                        <li class="list-item">
                            <h4 class="text-uppercase text-primary" style="color: #1B5A2A !important">Our doors are
                                always opened</h4>
                        </li>
                        <li class="list-item"><a class="link link-inherit-primary big2" href="tel:#">(+233)
                                547255990</a></li>
                        <li class="list-item"><a class="link link-inherit-primary"
                                href="mailto:tccpokuase@gmail.com">tccpokuase@gmail.com</a></li>
                        <li class="list-item"><span>P.O.Box DS 2234, Dansoman</span></li>
                        <li class="list-item"><span>Pokuase Near Ampax Hotel <br />Off Nsawam - Accra Road,<br>
                                GW-0120-1829</span></li>
                    </ul>
                    <ul class="list list-divided">
                        <li class="list-item">
                            <!-- Blurb link-->
                            <div class="blurb blurb-link">
                                <div class="blurb-icon linearicons-credit-card"></div>
                                <h4 class="blurb-title"><a href="#">Make a Donation</a></h4>
                            </div>
                        </li>
                        <li class="list-item">
                            <!-- Blurb link-->
                            <div class="blurb blurb-link">
                                <div class="blurb-icon linearicons-bookmark"></div>
                                <h4 class="blurb-title"><a href=#">Sermons</a></h4>
                            </div>
                        </li>
                        <li class="list-item">
                            <!-- Blurb link-->
                            <div class="blurb blurb-link">
                                <div class="blurb-icon linearicons-mic2"></div>
                                <h4 class="blurb-title"><a href="#">Events</a></h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
