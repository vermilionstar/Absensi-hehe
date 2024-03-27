<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbsenMasuk;
use App\Models\Karyawan;
use Carbon\carbon;
// use Illuminate\Support\Facades\Auth;
Carbon::setTestNow(Carbon::now()->timezone('Asia/Jakarta'));
class AbsenMasukController extends Controller
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
        $absenmasuk = AbsenMasuk::all();
        return view('home.absenmasuk.index', compact(['absenmasuk']));
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
        return view('home.absenmasuk.tambah', compact(['karyawan']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(auth()->user());
        // dd($request->all());
        $now = Carbon::now();
        $time = Carbon::now();
        $keluar = '00:00:00';
        AbsenMasuk::create([
            'id_karyawan' => $request->id_karyawan,
            'tanggal' => $now,
            'jam_masuk' => $time,
            'jam_keluar' => $keluar,
            'keterangan' => 'Sedang Bekerja',
        ]);
        return redirect('/absenmasuk')->with('success', 'Absen masuk berhasil.');
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
        $absenmasuk = AbsenMasuk::find($id);
        return view('home.absenmasuk.edit', compact(['absenmasuk'], 'karyawan'));
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
        $absenmasuk = AbsenMasuk::find($id);
        $absenmasuk->update($request->all());
        return redirect('/absenmasuk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absenmasuk = AbsenMasuk::find($id);
        $absenmasuk->delete();
        return redirect('/absenmasuk');
    }

    public function cetak()
    {
        $absenmasuk = AbsenMasuk::all();
        return view('home.absenmasuk.cetak', compact('absenmasuk'));
    }
}
