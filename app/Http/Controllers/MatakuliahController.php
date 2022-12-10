<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtmk = matakuliah::all();
        return view('page.matakuliah', compact('dtmk'));
    }

    public function cetak_matakuliah()
    {
        $dtctkmk = matakuliah::get();
        return view('page.cetak_matakuliah', compact('dtctkmk'));
    }

    public function index2()
    {
        $dtmk_m = matakuliah::all();
        return view('page.matakuliah_m', compact('dtmk_m'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.create_matakuliah');
    }
    public function create2()
    {
        return view('page.create_matakuliah_m');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        matakuliah::create([
            'kode_mk' =>$request->kode_mk,
            'nama_mk' =>$request->nama_mk,
            'sks' =>$request->sks,
            'prodi_m' =>$request->prodi_m,
            'ruang' =>$request->ruang,
            'kelas' =>$request->kelas,
        ]);
        return redirect('matakuliah')->with('toast_success', 'Data Berhasil Disimpan!');
    }

    public function store2(Request $request)
    {
        matakuliah::create([
            'kode_mk' =>$request->kode_mk,
            'nama_mk' =>$request->nama_mk,
            'sks' =>$request->sks,
            'prodi_m' =>$request->prodi_m,
            'ruang' =>$request->ruang,
            'kelas' =>$request->kelas,
        ]);
        return redirect('matakuliah_m')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $upmk = matakuliah::findorfail($id);
        return view('page.edit_matakuliah', compact('upmk'));
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
        $upmk = matakuliah::findorfail($id);
        $upmk->update($request->all());
        return redirect('matakuliah')->with('toast_success', 'Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $upmk = matakuliah::findorfail($id);
        $upmk->delete();
        return back();
    }

    public function destroy2($id)
    {
        $upmk = matakuliah::findorfail($id);
        $upmk->delete();
        return back();
    }
}
