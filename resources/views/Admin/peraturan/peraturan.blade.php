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
    <li class="breadcrumb-item"><a href="javascript:void(0)">Peraturan</a></li>
                            <li class="breadcrumb-item active">Peraturan</li>
@endsection

@section('isi')
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Peraturan</h4>
                    <div class="card-tools">
                        <a href="{{ route('peraturanAdmin.create') }}" class="btn btn-info"> Tambah
                            Data Peraturan <i class="fa fa-plus-square"></i>
                        </a>

                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Jenis Peraturan</th>
                                    <th>Pemrakarsa</th>
                                    <th>No Peraturan</th>
                                    <th>Tahun Ditetapkan</th>
                                    <th>Tempat Penetapan</th>
                                    <th>Dokumen</th>
                                    <th>Aksi</th>

                                </tr>
                                <div style="visibility: hidden, margin:0px; padding; 0px;"></div>
                                @foreach ($peraturan as $p)
                                    <tr>
                                        <td>{{ $p->no }}</td>
                                        <td>{{ $p->judul }}</td>
                                        <td>{{ $p->jenis_peraturan }}</td>
                                        <td>{{ $p->pemrakarsa }}</td>
                                        <td>{{ $p->no_peraturan }}</td>
                                        <td>{{ $p->thn_ditetapkan }}</td>
                                        <td>{{ $p->tempat_penetapan }}</td>
                                        <td style="text-align: center;color:black">
                                            <button class="btn btn-outline-warning">
                                                <a href="{{ url('/download', $p->dokumen) }}">Download</a>
                                            </button>
                                        </td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('peraturanAdmin.destroy', $p->id) }}" method="POST">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-outline-danger"><i
                                                        class="fa fa-trash"></i></button>


                                                &nbsp;
                                                <a href="{{ route('peraturanAdmin.edit', $p->id) }}"
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
