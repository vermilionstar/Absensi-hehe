@extends('layouts.master')
@section('title', 'User')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h3>Halaman Absen</h3>
                                </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-stripped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO/ID</th>
                                                <th scope="col">Nama Karyawan</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Jam Masuk</th>
                                                <th scope="col">Keterangan</th>
                                                @if (auth()->user()->can('user_index'))
                                                    <th scope="col">Aksi</th>
                                                @else
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($absenmasuk as $u)
                                                <tr class="">
                                                    <td scope="row">{{ $u->id }}</td>
                                                    <td>{{ $u->id_karyawan }} - {{ $u->nama }}</td>
                                                    <td>{{ $u->tanggal }}</td>
                                                    <td>{{ $u->jam_masuk }}</td>
                                                    <td>{{ $u->keterangan }}</td>
                                                    @if (auth()->user()->can('user_index'))
                                                        <td>
                                                            <a href="/absenmasuk/{{ $u->id }}/hapus"
                                                                class="btn btn-outline-danger"
                                                                onclick="return confirm('Apakah Anda Yakin Ingin Mengahpus ini?')">Delete</a>
                                                        </td>
                                                    @else
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table><br>
                                    <a href="/dashboard" type="reset" class="btn btn-outline-secondary">kembali</a>
                                    @if (auth()->user()->can('user_index'))
                                    <a href="/absenmasuk/cetak" class="btn btn-outline-success" target="_blank"><span
                                            class="fa fa-print">cetak</span></a>
                                            @else
                                            @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        document.getElementById('absenButton').addEventListener('click', function() {
            document.getElementById('absenForm').style.display = 'block';
        });
    </script>
@endsection
