<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuti;
use App\Models\Karyawan;
// use Illuminate\Support\Facades\Auth;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(Auth()->User()->level !='admin'){
        //     Auth::logout();
        //     return redirect('/login')->with('error','Anda Tidak Memiliki Hak Akses, Silahkan Login Kembali');
        // }else{
        $cuti = Cuti::all();
        return view('home.cuti.index', compact(['cuti']));
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan = Karyawan::all();
        return view('home.cuti.tambah', compact(['karyawan']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cuti::create([
            'nama_karyawan'=> $request->nama_karyawan,
            'tanggal_mulai'=> $request->tanggal_mulai,
            'tanggal_selesai'=> $request->tanggal_selesai,
            'alasan'=> $request->alasan,
            $request->except(['_token']),
        ]);
        return redirect('/cuti');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Karyawan::all();
        $cuti = Cuti::find($id);
        return view('home.cuti.edit', compact(['cuti'], 'karyawan'));
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
        $cuti = Cuti::find($id);
        $cuti->update([
            'nama_karyawan'=> $request->nama_karyawan,
            'tanggal_mulai'=> $request->tanggal_mulai,
            'tanggal_selesai'=> $request->tanggal_selesai,
            'alasan'=> $request->alasan,
        $request->except(['_token']),
    ]);
    return redirect('/cuti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuti = Cuti::find($id);
        $cuti->delete();
        return redirect('/cuti');
    }
}
