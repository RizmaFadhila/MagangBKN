<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\materimodel;
use Illuminate\Http\Request;

class PengetahuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengetahuan = materimodel::latest('idmateri')->limit(1)->get();
        $materi = materimodel::first('idmateri')->limit(2)->get();
        $kategori = Kategori::all();
        return view('User.Pengetahuan.pengetahuan', compact(['pengetahuan', 'materi', 'kategori']));
    }
    public function tampil($id)
    {
        $pengetahuan = materimodel::find($id);
        return view('User.Pengetahuan.tampilVideo', compact(['pengetahuan']));
    }
    public function searchVideo(Request $request)
    {
        $search = $request->cari;
        if ($search) {
            $materi = materimodel::where('judul', 'LIKE', "%$search%")
                ->orwhere('deskripsi', 'LIKE', "%$search%")
                ->orwhere('penulis', 'LIKE', "%$search%")
                ->orwhere('kategori', 'LIKE', "%$search%")
                ->orwhere('layanan', 'LIKE', "%$search%")
                ->get();
        } else {
            return back();
        }
        return view('User.Pengetahuan.Caripengetahuan', compact(['materi', 'search']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}