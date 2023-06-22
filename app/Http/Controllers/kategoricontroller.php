<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\kategorimodel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class kategoricontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::latest()->paginate(15);

        return view('Admin.kategori.kategori', compact(['kategori']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.kategori.tambahkategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = Kategori::create([
            'no_layanan' => $request->no_layanan,
            'nama_layanan' => $request->nama_layanan,
        ]);
        if ($kategori) {
            return redirect()->route('kategori')->with(['success' => 'Data Berhasil di Simpan']);
        } else {
            return redirect()->route('kategori')->with(['success' => 'Data Gagal di Simpan']);
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
    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('Admin.kategori.updatekategori', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);

        $kategori->update([
            'no_layanan' => $request->no_layanan,
            'nama_layanan' => $request->nama_layanan,

        ]);

        return redirect('kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        Storage::disk('local')->delete('public/kategori/' . $kategori->gambar);
        $kategori->delete();

        return redirect()->route('kategori')->with(['success' => 'Data Berhasil Dihapus']);
    }
}