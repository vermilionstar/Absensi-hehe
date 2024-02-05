@extends('layouts.master')
@section('title','Karyawan')
@section('content')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Edit Data Karyawan</h2>
                        </div>
                        <div class="card-body">
                            <form action="/karyawan/{{$karyawan->id}}/update" method="post">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="text" name="nama" value="{{$karyawan->nama}}" id="" class="form-control @error('nama') is-invalid @enderror"  aria-describedby="helpId">
                                    @error('nama')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Jabatan</label>
                                    <input type="text" name="jabatan" value="{{$karyawan->jabatan}}" id="" class="form-control @error('jabatan') is-invalid @enderror" aria-describedby="helpId">
                                    @error('jabatan')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Departemen</label>
                                    <input type="text" name="departemen" value="{{$karyawan->departemen}}" id="" class="form-control @error('departemen') is-invalid @enderror" aria-describedby="helpId">
                                    @error('departemen')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">No Telepon</label>
                                    <input type="number" name="notlp" value="{{$karyawan->notlp}}" id="" class="form-control @error('notlp') is-invalid @enderror" aria-describedby="helpId">
                                    @error('notlp')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" value="{{$karyawan->alamat}}" id="" class="form-control @error('alamat') is-invalid @enderror" aria-describedby="helpId">
                                    @error('alamat')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                               
                                <button type="submit" class="btn btn-info text-dark">Save</button>
                                <a href="/karyawan" type="reset" class="btn btn-secondary text-dark">cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection