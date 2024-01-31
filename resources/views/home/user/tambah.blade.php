@extends('layouts.master')
@section('title','Halaman Tambah Data User')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Data User</h4>
                        </div>
                        <div class="card-body">
                            <form action="/user/simpan" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control @error('nama_admin') is-invalid @enderror" value="{{old('nama_admin')}}" name="nama_admin" placeholder="Masukan Untuk Nama" required>
                                @error('nama_admin')
                                <div class="invalidate-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{old('nama_admin')}}" name="username" placeholder="Masukan Untuk Username" required>
                                @error('username')
                                <div class="invalidate-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{old('nama_admin')}}" name="password" placeholder="Masukan Untuk Password" required>
                                @error('password')
                                <div class="invalidate-feedback">
                                    {{$message}}
                                </div>
                                @enderror
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
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection