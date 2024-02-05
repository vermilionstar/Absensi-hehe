@extends('layouts.master')
@section('title', 'Karyawan')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header ">
                                <h2>Data Karyawan</h2>
                                <a href="/karyawan/tambah" class="btn btn-primary text-dark">Tambah Data</a>
                                {{-- </div>
                        <div class="card-body bg-gradient-secondary"> --}}
                                <div class="table-responsive">
                                    <table class="table text-white">
                                        <thead>
                                            <tr align="center">
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Departemen</th>
                                                <th>No Telepon</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($karyawan as $k)
                                                <tr align="center">
                                                    <td>{{ $k->id }}</td>
                                                    <td>{{ $k->nama}}</td>
                                                    <td>{{ $k->jabatan }}</td>
                                                    <td>{{ $k->departemen }}</td>
                                                    <td>{{ $k->notlp }}</td>
                                                    <td>{{ $k->alamat }}</td>
                                                    <td>
                                                        <a href="/karyawan/{{ $k->id }}/edit"
                                                            class="btn btn-outline-warning">Edit</a>
                                                        <a href="/karyawan/{{ $k->id }}/delete"
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
