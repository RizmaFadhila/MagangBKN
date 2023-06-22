@extends('Layout/user')
@section('awal')
@endsection

@section('navheader')
@endsection
@section('isi')
    <!-- Home -->
    <div class="home">
        <div class="home_slider_container">

            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">

                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(UserAsset/img/bknsah.jpg)">
                    </div>
                    <div class="home_slider_content">
                        <div class="container">

                        </div>
                    </div>
                </div>
                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(UserAsset/img/bknsah.jpg)">
                    </div>
                </div>
            </div>
        </div>

        <!-- Home Slider Nav -->

        <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
    </div>

    <!-- Features -->

    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">Welcome To BKN E-Learning</h2>
                        <div class="section_subtitle">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="home_slider_title" style="color:rgb(69, 107, 180)">Selamat Datang </div>
                                    <div class="home_slider_subtitle" style="color:rgb(172, 86, 14)"><strong> Badan
                                            Kepegawaian Negara | Kantor Regional XII</strong>
                                        <div class="home_slider_form_container">
                                            <form
                                                class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between"
                                                style="color:rgb(188, 188, 246)">
                                                <div class="d-flex flex-row align-items-center justify-content-start">
                                                    <input type="search" class="home_search_input" style="border: 5ch"
                                                        placeholder="Keyword Search">
                                                </div>
                                                <button type="submit" class="home_search_button">search</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row features_row">


            <!-- Features Item -->
            <div class="col-lg-6 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="../UserAsset/images/icon_2.png" alt=""></div>
                    <h3 class="feature_title">Pengetahuan</h3>
                    <div class="feature_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>

            <!-- Features Item -->
            <div class="col-lg-6 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="../UserAsset/images/icon_3.png" alt=""></div>
                    <h3 class="feature_title">Peraturan</h3>
                    <div class="feature_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

    <!-- Popular Courses -->

    <div class="courses">
        <div class="section_background parallax-window" data-parallax="scroll"
            data-image-src="../UserAsset/images/courses_background.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">Cuplikan video</h2>

                    </div>
                </div>
            </div>
            <div class="row courses_row">

                <!-- Course -->
                <div class="col-lg-6 course_col">
                    <div class="course">
                        <div class="course_image"><img src="../UserAsset/images/course_1.jpg" alt=""></div>
                        <div class="course_body">
                            <h3 class="course_title"><a href="course.html">Judul Materi</a></h3>
                            <div class="course_teacher">Video</div>
                            <div class="course_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="course_footer">
                            <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                <div class="course_info">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <span>20 Student</span>
                                </div>
                                <div class="course_info">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span>5 Ratings</span>
                                </div>
                                <div class="course_price ml-auto">$130</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course -->
                <div class="col-lg-6 course_col">
                    @foreach ($materi as $mat)
                        <div class="course">
                            <div class="course_image"><video class="blog_post_video video-js"
                                    data-setup='{"controls": true, "autoplay": false, "preload": "auto"}'>
                                    <source src="/storage/video/{{ $mat->video }}" type="video/mp4">
                                    <source src="/storage/video/{{ $mat->video }}" type="video/MOV">
                                </video>
                            </div>
                            <div class="course_body">
                                <h3><b>{{ $mat->judul }}</b></a></h3>
                                <div>
                                    {{ $mat->nama_layanan }}
                                </div>

                                <div class="course_text">
                                    <p>{{ $mat->deskripsi }}</p>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="courses_button trans_200"><a href="#">Lihat semua Materi </a></div>
                </div>
            </div>
        </div>
    </div>


    <!-- Latest News -->

    <div class="news">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">Latest News</h2>
                        <div class="section_subtitle">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu.
                                Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row news_row">
                <div class="col-lg-5 news_col">
                    <div class="news_posts_small">

                        @foreach ($kategori as $k)
                            <div class="news_post_small">
                                <div class="news_post_small_title"><a href="blog_single.html">{{ $k->nama_layanan }}</a>
                                </div>
                            </div>
                        @endforeach
                        <!-- News Posts Small -->

                    </div>
                </div>
                <div class="col-lg-7 news_col">

                    <!-- News Post Large -->
                    <div class="news_post_large_container">
                        <div class="news_post_large">
                            <div class="news_post_image"><img src="../UserAsset/images/news_1.jpg" alt="">
                            </div>
                            <div class="news_post_large_title"><a href="blog_single.html">Here’s What You Need to
                                    Know About Online Testing for the ACT and SAT</a></div>
                            <div class="news_post_meta">
                                <ul>
                                    <li><a href="#">admin</a></li>
                                    <li><a href="#">november 11, 2017</a></li>
                                </ul>
                            </div>
                            <div class="news_post_text">
                                <p>Policy analysts generally agree on a need for reform, but not on which path
                                    policymakers should take. Can America learn anything from other nations...</p>
                            </div>
                            <div class="news_post_link"><a href="blog_single.html">read more</a></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection

@section('akhir')
@endsection
