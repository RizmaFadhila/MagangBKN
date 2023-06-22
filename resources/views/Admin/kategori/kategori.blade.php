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
    <li class="breadcrumb-item active">Kategori</li>
@endsection

@section('isi')
    <!-- column -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kategori</h4>
                    <div class="card-tools">
                        <a href="{{ route('kategori.create') }}" class="btn btn-info"> Tambah Data
                            Layanan
                            <i class="fa fa-plus-square"></i></a>

                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Layanan</th>
                                    <th>Aksi</th>

                                </tr>
                                <div style="visibility: hidden, margin:0px; padding; 0px;"></div>
                                @foreach ($kategori as $k)
                                    <tr>
                                        <td>{{ $k->no_layanan }}</td>
                                        <td>{{ $k->nama_layanan }}</td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('kategori.destroy', $k->id) }}" method="POST">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-outline-danger"><i
                                                        class="fa fa-trash"></i></button>


                                                &nbsp;
                                                <a href="{{ route('kategori.edit', $k->id) }}"
                                                    class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </thead>
                            </tbody>
                        </table>
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
