<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtdsn = dosen::all();
        return view('page.data_dosen', compact('dtdsn'));
    }

    public function cetak_dosen()
    {
        $dtctkdsn = dosen::get();
        return view('page.cetak_dosen', compact('dtctkdsn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.create_dosen');
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
        dosen::create([
            'nip_dsn' =>$request->nip_dsn,
            'nama_dsn' =>$request->nama_dsn,
            'alamat_dsn' =>$request->alamat_dsn,
            'email_dsn' =>$request->email_dsn,
        ]);
        return redirect('data_dosen')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $updsn = dosen::findorfail($id);
        return view('page.edit_dosen', compact('updsn'));
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
        $updsn = dosen::findorfail($id);
        $updsn->update($request->all());
        return redirect('data_dosen')->with('toast_success', 'Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $updsn = dosen::findorfail($id);
        $updsn->delete();
        return back();
    }
}
