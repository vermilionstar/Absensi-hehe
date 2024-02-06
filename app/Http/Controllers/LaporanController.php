<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Karyawan;
use App\Models\User;
use App\Models\Cuti;
// use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
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
        $laporan = Laporan::all();
        return view('home.laporan.index', compact(['laporan']));
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
        $user = User::all();
        $cuti = Cuti::all();
        return view('home.laporan.tambah', compact(['karyawan'], 'user','cuti'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Laporan::create([
            'id_karyawan'=> $request->id_karyawan,
            'id_admin'=> $request->id_admin,
            'id_cuti'=> $request->id_cuti,
            'tanggall'=> $request->tanggall,
            'status'=> $request->status,
            'catatan'=> $request->catatan,
            $request->except(['_token']),
        ]);
        return redirect('/laporan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuti = Cuti::all();
        $user = User::all();
        $karyawan = Karyawan::all();
        $laporan = Laporan::find($id);
        return view('home.laporan.edit', compact(['laporan'], 'karyawan','user','cuti'));
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
        $laporan = Laporan::find($id);
        $laporan->update([
            'id_karyawan'=> $request->id_karyawan,
            'id_admin'=> $request->id_admin,
            'id_cuti'=> $request->id_cuti,
            'tanggall'=> $request->tanggall,
            'status'=> $request->status,
            'catatan'=> $request->catatan,
            $request->except(['_token']),
        ]);
        return redirect('/laporan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laporan = Laporan::find($id);
        $laporan->delete();
        return redirect('/laporan');
    }
}
