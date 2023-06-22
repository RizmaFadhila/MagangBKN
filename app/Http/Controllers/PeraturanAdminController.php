<?php

namespace App\Http\Controllers;

use App\Models\Peraturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PeraturanAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peraturan = Peraturan::latest()->paginate(10);
        $peraturan = Peraturan::all();
        return view('Admin.peraturan.peraturan', compact(['peraturan']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.peraturan.tambahperaturan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dokumen = $request->file('dokumen');
        $dokumen->storeAs('public/dokumen', $dokumen->getClientOriginalName());
        $peraturan = Peraturan::create([
            'no' => $request->no,
            'judul' => $request->judul,
            'jenis_peraturan' => $request->jenis_peraturan,
            'pemrakarsa' => $request->pemrakarsa,
            'no_peraturan' => $request->no_peraturan,
            'thn_ditetapkan' => $request->thn_ditetapkan,
            'tempat_penetapan' => $request->tempat_penetapan,
            'dokumen' => $dokumen->getClientOriginalName(),

        ]);
        if ($dokumen) {
            return redirect()->route('peraturanAdmin')->with(['success' => 'Data berhasil di simpan']);
        } else {
            return redirect()->route('peraturanAdmin')->with(['danger' => 'Data gagal di simpan']);
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
        $peraturan = Peraturan::find($id);
        return view('Admin.peraturan.updateperaturan', compact('peraturan'));
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
        $peraturan = Peraturan::findOrFail($id);
        $dokumen = $request->file('dokumen');
        $dokumen->storeAs('public/dokumen', $dokumen->getClientOriginalName());
        $peraturan->update([
            'no' => $request->no,
            'judul' => $request->judul,
            'jenis_peraturan' => $request->jenis_peraturan,
            'pemrakarsa' => $request->pemrakarsa,
            'no_peraturan' => $request->no_peraturan,
            'thn_ditetapkan' => $request->thn_ditetapkan,
            'tempat_penetapan' => $request->tempat_penetapan,
            'dokumen' => $dokumen->getClientOriginalName(),
        ]);

        return redirect('peraturanAdmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peraturan = Peraturan::findOrFail($id);
        Storage::disk('local')->delete('public/dokumen/' . $peraturan->dokumen);
        $peraturan->delete();

        return redirect()->route('peraturanAdmin')->with(['success' => 'Data Berhasil Dihapus']);
    }
    public function download(Request $request, $dokumen)
    {
        return response()->download(public_path('storage/dokumen/' . $dokumen));
    }
}