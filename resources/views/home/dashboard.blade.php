@extends('layouts.master')
@section('title', 'Halaman Dashboard')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->
        @if (auth()->user()->can('cekout'))
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-body">
                                {{-- button harus checkin ketika belum ada data di table absen --}}

                                {{-- button harus checkout ketika data sudah ada di table absen --}}
                                @if ($SudahAbsen)
                                    <center>
                                        <form action="{{ route('absen.keluar') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <input type="hidden" class="form-control" name="id_karyawan"
                                                    value = "{{ Auth()->user()->id }}" />
                                            </div>
                                            @if ($SudahPulang)
                                                <button type="submit" class="btn btn-danger" disabled>
                                                    Anda Sudah Absen Hari ini
                                                </button>
                                            @else
                                                <button type="submit" class="btn btn-warning" id="checkoutButton" disabled>
                                                    Checkout
                                                </button>
                                            @endif
                                        </form>
                                    </center>
                                @else
                                    <center>
                                        <form action="{{ route('absen.masuk') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <input type="hidden" class="form-control" name="id_karyawan"
                                                    value = "{{ Auth()->user()->id }}" />

                                            </div>

                                            <button type="submit" class="btn btn-info">
                                                Checkin
                                            </button>
                                        </form>
                                    </center>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <section class="content">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Jumlah Karyawan</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h2 class="mb-0">{{ $jumlah_karyawan }}</h2>
                                                {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
                                            </div>
                                            {{-- <h6 class="text-muted font-weight-normal">11.38% Since last month</h6> --}}
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <a href="/karyawan">
                                                <i class="icon-lg mdi mdi-account text-primary ms-auto"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Jumlah Karyawan Cuti</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h2 class="mb-0">{{ $jumlah_cuti }}</h2>
                                                {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p> --}}
                                            </div>
                                            {{-- <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6> --}}
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <a href="/cuti">
                                                <i class="icon-lg mdi mdi-account-off text-danger ms-auto"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Karyawan yg Sudah Absen</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h2 class="mb-0">{{ $jumlah_absenmasuk }}</h2>
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
                    </div>

            </section>



            {{-- <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Area Chart</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="chart">
        <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
      </div>
    </div>
    <!-- /.card-body -->
  </div> --}}

            <section class="content">
                <div class="row">
                    <center>
                        <a href=""></a>
                    </center>
                </div>
            </section>
            {{-- <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h3>Jadwal</h3>
                        </center>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-stripped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">NO/ID</th>
                                        <th scope="col">Karyawan</th>
                                        <th scope="col">Jam Masuk</th>
                                        <th scope="col">Jam Pulang</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Catatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($laporan as $u)
                                    <tr class="">
                                        <td scope="row">{{$u->id}}</td>
                                        <td>{{$u->karyawan->nama}}</td>
                                        <td>{{$u->absenmasuk->jam_masuk}}</td>
                                        <td>{{$u->absenmasuk->jam_keluar}}</td>
                                        <td>{{$u->tanggal}}</td>
                                        <td>{{$u->catatan}}</td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

            <script src="{{ asset('/assets/pluginss/jquery/jquery.min.js') }}"></script>
            <!-- Bootstrap 4 -->
            <script src="{{ asset('/assets/pluginss/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <!-- ChartJS -->
            <script src="{{ asset('/assets/pluginss/chart.js') }}/Chart.min.js')}}"></script>
            <!-- AdminLTE App -->
            <script src="{{ asset('/assets/dist/js/adminlte.min.js') }}"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="{{ asset('/assets/dist/js/demo.js') }}"></script>
            <!-- Page specific script -->

    </div>
    @endif
@endsection
