@extends('layouts.master')
@section('title', 'Absensi')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header ">
                                <h2>Data Absensi</h2>
                                <a href="/absen/tambah" class="btn btn-primary text-dark">Tambah Data</a>
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
                                                <th>Kehadiran</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $absen as $a)
                                                <tr align="center">
                                                    <td>{{ $a->id }}</td>
                                                    <td>{{ $a->karyawan->jabatan}} - {{ $a->karyawan->nama}}</td>
                                                    <td>{{ $a->tanggal }}</td>
                                                    <td>{{ $a->jam_masuk }}</td>
                                                    <td>{{ $a->jam_pulang }}</td>
                                                    <td>{{ $a->kehadiran }}</td>
                                                    <td>
                                                        <a href="/absen/{{ $a->id }}/edit"
                                                            class="btn btn-outline-warning">Edit</a>
                                                        <a href="/absen/{{ $a->id }}/hapus"
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
