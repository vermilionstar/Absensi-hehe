@extends('layouts.master')
@section('title', 'Jadwal Kerja')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header ">
                                <h2>Data Jadwal Kerja</h2>
                                <a href="/jadwal/tambah" class="btn btn-primary text-dark">Tambah Data</a>
                                {{-- </div>
                        <div class="card-body bg-gradient-secondary"> --}}
                                <div class="table-responsive">
                                    <table class="table text-white">
                                        <thead>
                                            <tr align="center">
                                                <th>ID</th>
                                                <th>Id Karyawan</th>
                                                <th>Tanggal</th>
                                                <th>Jam Masuk</th>
                                                <th>Jam Pulang</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jadwal as $j)
                                                <tr align="center">
                                                    <td>{{ $j->id }}</td>
                                                    <td>{{ $j->karyawan->id}} - {{$j->karyawan->nama}}</td>
                                                    <td>{{ $j->tgl_kerja }}</td>
                                                    <td>{{ $j->jam_msk }}</td>
                                                    <td>{{ $j->jam_plg }}</td>
                                                    <td>
                                                        <a href="/jadwal/{{ $j->id }}/edit"
                                                            class="btn btn-outline-warning">Edit</a>
                                                        <a href="/jadwal/{{ $j->id }}/hapus"
                                                            class="btn btn-outline-danger"
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Mengahpus ini?')">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
