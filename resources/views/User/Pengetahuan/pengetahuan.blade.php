@extends('Layout/user')
@section('awal')
    <link rel="stylesheet" type="text/css" href="{{ url('UserAsset/styles/courses.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('UserAsset/styles/courses_responsive.css') }}">
@endsection
@section('navheader')
@endsection

@section('isi')
    <div style="height: 150px; width:100%">
    </div>

    <div class="courses" style="padding-bottom:1%">
        <div class="container">
            <h3 style="text-align: center;color:black">
                <b>Hello, Klik di sini untu konten yang kamu cari !!</b>
            </h3>
            <br>
            <form class="header_search_form" action="{{ url('searchVideo') }}" method="GET"
                style="width:100%;text-align:center">
                @csrf
                <input type="search" class="search_input" name="cari" id="cari" placeholder="Search">
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>

    </div>
    <div class="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 container">
                    @foreach ($pengetahuan as $p)
                        <div class="course" style="width: 90%">
                            <div class="course_image" width="100%">
                                <video class="blog_post_video video-js"
                                    data-setup='{"controls": true, "autoplay": false, "preload": "auto"}'>
                                    <source src="/storage/video/{{ $p->video }}" type="video/mp4">
                                    <source src="/storage/video/{{ $p->video }}" type="video/MOV">
                                </video>
                            </div>
                            <div class="course_body" width="100%">
                                <h3 class="course_title">{{ $p->judul }}</a></h3>
                                <div class="course_teacher">{{ $p->deskripsi }}</div>
                                <div class="course_text">
                                    <p>{{ $p->penulis }}</p>
                                </div>
                                <div class="text-right">
                                    <a class="btn btn-info" style="font-size:15px;color:black"
                                        href="{{ url('/tampil', $p->idmateri) }}">detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col" style="background-color: antiquewhite;width:100%;border-radius:5%;height:90%">
                    <div style="padding-top:7%">
                        @foreach ($materi as $m)
                            <div class="course">
                                <div class="course_image" width="100%">
                                    <video class="blog_post_video video-js"
                                        data-setup='{"controls": true, "autoplay": false, "preload": "auto","height":"70"}'>
                                        <source src="/storage/video/{{ $m->video }}" type="video/mp4">
                                        <source src="/storage/video/{{ $m->video }}" type="video/MOV">
                                    </video>
                                </div>
                                <div class="course_body">
                                    <div>
                                        <label style="font-size: 10px;color:black"><b>{{ $m->judul }}</b></label>
                                    </div>
                                    <div class="text-right">

                                        <a class="btn btn-info" style="font-size:10px;color:black"
                                            href="{{ url('/tampil', $m->idmateri) }}">Lihat</a>
                                    </div>
                                </div>
                            </div>
                            <br style="height: 10%">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="courses">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4" style="background-color: antiquewhite;width:90%;border-radius:5%;height:95%">
                        <div style="padding-top:5%;padding-bottom:5%">
                            <form action="">
                                @foreach ($kategori as $k)
                                    <div class="btn btn-light text-left" style="width: 100%">
                                        <a href="">{{ $k->nama_layanan }}</a>
                                    </div>
                                    <br>
                                @endforeach
                            </form>

                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="container">
                            <div class="row">
                                @foreach ($materi as $m)
                                    <div class="col-sm">
                                        <div class="course">
                                            <div class="course_image" width="100%">
                                                <video class="blog_post_video video-js"
                                                    data-setup='{"controls": true, "autoplay": false, "preload": "auto","height":"70"}'>
                                                    <source src="/storage/video/{{ $m->video }}" type="video/mp4">
                                                    <source src="/storage/video/{{ $p->video }}" type="video/MOV">
                                                </video>
                                            </div>
                                            <div class="course_body">
                                                <div>
                                                    <label
                                                        style="font-size: 10px;color:black"><b>{{ $m->judul }}</b></label>
                                                </div>
                                                <div class="text-right">

                                                    <a class="btn btn-info" style="font-size:10px;color:black"
                                                        href="{{ url('/tampil', $m->id) }}">Lihat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="container">
                                    <div class="row" style="padding-top:20px ">
                                        @foreach ($materi as $m)
                                            <div class="col-sm">
                                                <div class="course">
                                                    <div class="course_image" width="100%">
                                                        <embed class="blog_post_video video-js"
                                                            data-setup='{"height":"70"}'
                                                            src="/storage/file/{{ $m->file }}">

                                                        </embed>
                                                    </div>
                                                    <div class="course_body">
                                                        <div>
                                                            <label
                                                                style="font-size: 10px;color:black"><b>{{ $m->judul }}</b></label>
                                                        </div>
                                                        <div class="text-right">

                                                            <a class="btn btn-info" style="font-size:10px;color:black"
                                                                href="{{ url('/tampil', $m->id) }}">Lihat</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
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
