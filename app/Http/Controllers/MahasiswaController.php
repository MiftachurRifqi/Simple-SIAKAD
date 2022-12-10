<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtmhs = mahasiswa::all();
        return view('page.data_mahasiswa', compact('dtmhs'));
    }

    public function cetak_mahasiswa()
    {
        $dtctkmhs = mahasiswa::get();
        return view('page.cetak_mahasiswa', compact('dtctkmhs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.create_mahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        mahasiswa::create([
            'nim_mhs' =>$request->nim_mhs,
            'nama_mhs' =>$request->nama_mhs,
            'fakultas_mhs' =>$request->fakultas_mhs,
            'prodi_mhs' =>$request->prodi_mhs,
            'alamat_mhs' =>$request->alamat_mhs,
            'email_mhs' =>$request->email_mhs,
        ]);
        return redirect('data_mahasiswa')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $upmhs = mahasiswa::findorfail($id);
        return view('page.edit_mahasiswa', compact('upmhs'));
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
        $upmhs = mahasiswa::findorfail($id);
        $upmhs->update($request->all());
        return redirect('data_mahasiswa')->with('toast_success', 'Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $upmhs = mahasiswa::findorfail($id);
        $upmhs->delete();
        return back();
    }
}
