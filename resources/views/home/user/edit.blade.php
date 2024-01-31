@extends('layouts.master')
@section('title','Halaman Edit Data User')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data User</h4>
                        </div>
                        <div class="card-body">
                            <form action="/user/{{$user->id}}/update" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" value="{{$user->nama_admin}}" name="nama_admin" placeholder="Masukan Untuk Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" value="{{$user->username}}" name="username" placeholder="Masukan Untuk Username" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" value="{{$user->password}}" name="password" placeholder="Masukan Untuk Password" required>
                            </div>
                            <div class="form-group">
                                <label for="">Level</label>
                                <select name="level" class="form-control">
                                    <option value="Admin">Admin</option>
                                    <option value="Super Admin">Super Admin</option>
                                    <option value="Ultimate Admin">Ultimate Admin</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/user" class="btn btn-secondary">Cancel</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection