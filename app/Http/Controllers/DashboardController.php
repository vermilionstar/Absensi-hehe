<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;
use App\Models\Karyawan;
use App\Models\Cuti;
use App\Models\Laporan;

use Carbon\Carbon;

class DashboardController extends Controller
{
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware(['permission:liat-user'])->only('index');
    //     $this->middleware(['permission:tambah-user'])->only('create','store');
    //     $this->middleware(['permission:edit-user'])->only('show','update');
    //     $this->middleware(['permission:hapus-user'])->only('destroy');
    // }
  
    public function index()
    {
        // if(auth()->user()->hasPermissionTo('view_dashboard')){
        $jumlah_karyawan = Karyawan::count();
        $jumlah_cuti = Cuti::count();
        $jumlah_absen = Absen::count();
        $laporan = Laporan::Select()->orderBy('tanggall','desc')
                            ->limit(5)
                            ->get();
        $today = Carbon::today();
        $endDate = Carbon::today()->addDays(7);
        $total = Laporan::Select(Laporan::raw('SUM(status) as total_price'))
        ->whereBetween('tanggall', [$today, $endDate])->first();
        return view('home.dashboard', compact('laporan','jumlah_karyawan','jumlah_cuti','jumlah_absen'),['total' => $total]);   
        // }else{
        //     abort(403);
        // }
    }
}

