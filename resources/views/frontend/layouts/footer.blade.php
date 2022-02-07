<footer class="w3l-footer-16 py-5">
        <div class="container pt-md-5 pt-sm-4 pb-sm-2">
            <div class="row">
                <div class="col-lg-4">
                    <a class="footer-logo d-flex align-items-center" href="{{ url('/')}}">
                        <img style="margin-top: -5px;" height="75px" src="{{ asset('frontend/assets/images/logo.svg') }}" ></a>
                    <p class="mt-3">Namaste and Welcome ! Mohit International travel Planing. 
                        is a leading online travel and trekking company in Nepal. We are one of key travel & trekking agents in Nepal
                         that brings tours of “Incredible Nepal”, the country that has mystified the world for centuries.</p>
                    <div class="columns-2 mt-4">
                        <ul class="social">
                            <li><a href="https://www.facebook.com/Mohit-International-Travels-Planning-105224212083984"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="#linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li><a href="#twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="#google"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                            <li><a href="#github"><i class="fab fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-xl-5 col-6 column">
                            <h3 class="">Quick Link</h3>
                            <ul class="footer-gd-16">
                                <li><a href="/">Home</a></li>
                                <li><a href="{{ url('/about') }}">About Us</a></li>
                                <li><a href="{{ url('/services') }}">Services</a></li>
                                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-5 col-6 column px-xxl-0">
                            <h3 class="">Contact Info</h3>
                            <ul class="footer-contact-list">
                                <li class="">lakeside-6, Pokhara</li>
                                <li class="mt-2"><a href="tel:+12 23456790">+9779816142365</a></li>
                                <li class="mt-2"><a href="mailto:info@example.com">Mohittravel@gmail.com</a></li>
                                <li class="mt-2"><a href="mailto:info@example.com">www.Mohitinternaltionaltravel.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-7 col-8 column mt-lg-0 mt-4">
                    <h3 class="">Opening Hours</h3>
                    <ul class="list-footer-block">
                        <li>
                            Monday
                            <span>8:00AM - 9:00PM</span>
                        </li>
                        <li>
                            tuesday
                            <span>8:00AM - 9:00PM</span>
                        </li>
                        <li>
                            Wednesday
                            <span>8:00AM - 9:00PM</span>
                        </li>
                        <li>
                            Thursday
                            <span>8:00AM - 9:00PM</span>
                        </li>
                        <li>
                            Friday
                            <span>8:00AM - 9:00PM</span>
                        </li>
                        <li>
                            Saturday
                            <span>8:00 - 9:00PM</span>
                        </li>
                        <li>
                            Sunday
                            <span>8:00 - 9:00PM</span>
                        </li>
                    </ul>
                </div> 
            </div>
            <div class="below-section text-center pt-4 mt-5">
                <p class="copy-text">&copy; 2021 Dress-Up. All rights reserved. Design by <a href="#" target="_blank">
                        Tuki Soft </a>
                </p>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="{{  asset('frontend/assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- //common jquery plugin -->

    <!-- banner slick slider -->
    <script src="{{  asset('frontend/assets/js/slick.js') }}"></script>
    <script src="{{  asset('frontend/assets/js/script.js') }}"></script>
    <!-- //banner slick slider -->

    <!-- magnific-popup javascript -->
    <script src="{{  asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific-popup javascript -->

    <!-- theme switch js (light and dark)-->
    <script src="{{  asset('frontend/assets/js/theme-change.js') }}"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->