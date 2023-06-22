<?php

namespace App\Http\Controllers;

use App\Models\materimodel;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MateriAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('materi')
            ->join('kategori', 'kategori.id', '=', 'materi.layanan')->get();
        $materi = materimodel::latest()->paginate(10);
        return view('Admin.materi.materi')->with('materi', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $layanan = Kategori::all();
        return view('Admin.materi.tambahmateri', compact(['layanan']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->file('video');
        $data->storeAs('public/video', $data->getClientOriginalName());
        $mat = $request->file('file');
        $mat->storeAs('public/file', $mat->getClientOriginalName());
        $materi = materimodel::create([
            'no' => $request->no,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'penulis' => $request->penulis,
            'kategori' => $request->kategori,
            'tanggal' => $request->tanggal,
            'layanan' => $request->layanan,
            'video' => $data->getClientOriginalName(),
            'file' => $mat->getClientOriginalName(),
        ]);

        if ($materi) {
            return redirect()->route('materi.index')->with(['success' => 'Data Berhasil di Simpan']);
        } else {
            return redirect()->route('materi.index')->with(['danger' => 'Data Gagal di Simpan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idmateri)
    {

        $layanan = Kategori::all();
        $data = DB::table('materi')
            ->join('kategori', 'kategori.id', '=', 'materi.layanan')
            ->where('materi.idmateri', '=', $idmateri)
            ->get();
        return view('Admin.materi.updatemateri', compact('data', 'layanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idmateri)
    {
        $data = materimodel::where('materi.idmateri', '=', $idmateri);
        $file = $request->file('file');
        $vid = $request->file('video');
        $file->storeAs('public/file/', $file->getClientOriginalName());
        $vid->storeAs('public/video/', $vid->getClientOriginalName());
        $data->update([
            'no' => $request->no,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'penulis' => $request->penulis,
            'kategori' => $request->kategori,
            'tanggal' => $request->tanggal,
            'layanan' => $request->layanan,
            'video' => $vid->getClientOriginalName(),
            'file' => $file->getClientOriginalName()
        ]);

        return redirect('materi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idmateri)
    {
        $materi = materimodel::findOrFail($idmateri);
        Storage::disk('local')->delete('public/file/' . $materi->file);
        Storage::disk('local')->delete('public/video/' . $materi->video);
        $materi->delete();

        return redirect('materi');
    }
}