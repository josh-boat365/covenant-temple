<header class="section rd-navbar-wrap">
    <nav class="rd-navbar rd-navbar-line">
        <div class="navbar-container intro-line-row">
            <div class="intro-line-col">
                <div class="navbar-cell">
                    <div class="navbar-panel">
                        <button class="navbar-switch linearicons-menu"
                            data-multi-switch={"targets":".rd-navbar","scope":".rd-navbar","isolate":"[data-multi-switch]"}></button>
                        <div class="navbar-logo"><a class="navbar-logo-link" href="{{ route('index') }}"><img
                                    class="navbar-logo-default" src="{{ asset('images/main-logo.png') }}"
                                    alt="TCC Logo" /><img class="navbar-logo-inverse"
                                    src="{{ asset('images/main-logo.png') }}" alt="TCC Logo" /></a></div>
                    </div>
                </div>
            </div>
            <div class="intro-line-col intro-line-col-center">
                <div class="navbar-cell">
                    <ul class="navbar-navigation rd-navbar-nav">
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link"
                                href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link"
                                href="#">Donations</a>
                            <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                <li class="navbar-navigation-back">
                                    <button class="navbar-navigation-back-btn">Back</button>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                        href="#">Church Building Development</a>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                        href="#">Raising Champions</a>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                        href="#">Orphanage Contribution</a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link"
                                href="#">Departments</a>
                            <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                <li class="navbar-navigation-back">
                                    <button class="navbar-navigation-back-btn">Back</button>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                        href="#">Music</a>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                        href="#">Ushers</a>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                        href="#">Media</a>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                        href="#">Welfare</a>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                        href="#">Prayer Tower</a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-root-item navbar-navigation-item-hidden"><a
                                class="navbar-navigation-root-link" href="#">Gallery</a>
                        </li>
                        <li class="navbar-navigation-root-item navbar-navigation-item-hidden"><a
                                class="navbar-navigation-root-link" href="#">Events</a>
                        </li>
                        <li class="navbar-navigation-root-item navbar-navigation-item-hidden"><a
                                class="navbar-navigation-root-link" href="#">About us</a>
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
                                class="navbar-button navbar-contact-btn navbar-contact-btn-rounded linearicons-menu"
                                data-multi-switch='{"targets":".rd-navbar","scope":".navbar-subpanel-contact","class":"navbar-contact-active","isolate":"[data-multi-switch]:not( .navbar-button )"}'></button>
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
                            <h4 class="text-uppercase text-primary">Free Consultation</h4>
                        </li>
                        <li class="list-item"><a class="link link-inherit-primary big2" href="tel:#">(+233)
                                547255990</a></li>
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
