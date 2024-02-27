@extends('layouts.master')
@section('title','Halaman Dashboard')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body"> 
            <h5>Jumlah Karyawan</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class="mb-0">{{$jumlah_karyawan}}</h2>
                  {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
                </div>
                {{-- <h6 class="text-muted font-weight-normal">11.38% Since last month</h6> --}}
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-account text-primary ms-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      @if (auth()->user()->can('user_index'))
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Jumlah Karyawan Cuti</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class="mb-0">{{$jumlah_cuti}}</h2>
                  {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p> --}}
                </div>
                {{-- <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6> --}}
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-account-off text-danger ms-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      @else
      @endif
      @if (auth()->user()->can('user_index'))
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Karyawan yg Sudah Absen</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class="mb-0">{{$jumlah_absen}}</h2>
                  {{-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p> --}}
                </div>
                {{-- <h6 class="text-muted font-weight-normal">2.27% Since last month</h6> --}}
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-account-check text-success ms-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      @else
      @endif
    </div>
    @if (auth()->user()->can('user_index'))
    <!-- ORDER STATUS -->
    <div class="row ">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Jadwal</h4>
            <div class="table-responsive">
              <table class="table text-white">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Karyawan Hadir</th>
                        <th>Admin</th>
                        <th>Karyawan Cuti</th>
                        <th>Tanggal</th>
                        <th>status</th>
                        <th>catatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laporan as $l)
                        <tr align="center">
                            <td>{{ $l->id }}</td>
                            <td>{{$l->karyawan->nama}}</td>
                            <td>{{$l->user->nama_admin}}</td>
                            <td>{{ $l->cuti->nama_karyawan}}</td>
                            <td>{{ $l->tanggall }}</td>
                            <td>{{ $l->status }}</td>
                            <td>{{ $l->catatan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          </div>
        </div>
      </div>
    </div>
    {{-- //ABSEN --}}
    @else
    @endif
</div>
@endsection