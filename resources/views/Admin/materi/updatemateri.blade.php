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
    <li class="breadcrumb-item active">Update</li>
@endsection
@section('isi')
    <div class="content">

        <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Tambah Data Kategori Layanan</h3>
            </div>
            @foreach ($data as $d)
                <form action="{{ route('materi.update', $d->idmateri) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="No">No</label>
                            <input type="text" class="form-control" name="no" id="no"
                                value="{{ $d->no }}" placeholder="No">
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul"
                                value="{{ $d->judul }}" placeholder="Judul">
                        </div>
                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" id="deskripsi"
                                value="{{ $d->deskripsi }}" placeholder="Deskripsi">
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" class="form-control" name="penulis" id="penulis"
                                value="{{ $d->penulis }}" placeholder="Penulis">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" class="form-control" name="kategori" id="kategori"
                                value="{{ $d->kategori }}" placeholder="Kategori">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal"
                                value="{{ $d->tanggal }}" placeholder="Tanggal">
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
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>

                    </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection

@section('footer')
@endsection
@section('akhir')
@endsection
