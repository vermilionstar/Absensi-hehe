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
                            <div class="card-header bg-white">
                                <h2>Data Laporan Kehadiran</h2>
                                <a href="/laporan/tambah" class="btn btn-primary text-dark">Tambah Data</a>
                                {{-- </div>
                        <div class="card-body bg-gradient-secondary"> --}}
                                <div class="table-responsive">
                                    <table class="table text-dark">
                                        <thead>
                                            <tr align="center">
                                                <th>ID</th>
                                                <th>Id Karyawan</th>
                                                <th>ID User</th>
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
                                                    <td>{{ $l->karyawan->id}} - {{$l->karyawan->nama}}</td>
                                                    <td>{{ $l->user->id}} - {{$l->user->nama}}</td>
                                                    <td>{{ $l->tanggal }}</td>
                                                    <td>{{ $l->status }}</td>
                                                    <td>{{ $l->catatan }}</td>
                                                    <td>
                                                        <a href="/laporan/{{ $l->id }}/edit"
                                                            class="btn btn-outline-warning">Edit</a>
                                                        <a href="/laporan/{{ $l->id }}/delete"
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
