@extends('layouts.master')
@section('title', 'User')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Data User</h2>
                                <a href="/user/tambah" class="btn btn-primary text-dark">Tambah Data</a>
                                {{-- </div>
                        <div class="card-body bg-gradient-secondary"> --}}
                                <div class="table-responsive">
                                    <table class="table text-white">
                                        <thead>
                                            <tr align="center">
                                                <th>ID</th>
                                                <th>Id Karyawan</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>email</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $u)
                                                <tr align="center">
                                                    <td>{{ $u->id }}</td>
                                                    <td>{{ $u->id_karyawan}}</td>
                                                    <td>{{ $u->nama_admin}}</td>
                                                    <td>{{ $u->username }}</td>
                                                    <td>{{ $u->email }}</td>
                                                   
                                                    <td>
                                                        <a href="/user/{{ $u->id }}/edit"
                                                            class="btn btn-outline-warning">Edit</a>
                                                        <a href="/user/{{ $u->id }}/hapus"
                                                            class="btn btn-outline-danger"
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Mengahpus ini?')">Delete</a>
                                                            <a href="/password/change"
                                                                class="btn btn-outline-primary"
                                                                >chance</a>
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
