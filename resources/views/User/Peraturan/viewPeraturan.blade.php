@extends('Layout/user')
@section('awal')
    <link rel="stylesheet" type="text/css" href="{{ url('UserAsset/styles/courses.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('UserAsset/styles/courses_responsive.css') }}">
@endsection
@section('navheader')
@endsection

@section('isi')
    <div style="height: 100px; width:100%">
    </div>
    <div class="courses">
        <div class="container">
            <div class="row">
                <div class="col-sm-4" style="width:100%;padding-block-start:3.5%">
                    <div class="col-sm" style="background-color:gainsboro;width:100%">
                        <br>
                        <center>
                            <h4>Detail Peraturan </h4>
                        </center>
                        <hr>
                        <form>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="font-monospace fw-bolder" style="color:black;text-align:justify"><b>
                                            Peraturan :
                                        </b></label>
                                </div>
                                <div class="col-sm-6">
                                    <p style="color:black;text-align:justify"> {{ $peraturan->judul }}</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="font-monospace fw-bolder" style="color:black;text-align:justify"><b>
                                            Kategori Peraturan :
                                        </b></label>
                                </div>
                                <div class="col-sm-6">
                                    <p style="color:black;text-align:justify"> {{ $peraturan->jenis_peraturan }}</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="font-monospace fw-bolder" style="color:black;text-align:justify"><b>
                                            Nomor :
                                        </b></label>
                                </div>
                                <div class="col-sm-6">
                                    <p style="color:black;text-align:justify"> {{ $peraturan->no_peraturan }}</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="font-monospace fw-bolder" style="color:black;text-align:justify"><b>
                                            Tahun penetapan :
                                        </b></label>
                                </div>
                                <div class="col-sm-6"">
                                    <p style=" color:black;text-align:justify"> {{ $peraturan->thn_ditetapkan }}</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="font-monospace fw-bolder" style="color:black;text-align:justify"><b>
                                            Lokasi :
                                        </b></label>
                                </div>
                                <div class="col-sm-6">
                                    <p style="color:black;text-align:justify"> {{ $peraturan->tempat_penetapan }}</p>
                                </div>
                            </div>
                            <br>
                            <div>
                                <center>
                                    <b><label for="a" style="color:black;text-align:center">Download PDF </label><a
                                            href="{{ url('/download', $peraturan->dokumen) }}"> Di
                                            sini</a></b>
                                </center>

                            </div>
                        </form>
                        <br>
                    </div>
                </div>
                <!--tampilan peraturan -->
                <div class="col-sm-8" style="padding-block-start:0%">
                    <div class="row">
                        <form>
                            <div>
                                <center>
                                    <h3>{{ $peraturan->judul }}</h3>
                                </center>
                                <div>
                                    <br>
                                    <center>
                                        <div>
                                            <embed src="/storage/dokumen/{{ $peraturan->dokumen }}" height="500px"
                                                width="750px" />
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </form>
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
