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
                <!--untuk Sidebar searchnya -->
                <div class="col-sm-4">
                    <div class="col-sm" style="background-color:gainsboro;width: 100%">
                        <br>
                        <h3>Pencarian</h3>
                        <hr>
                        <form action="{{ url('searchPeraturan') }}" method="GET">
                            @csrf
                            <div>
                                <label class="font-monospace fw-bolder" style="color:black">Judul Peraturan :</label>
                                <input type="text" class="search_input" name="judul" id="judul"
                                    placeholder="Search Judul Peraturan">
                            </div>
                            <div>
                                <label class="font-monospace fw-bolder" style="color:black">Tahun Peraturan :</label>
                                <input type="text" class="search_input" name="thn_ditetapkan" id="thn_ditetapkan"
                                    placeholder="Search Tahun Peraturan">
                            </div>
                            <div>
                                <label class="font-monospace fw-bolder" style="color:black">Tentang :</label>
                                <input type="text" class="search_input" name="tentang" id="tentang"
                                    placeholder="Search Tentang">
                            </div>
                            <br>
                            <div>
                                <center>
                                    <button type="submit" value="search" class="btn btn-info" style="align-items: center">
                                        Cari
                                    </button>
                                </center>
                            </div>
                        </form>

                        <br>
                    </div>
                </div>
                <!--tampilan peraturan -->
                <div class="col-sm-8">
                    <div class="table table-bordered" style="padding-left: 5%;padding-right:5%">
                        <h3 style="text-align: center">Data Peraturan</h3>
                        <hr>
                        <table border="1" width="100%" align="center"
                            style="background-color: linen;border-color:black">
                            <tr border="1px">
                                <th class="col col-sm-8" style="text-align: center;color:black"><Strong>Judul</Strong></th>
                                <th style="text-align: center;color:black"><strong>View</strong></th>
                            </tr>
                            @foreach ($peraturan as $p)
                                <tr border="1px">
                                    <td class="col col-sm-8" style="text-align: justify;color:black">{{ $p->judul }}
                                    </td>
                                    <td style="text-align: center;color:black"><a
                                            href="{{ url('/view', $p->id) }}">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <br>
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
