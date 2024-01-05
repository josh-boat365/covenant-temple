<footer class="footer-contact context-dark bg-900 text-center">
            <div class="container">
                <div class="footer-row">
                    <div class="footer-logo">
                        <a class="logo-link" href="index.html">
                            <img src="images/main-logo.png" alt="" style="width: 20rem;" />
                        </a>
                    </div>
                </div>
                <div class="footer-row">
                    <ul class="footer-menu">
                        <li><a href="{{ route('about-us') }}">About</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Donations</a></li>
                        <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                    </ul>
                </div>
                <div class="footer-row">
                    <h4>Call us 24\7</h4><a class="link link-large" href="tel:(+233) 547255990">(+233) 547255990</a>
                    <ul class="social social-bordered footer-social">
                        <li><a class="social-icon icon icon-md mdi-youtube-play"
                                href="https://www.youtube.com/@tccpokuase"></a></li>
                        <li><a class="social-icon icon icon-md mdi-facebook"
                                href="https://www.facebook.com/tccpokuaseofficial"></a></li>
                        <!-- <li><a class="social-icon icon icon-md mdi-twitter" href="#"></a></li> -->
                    </ul>
                </div>
                <div class="footer-row">
                    <div class="h6">P.O.Box DS 2234, Dansoman <br>
                        Pokuase Near Ampax Hotel <br />Off Nsawam - Accra Road,<br> GW-0120-1829</div>
                    <!-- Copyright-->
                    <p class="rights"><span>&copy; 2023 -
                            <script>
                                document.write(new Date().getFullYear())
                            </script>&nbsp;
                        </span><span>Triumphant Christian Center - Pokuase Branch - Covenant Temple</span><span>. All
                            rights reserved.&nbsp;</span><a class="link link-inherit rights-link"
                            href={{ route('privacy-policy') }}>Privacy Policy</a></p>
                </div>

            </div>
        </footer>
