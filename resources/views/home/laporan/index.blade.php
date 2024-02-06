@extends('layouts.master')
@section('title', 'Laporan Kehadiran')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header ">
                                <center>
                                    <h3>Data Laporan Kehadiran</h3>
                                    <a href="/laporan/tambah" class="btn btn-primary text-dark">Tambah Data</a>
                                </center>
                                {{-- </div>
                        <div class="card-body bg-gradient-secondary"> --}}
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
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($laporan as $l)
                                                <tr align="center">
                                                    <td>{{ $l->id }}</td>
                                                    <td>{{ $l->karyawan->jabatan}} - {{$l->karyawan->nama}}</td>
                                                    <td>{{ $l->user->level}} - {{$l->user->nama_admin}}</td>
                                                    <td>{{ $l->cuti->nama_karyawan}}</td>
                                                    <td>{{ $l->tanggall }}</td>
                                                    <td>{{ $l->status }}</td>
                                                    <td>{{ $l->catatan }}</td>
                                                    <td>
                                                        <a href="/laporan/{{ $l->id }}/edit"
                                                            class="btn btn-outline-warning">Edit</a>
                                                        <a href="/laporan/{{ $l->id }}/hapus"
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
