<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Karyawan;
// use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
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
        $jadwal = Jadwal::all();
        return view('home.jadwal.index', compact(['jadwal']));
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
        return view('home.jadwal.tambah', compact('karyawan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Jadwal::create([
                'id_karyawan'=> $request->id_karyawan,
                'tgl_kerja'=> $request->tgl_kerja,
                'masuk'=> $request->masuk,
                'pulang'=> $request->pulang,
                $request->except(['_token']),
            ]);return redirect('/jadwal');
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
        $jadwal = Jadwal::find($id);
        return view('home.jadwal.edit', compact(['jadwal'], 'karyawan'));
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
        $jadwal = Jadwal::find($id);
        $jadwal->update([
            'id_karyawan'=> $request->id_karyawan,
            'tgl_kerja'=> $request->tgl_kerja,
            'masuk'=> $request->masuk,
            'pulang'=> $request->pulang,
            $request->except(['_token']),
        ]);return redirect('/jadwal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect('/jadwal');
    }
}
