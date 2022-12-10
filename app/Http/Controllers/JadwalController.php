<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtjdwl = jadwal::all();
        return view('page.jadwal', compact('dtjdwl'));
    }

    public function cetak_jadwal()
    {
        $dtctkjdwl = jadwal::get();
        return view('page.cetak_jadwal', compact('dtctkjdwl'));
    }

    public function index2()
    {
        $dtjdwl_m = jadwal::all();
        return view('page.jadwal_m', compact('dtjdwl_m'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.create_jadwal');
    }
    public function create2()
    {
        return view('page.create_jadwal_m');
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
        jadwal::create([
            'matakuliah' =>$request->matakuliah,
            'dosen' =>$request->dosen,
            'ruangan' =>$request->ruangan,
            'waktu' =>$request->waktu,
        ]);
        return redirect('jadwal')->with('toast_success', 'Data Berhasil Disimpan!');
    }

    public function store2(Request $request)
    {
        // dd($request->all());
        jadwal::create([
            'matakuliah' =>$request->matakuliah,
            'dosen' =>$request->dosen,
            'ruangan' =>$request->ruangan,
            'waktu' =>$request->waktu,
        ]);
        return redirect('jadwal_m')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $upjdwl = jadwal::findorfail($id);
        return view('page.edit_jadwal', compact('upjdwl'));
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
        $upjdwl = jadwal::findorfail($id);
        $upjdwl->update($request->all());
        return redirect('jadwal')->with('toast_success', 'Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $upjdwl = jadwal::findorfail($id);
        $upjdwl->delete();
        return back();
    }

    public function destroy2($id)
    {
        $upjdwl_m = jadwal::findorfail($id);
        $upjdwl_m->delete();
        return back();
    }
}
