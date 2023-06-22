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
    <li class="breadcrumb-item active">Update</li>
@endsection
@section('isi')
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Tambah Data Kategori Layanan</h3>
            </div>
            <form action="{{ route('kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="NoLayanan">No Layanan</label>
                        <input type="text" class="form-control" name="no_layanan" id="no_layanan"
                            value="{{ $kategori->no_layanan }}" placeholder="No Layanan">
                    </div>
                    <div class="form-group">
                        <label for="NamaLayanan">Nama Layanan</label>
                        <input type="text" class="form-control" name="nama_layanan" id="nama_layanan"
                            value="{{ $kategori->nama_layanan }}" placeholder="Nama Layanan">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>

                </div>
            </form>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer"> © 2018 Adminwrap by wrappixel.com </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
@endsection

@section('footer')
@endsection
@section('akhir')
@endsection
