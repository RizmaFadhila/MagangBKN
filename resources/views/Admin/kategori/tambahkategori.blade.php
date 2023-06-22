@extends('Layout/admin')
@section('css')
@endsection
@section('logo')
@endsection
@section('header')
@endsection
@section('nav')
@endsection
@section('tittle')
    <h3 class="text-themecolor">Kategori Layanan BKN</h3>
@endsection
@section('judulbawah')
    <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection
@section('isi')
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Tambah Data Kategori Layanan</h3>
            </div>
            <form action="{{ url('kategori') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="NamaLayanan">No Layanan</label>
                        <input type="text" class="form-control" name="no_layanan" id="no_layanan"
                            placeholder="No Layanan">
                    </div>
                    <div class="form-group">
                        <label for="KodeLayanan">Nama Layanan</label>
                        <input type="text" class="form-control" name="nama_layanan" id="nama_layanan"
                            placeholder="Nama Layanan">
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Simpan</button>

                    </div>

                </div>
            </form>

        </div>
    </div>
@endsection

@section('footer')
@endsection
@section('akhir')
@endsection
