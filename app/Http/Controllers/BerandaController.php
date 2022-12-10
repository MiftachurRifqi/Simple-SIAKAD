<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('beranda');
        // return view('template.contactme');
    }

    public function index2(){
        return view('template.contactme');
    }

    // public function data_dosen(){
    //     return view('page.data_mahasiswa');
    // }

 
    // // ------------interface Dosen------------
    // public function matakuliah(){
    //     return view('page.matakuliah');
    // }
    
    // public function nilai(){
    //     return view('page.nilai');
    // }

    // public function jadwal(){
    //     return view('page.jadwal');
    // }

    // // -------interface khusus mahasiswa---------
    // public function matakuliah_m(){
    //     return view('page.matakuliah_m');
    // }

    // public function nilai_m(){
    //     return view('page.nilai_m');
    // }

    // public function jadwal_m(){
    //     return view('page.jadwal_m');
    // }




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
