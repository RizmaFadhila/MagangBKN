<?php

namespace App\Http\Controllers;

use App\Models\Peraturan;
use Illuminate\Http\Request;

class PeraturanController extends Controller
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
        return view('User.Peraturan.peraturan', compact(['peraturan']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $peraturan = Peraturan::find($id);
        return view('User.Peraturan.viewPeraturan', compact(['peraturan']));
    }
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
    public function show(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            //where
            $peraturan = Peraturan::where('judul', 'LIKE', "%$search%")->orwhere('jenis_peraturan', 'LIKE', "%$search%")->get();
        } else {
            $peraturan = Peraturan::all();
        }

        return view('User.Peraturan.peraturan', compact(['peraturan', 'search']));
    }
    public function download(Request $request, $dokumen)
    {
        return response()->download(public_path('storage/dokumen/' . $dokumen));
    }

    public function searchPeraturan(Request $request)
    {
        $title = $request->judul;
        $tahun = $request->thn_ditetapkan;
        $tentang = $request->tentang;

        if (empty($title) && empty($tahun) && empty($tentang)) {
            return back();
        }
        if ($title && empty($tahun) && empty($tentang)) {
            $peraturan = Peraturan::where('judul', 'LIKE', "%$title%")->get();
        } else if ($tahun && empty($title) && empty($tentang)) {
            $peraturan = Peraturan::where('thn_ditetapkan', 'LIKE', "%$tahun%")->get();
        } elseif ($tentang && empty($title) && empty($tahun)) {
            $peraturan = Peraturan::where('judul', 'LIKE', "%$tentang%")
                ->orwhere('jenis_peraturan', 'LIKE', "%$tentang%")
                ->orwhere('pemrakarsa', 'LIKE', "%$tentang%")
                ->orwhere('thn_ditetapkan', 'LIKE', "%$tentang%")
                ->orwhere('tempat_penetapan', 'LIKE', "%$tentang%")->get();
        } elseif ($tahun && $title && empty($tentang)) {
            $peraturan = Peraturan::where('thn_ditetapkan', 'LIKE', "%$tahun%")
                ->orwhere('judul', 'LIKE', "%$tahun%")->get();
        } else {
            return back();
        }
        return view('User.Peraturan.peraturan', compact(['peraturan', 'tahun', 'title', 'tentang']));
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