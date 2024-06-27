<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="./assets/images/favicon.ico">

    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/apple-touch-icon.png">

    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon-16x16.png">

    @include('layouts.meta_tags')

    <base href="{{ BASE_URL }}" />

    <script type="text/javascript">
        var base_url = "{{ BASE_URL }}";
    </script>

    <?php

    define('STATICVER', App\SettingModel::getValue('staticver'));

    ?>

    {!! App\SettingModel::getValue('common-seo-tags')!!} @if(isset($meta_other)) {!! $meta_other !!} @endif



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="./assets/css/main.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <script src="{{ STATIC_PUBLIC_URL }}assets/js/common.js?v={{ STATICVER }}" defer></script>
    <script src="{{ STATIC_PUBLIC_URL }}assets/common.js?v={{ STATICVER }}" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>



<body>
    <div class="sidewarper">
        <div id="slidesection">
            <div class="headerinner">
                <div class="topclose "><a id="slide1" class="white row2"><i class="fr"><img src="./assets/images/close.png" alt="close" width="15" /></i></a></div>
                <div class="overscroll">
                    <div class="customcontainer">
                        <div class="mobilemenuinfo">
                            <ul>
                                <li><a href="/" title="Home" class="active{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                                <li><a href="/pledge" title="Commit to Change" class="{{ Request::is('pledge') ? 'active' : '' }}">Commit to Change</a></li>
                                <li><a href="/gallery" title="Visual Stories" class="{{ Request::is('gallery') ? 'active' : '' }}">Visual Stories</a></li>
                                <li><a href="/e-waste" title="E-Waste" class="{{ Request::is('e-waste') ? 'active' : '' }}">E-Waste</a></li>
                                <li><a href="/registration" title="Registration" class="common-btn type-gradient {{ Request::is('registration') ? 'active' : '' }}">Registration</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav id="nav" class="">
        <div class="mcontainer">
            <div class="w90 margin-center nav-flex">
                <div class="nav-logos">
                    <a href="/" class="float-left">
                        <img src="./assets/images/logo-t-w.svg" alt="" class="logo-txt-bl" />
                    </a>
                    <a href="/" class="float-left">
                        <img src="./assets/images/logo-t-w.svg" alt="" class="logo-txt-w" />
                    </a>
                    <a id="slide" class="float-right"><i class=""><img src="./assets/images/menu-icon.svg" alt="" width="35" /></i></a>
                </div>
                <div class="nav-links mobilenone">
                    <ul>
                        <li>
                            <a href="/" title="Home" class="{{ Request::is('/') ? 'active' : '' }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="pledge" title="Commit to Change" class="{{ Request::is('pledge') ? 'active' : '' }}">
                                Commit to Change
                            </a>
                        </li>
                        <li>
                            <a href="/gallery" title="Visual Stories" class="{{ Request::is('gallery') ? 'active' : '' }}">
                                Visual Stories
                            </a>
                        </li>
                        <li><a href="/e-waste" title="E-Waste" class="{{ Request::is('e-waste') ? 'active' : '' }}">E-Waste</a></li>
                        <li>
                            <a href="/registration" title="Registration" class="common-btn type-gradient {{ Request::is('registration') ? 'active' : '' }}">
                                Registration
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



    @yield('content')


    <div class="fixed-btn"><a href="/pledge">TAKE THE PLEDGE</a></div>
    <footer>

        <div class="footer-main mcontainer">
            <div class="footer-content margin-center center-text">
                <div class="footer-logo mcontainer">
                    <a href="#" title="">
                        <img src="./assets/images/footerlogo.svg" alt="" />
                    </a>
                </div>
                <p>Generation G campaign focuses to empower youth to champion and advocate sustainability for a <br>green future focusing on the dangers of e-waste and promoting a cleaner, healthier India.</p>
                <ul>
                    <li>
                        <a href="/" title="">Home</a>
                    </li>
                    <li>
                        <a href="/pledge" title="Commit To Change">Commit To Change</a>
                    </li>
                    <li>
                        <a href="/gallery" title="Visual Stories">Visual Stories</a>
                    </li>
                    <li>
                        <a href="/e-waste" title="E-Waste">E-Waste</a>
                    </li>
                    <li>
                        <a href="/registration" title="Registration">Registration</a>
                    </li>
                </ul>
                <a href="mailto:geng@oppoindia.com" title="Email Us" class="email">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M22 7L13.03 12.7C12.7213 12.8934 12.3643 12.996 12 12.996C11.6357 12.996 11.2787 12.8934 10.97 12.7L2 7M4 4H20C21.1046 4 22 4.89543 22 6V18C22 19.1046 21.1046 20 20 20H4C2.89543 20 2 19.1046 2 18V6C2 4.89543 2.89543 4 4 4Z" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    GenG@oppoindia.com
                </a>
            </div>
        </div>
        <div class="copyright center-text">
            <p>
                Copyright @ {{ now()->year }}. All Rights Reserved
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/ScrollTrigger.min.js"></script>

    <script>
        var nav = document.getElementById('nav');

        addEventListener("scroll", (event) => {

            if (window.pageYOffset > 70) {

                nav.classList.add("active-menu");

            } else {

                nav.classList.remove("active-menu");

            }

        });

        const swiper = new Swiper('.banner-swiper', {

            // Optional parameters
            loop: true,

            spaceBetween: 20,

            // Navigation arrows

            navigation: {

                nextEl: '.btn-prev',

                // prevEl: '.btn-prev',

            },

            slidesOffsetAfter: 20,

            breakpoints: {

                0: {

                    slidesPerView: 1,

                },

                900: {

                    slidesPerView: 1,

                },

                1000: {

                    slidesPerView: 1,

                },

                1440: {

                    slidesPerView: 1,

                }

            }

        });

        //counters

        function createCounter() {

            var counter = document.querySelectorAll('.counts');

            counter.forEach((ct, i) => {

                ct.innerHTML = '';

                var countVal = ct.getAttribute("data-count");

                countVal.split("").forEach((count, i) => {

                    const span = document.createElement("div");

                    span.classList.add("maincount");

                    for (i = (count < 6 ? (count == 0) ? 5 : 0 : count - 3); i <= (count == 0 ? 9 :

                            count); i++) {

                        const spanInside = document.createElement("span");

                        spanInside.classList.add("incount");

                        spanInside.innerText = i;

                        span.appendChild(spanInside);

                        if (count == 0 && i == 9) {

                            lastZero(span)

                        }

                        ct.appendChild(span);

                    }

                });

                runCounter();

            })

        }



        function lastZero(span) {

            // add last zero

            const spanInside = document.createElement("span");

            spanInside.classList.add("incount");

            spanInside.innerText = 0;

            span.appendChild(spanInside);

        }



        function runCounter() {

            var digits = gsap.utils.toArray('.maincount');

            digits.forEach((digit, index) => {

                const height = digit.clientHeight - digit.parentNode.clientHeight;

                gsap.to(digit, {

                    y: `-` + height, // Move up by 10 digits height

                    opacity: 1,

                    duration: 1,

                    ease: "linear",

                    stagger: 1,

                    repeat: 0, // Infinite loop

                    scrollTrigger: {

                        trigger: digit,

                        start: 'top 90%',

                        end: 'top 20%', // End animation when the bottom of the digit container is 20% from the top of the viewport

                    }

                });

            });

        }

        createCounter();

        window.addEventListener('resize', createCounter);

        //counters end
    </script>

    @yield('footer_section')

    @stack('footer_script')



</body>



</html>