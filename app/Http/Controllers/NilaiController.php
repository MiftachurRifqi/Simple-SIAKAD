<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtnl = nilai::all();
        return view('page.nilai', compact('dtnl'));
    }

    public function cetak_nilai()
    {
        $dtctknl = nilai::get();
        return view('page.cetak_nilai', compact('dtctknl'));
        return view('page.cetak_nilai_m', compact('dtctknl'));
    }

    public function index2()
    {
        $dtnl_m = nilai::all();
        return view('page.nilai_m', compact('dtnl_m'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.create_nilai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        nilai::create([
            'nama_mahs' =>$request->nama_mahs,
            'nim_mahs' =>$request->nim_mahs,
            'prodi_mahs' =>$request->prodi_mahs,
            'nilai_tugas' =>$request->nilai_tugas,
            'nilai_uts' =>$request->nilai_uts,
            'nilai_uas' =>$request->nilai_uas,
        ]);
        return redirect('nilai')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $upnl = nilai::findorfail($id);
        return view('page.edit_nilai', compact('upnl'));
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
        $upnl = nilai::findorfail($id);
        $upnl->update($request->all());
        return redirect('nilai')->with('toast_success', 'Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $upnl = nilai::findorfail($id);
        $upnl->delete();
        return back();
    }
}
