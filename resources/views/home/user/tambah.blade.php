@extends('layouts.master')
@section('title','User')
@section('content')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Tambah Data User</h2>
                        </div>
                        <div class="card-body">
                            <form action="/user/simpan" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="text" name="nama_admin" id="" class="form-control @error('nama_admin') is-invalid @enderror" placeholder="Masukan Nama" value="{{old('nama_admin')}}">
                                    @error('nama_admin')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Username</label>
                                    <input type="text" name="username" id="" class="form-control @error('username') is-invalid @enderror" placeholder="Masukan Username" value="{{old('username')}}">
                                    @error('username')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" name="password" id="" class="form-control @error('password') is-invalid @enderror" placeholder="Masukan Password" value="{{old('password')}}">
                                    @error('password')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Level</label>
                                    <select name="level" class="form-control" value="{{old('level')}}" id="">
                                        <option value="Admin">Admin</option>
                                        <option value="Super Admin">Super Admin</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-info text-dark">Save</button>
                                <a href="/user" type="reset" class="btn btn-secondary text-dark">cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection