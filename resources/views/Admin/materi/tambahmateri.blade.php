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
    <h3 class="text-themecolor">Peraturan BKN</h3>
@endsection
@section('judulbawah')
    <li class="breadcrumb-item"><a href="javascript:void(0)">Materi</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('isi')
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Tambah Data Materi</h3>
            </div>
            <form action="{{ url('materi') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="No">No</label>
                        <input type="text" class="form-control" name="no" id="no" placeholder="No">
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Judul">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
                        </div>
                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" id="deskripsi"
                                placeholder="Deskripsi">
                        </div>
                        <div class="form-group">
                            <label for="Penulis">Penulis</label>
                            <input type="text" class="form-control" name="penulis" id="penulis" placeholder="Penulis">
                        </div>
                        <div class="form-group">
                            <label for="Kategori">Kategori</label>
                            <input type="text" class="form-control" name="kategori" id="kategori"
                                placeholder="Kategori">
                        </div>
                        <div class="form-group">
                            <label for="Tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="Layanan">Layanan</label>
                            <select class="form-control" id="layanan" name="layanan">
                                <option value="">Pilih</option>
                                @foreach ($layanan as $layanan)
                                    <option value="{{ $layanan->id }}">{{ $layanan->nama_layanan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" class="form-control" name="file" value="{{ old('file') }}">

                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="video">Video</label>
                            <input type="file" class="form-control" name="video" value="{{ old('video') }}">

                            @error('video')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
