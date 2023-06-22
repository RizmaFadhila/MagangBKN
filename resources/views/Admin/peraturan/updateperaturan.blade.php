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
    <h3 class="text-themecolor">Update Peraturan BKN</h3>
@endsection
@section('judulbawah')
    <li class="breadcrumb-item"><a href="javascript:void(0)">Peraturan</a></li>
    <li class="breadcrumb-item active">Update</li>
@endsection
@section('isi')
    <!-- ============================================================== -->
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Tambah Data Kategori Layanan</h3>
            </div>
            <form action="{{ route('peraturanAdmin.update', $peraturan->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="No">No</label>
                        <input type="text" class="form-control" name="no" id="no"
                            value="{{ $peraturan->no }}" placeholder="No Layanan">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul"
                            value="{{ $peraturan->judul }}" placeholder="Nama Layanan">
                    </div>
                    <div class="form-group">
                        <label for="Jenis jenis_peraturan">Jenis Peraturan</label>
                        <input type="text" class="form-control" name="jenis_peraturan" id="jenis_peraturan"
                            value="{{ $peraturan->jenis_peraturan }}" placeholder="Nama Layanan">
                    </div>
                    <div class="form-group">
                        <label for="pemrakarsa">Pemrakarsa</label>
                        <input type="text" class="form-control" name="pemrakarsa" id="pemrakarsa"
                            value="{{ $peraturan->pemrakarsa }}" placeholder="Nama Layanan">
                    </div>
                    <div class="form-group">
                        <label for="No no_peraturan">No Peraturan</label>
                        <input type="text" class="form-control" name="no_peraturan" id="no_peraturan"
                            value="{{ $peraturan->no_peraturan }}" placeholder="Nama Layanan">
                    </div>
                    <div class="form-group">
                        <label for="thn_ditetapkan">Tahun Ditetapkan</label>
                        <input type="text" class="form-control" name="thn_ditetapkan" id="thn_ditetapkan"
                            value="{{ $peraturan->thn_ditetapkan }}" placeholder="Nama Layanan">
                    </div>
                    <div class="form-group">
                        <label for="tempat_penetapan">Tempat Penetapan</label>
                        <input type="text" class="form-control" name="tempat_penetapan" id="tempat_penetapan"
                            value="{{ $peraturan->tempat_penetapan }}" placeholder="Nama Layanan">
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
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>

                </div>
            </form>
        </div>
    </div>
@endsection

@section('footer')
@endsection
@section('akhir')
@endsection
