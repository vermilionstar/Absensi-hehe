<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbsenMasuk;
use App\Models\AbsenKeluar;
use App\Models\Karyawan;
use App\Models\Cuti;


use Carbon\carbon;

Carbon::setTestNow(Carbon::now()->timezone('Asia/Jakarta'));
class DashboardController extends Controller
{

    public function index()
    {
        $now = Carbon::now();
        $id_karyawan = auth()->user()->id;
        $SudahAbsen = AbsenMasuk::where('id_karyawan', $id_karyawan)
            ->whereDate('tanggal', $now)
            ->exists();

        $SudahPulang = AbsenKeluar::where('id_karyawan', $id_karyawan)
            ->whereDate('tanggal', $now)
            ->exists();

        $jumlah_karyawan = Karyawan::count();
        $nama_karyawan = Karyawan::where('nama')->value('nama');
        $jumlah_cuti = Cuti::count();
        $jumlah_absenmasuk = AbsenMasuk::count();
        $jumlah_absenkeluar = AbsenKeluar::Select()->orderBy('tanggal', 'desc')
            ->limit(5)
            ->get();
        $today = Carbon::today();
        $endDate = Carbon::today()->addDays(7);
        $total = AbsenKeluar::Select(AbsenKeluar::raw('SUM(keterangan) as total_price'))
            ->whereBetween('tanggal', [$today, $endDate])->first();
        return view('home.dashboard', compact('SudahPulang', 'SudahAbsen', 'jumlah_absenkeluar', 'jumlah_karyawan', 'jumlah_cuti', 'jumlah_absenmasuk', 'nama_karyawan'), ['total' => $total]);
    }
}
