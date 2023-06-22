<!DOCTYPE html>
<html lang="en">

<head>
    <title>BKN| Kantor Regional XII Pekanbaru</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('UserAsset/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ url('UserAsset/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ url('UserAsset/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('UserAsset/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('UserAsset/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('UserAsset/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('UserAsset/styles/responsive.css') }}">
    <link href="{{ url('UserAsset/plugins/video-js/video-js.css') }}" rel="stylesheet" type="text/css">
    @yield('awal')
</head>


<body>

    <div class="super_container">

        <!-- Header -->


        <header class="header">
            <!-- Navbar kosong putih -->
            <div>
                <div class="header_container" style="padding-top:3%">
                </div>
            </div>
            <!-- END Navbar kosong putih -->

            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="#">
                                        <div class="logo_text">BKN<span> | Kantor Regional XII </span></div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li><a href="{{ Url('/') }}">Home</a></li>
                                        <li><a href="{{ Url('pengetahuan') }}">Materi</a></li>
                                        <li><a href="{{ Url('peraturanUser') }}">Peraturan</a></li>
                                        <li><a class="btn btn-info" style="color: aliceblue;"
                                                href="{{ url('login') }}">Login</a>
                                        </li>
                                    </ul>


                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Search Panel -->
            <div class="header_search_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                                <form action="#" class="header_search_form">
                                    <input type="search" class="search_input" placeholder="Search" required="required">
                                    <button
                                        class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('navheader')

        <!-- Home -->
        <div>
            @yield('isi')
        </div>
        <!-- Footer -->

        <footer class="footer">
            <div class="footer_background" style="background-image:url(../User/images/footer_background.png)"></div>
            <div class="container">
                <div class="row footer_row">
                    <div class="col">
                        <div class="footer_content">
                            <div class="row">

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer About -->
                                    <div class="footer_section footer_about">
                                        <div class="footer_logo_container">
                                            <a href="#">
                                                <div class="footer_logo_text">BKN<span> | Kantor Regional XII
                                                        Pekanbaru</span></div>
                                            </a>
                                        </div>
                                        <div class="footer_about_text">
                                            <p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="footer_social">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer Contact -->
                                    <div class="footer_section footer_contact">
                                        <div class="footer_title">Contact Us</div>
                                        <div class="footer_contact_info">
                                            <ul>
                                                <li>Email: Info.deercreative@gmail.com</li>
                                                <li>Phone: +(88) 111 555 666</li>
                                                <li>40 Baria Sreet 133/2 New York City, United States</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer links -->
                                    <div class="footer_section footer_links">
                                        <div class="footer_title">Contact Us</div>
                                        <div class="footer_links_container">
                                            <ul>
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="#">Features</a></li>
                                                <li><a href="courses.html">Courses</a></li>
                                                <li><a href="#">Events</a></li>
                                                <li><a href="#">Gallery</a></li>
                                                <li><a href="#">FAQs</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col clearfix">

                                    <!-- Footer links -->
                                    <div class="footer_section footer_mobile">
                                        <div class="footer_title">Mobile</div>
                                        <div class="footer_mobile_content">
                                            <div class="footer_image"><a href="#"><img
                                                        src="../User/images/mobile_1.png" alt=""></a></div>
                                            <div class="footer_image"><a href="#"><img
                                                        src="../User/images/mobile_2.png" alt=""></a></div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row copyright_row">
                    <div class="col">
                        <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
                            <div class="cr_text">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @yield('footer')

    <script src="{{ url('UserAsset/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ url('UserAsset/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ url('UserAsset/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ url('UserAsset/plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ url('UserAsset/plugins/greensock/TimelineMax.min.js') }}"></script>
    <script src="{{ url('UserAsset/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ url('UserAsset/plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ url('UserAsset/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ url('UserAsset/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ url('UserAsset/plugins/easing/easing.js') }}"></script>
    <script src="{{ url('UserAsset/plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ url('UserAsset/js/custom.js') }}"></script>
    <script src="{{ url('UserAsset/plugins/masonry/masonry.js') }}"></script>
    <script src="{{ url('UserAsset/plugins/video-js/video.min.js') }}"></script>
    <script src="{{ url('UserAsset/js/blog.js') }}"></script>
</body>
@yield('akhir')

</html>
