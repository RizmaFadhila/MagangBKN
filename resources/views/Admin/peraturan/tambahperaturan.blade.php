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
    <h3 class="text-themecolor">Tambah Peraturan BKN</h3>
@endsection
@section('judulbawah')
    <li class="breadcrumb-item"><a href="javascript:void(0)">Peraturan</a></li>
                            <li class="breadcrumb-item active">Tambah</li>
@endsection
@section('isi')
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Tambah Data Peraturan</h3>
            </div>
            <form action="{{ url('peraturanAdmin') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="No">No</label>
                        <input type="text" class="form-control" name="no" id="no" placeholder="No">
                    </div>
                    <div class="form-group">
                        <label for="Judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label for="Jenis Peraturan">Jenis Peraturan</label>
                        <input type="text" class="form-control" name="jenis_peraturan" id="jenis_peraturan"
                            placeholder="Jenis Peraturan">
                    </div>
                    <div class="form-group">
                        <label for="Pemrakarsa">Pemrakarsa</label>
                        <input type="text" class="form-control" name="pemrakarsa" id="pemrakarsa"
                            placeholder="Pemrakarsa">
                    </div>
                    <div class="form-group">
                        <label for="No Peraturan">No Peraturan</label>
                        <input type="text" class="form-control" name="no_peraturan" id="no_peraturan"
                            placeholder="No Peraturan">
                    </div>

                    <div class="form-group">
                        <label for="Tahun Ditetapkan">Tahun Ditetapkan</label>
                        <input type="text" class="form-control" name="thn_ditetapkan" id="thn_ditetapkan"
                            placeholder="Tahun Ditetapkan">
                    </div>
                    <div class="form-group">
                        <label for="Tempat Penetapan">Tempat Penetapan</label>
                        <input type="text" class="form-control" name="tempat_penetapan" id="tempat_penetapan"
                            placeholder="Tempat Penetapan">
                    </div>
                    <div class="form-group">
                        <label for="dokumen">Dokumen</label>
                        <input type="file" class="form-control" name="dokumen" value="{{ old('dokumen') }}">

                        @error('dokumen')
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
