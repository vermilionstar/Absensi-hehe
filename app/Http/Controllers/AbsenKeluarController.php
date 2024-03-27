<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbsenKeluar;
use App\Models\AbsenMasuk;
use App\Models\Karyawan;
use Carbon\carbon;
// use Illuminate\Support\Facades\Auth;
Carbon::setTestNow(Carbon::now()->timezone('Asia/Jakarta'));
class AbsenKeluarController extends Controller
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
        $absenkeluar = AbsenKeluar::all();
        return view('home.absenkeluar.index', compact(['absenkeluar']));
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
        return view('home.absenkeluar.tambah', compact(['karyawan']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // AbsenKeluar::create($request->all());
        $now = Carbon::now();
        $pulang = Carbon::now();
        $id_karyawan = $request->id_karyawan;
        $SudahAbsen = AbsenMasuk::where('id_karyawan', $id_karyawan)
            ->whereDate('tanggal', $now)
            ->first();
        if ($SudahAbsen !== null) {
            AbsenKeluar::create([
                'id_karyawan' => $request->id_karyawan,
                'tanggal' => $now,
                'jam_pulang' => $pulang,
                'keterangan' => 'Sudah Absen',
            ]);
            $absenMasukId = $SudahAbsen ? $SudahAbsen->id : null;

            $absenmasuk = AbsenMasuk::find($absenMasukId);
            $absenmasuk->update([
                'jam_keluar' => $pulang,
                'keterangan' => 'Hadir',
            ]);
            return redirect('/absenkeluar')->with('error', 'Terima Kasih Sudah Absen.');
        } else {
            return redirect('/absenkeluar')->with('error', 'Maaf anda telah absen / terjadi gangguan.');
        }
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
        $absenkeluar = AbsenKeluar::find($id);
        return view('home.absenkeluar.edit', compact(['absenkeluar'], 'karyawan'));
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
        $absenkeluar = AbsenKeluar::find($id);
        $absenkeluar->update($request->all());
        return redirect('/absenkeluar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absenkeluar = AbsenKeluar::find($id);
        $absenkeluar->delete();
        return redirect('/absenkeluar');
    }

    public function cetak()
    {
        $absenkeluar = AbsenKeluar::all();
        return view('home.absenkeluar.cetak', compact('absenkeluar'));
    }
}
