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
    <h3 class="text-themecolor">Materi </h3>
@endsection
@section('judulbawah')
    <li class="breadcrumb-item"><a href="javascript:void(0)">Materi</a></li>
    <li class="breadcrumb-item active">materi</li>
@endsection

@section('isi')
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Materi</h4>
                    <div class="card-tools">
                        <a href="{{ route('materi.create') }}" class="btn btn-info"> Tambah Data
                            Materi
                            <i class="fa fa-plus-square"></i></a>

                    </div>
                    <div class="table-responsive" style="width: fit-content">
                        <table class="table">
                            <thead>
                                <tr>
                                    {{-- <th>ID</th> --}}
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Penulis</th>
                                    <th>Kategori</th>
                                    <th>Tanggal</th>
                                    <th>Layanan</th>
                                    <th>File</th>
                                    <th>Video</th>
                                    <th>Aksi</th>
                                    <th></th>

                                </tr>
                                <div style="visibility: hidden, margin:0px; padding; 0px;"></div>
                                @foreach ($materi as $m)
                                    <tr>
                                        {{-- <td>{{ $m->id }}</td> --}}
                                        <td>{{ $m->no }}</td>
                                        <td>{{ $m->judul }}</td>
                                        <td>{{ $m->deskripsi }}</td>
                                        <td>{{ $m->penulis }}</td>
                                        <td>{{ $m->kategori }}</td>
                                        <td>{{ $m->tanggal }}</td>
                                        <td>{{ $m->nama_layanan }}</td>
                                        <td>{{ $m->file }}</td>
                                        <td>{{ $m->video }}</td>
                                        <td><a href="/materi/destroy/{{ $m->idmateri }}" class="btn btn-outline-danger"
                                                onclick="return confirm('Apakah Anda Yakin ?');"><i
                                                    class="fa fa-trash"></i></a></td>
                                        <td>
                                            <a href="{{ route('materi.edit', $m->idmateri) }}" class="btn btn-outline-warning"><i
                                                    class="fa fa-edit"></i></a>

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
