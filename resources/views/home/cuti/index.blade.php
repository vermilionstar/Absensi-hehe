@extends('layouts.master')
@section('title', 'Cuti')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h3>Data Cuti</h3>
                                <a href="/cuti/tambah" class="btn btn-primary text-dark">Tambah Data</a>
                                </center>
                                {{-- </div>
                        <div class="card-body bg-gradient-secondary"> --}}
                                <div class="table-responsive">
                                    <table class="table text-white">
                                        <thead>
                                            <tr align="center">
                                                <th>ID</th>
                                                <th>Id Karyawan</th>
                                                <th>Tanggal Mulai</th>
                                                <th>Tanggal Selesai</th>
                                                <th>Alasan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cuti as $c)
                                                <tr align="center">
                                                    <td>{{ $c->id }}</td>
                                                    <td>{{ $c->karyawan->jabatan}} - {{ $c->karyawan->nama}}</td>
                                                    <td>{{ $c->tanggal_mulai }}</td>
                                                    <td>{{ $c->tanggal_mulai }}</td>
                                                    <td>{{ $c->alasan }}</td>
                                                    <td>
                                                        <a href="/cuti/{{ $c->id }}/edit"
                                                            class="btn btn-outline-warning">Edit</a>
                                                        <a href="/cuti/{{ $c->id }}/delete"
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
