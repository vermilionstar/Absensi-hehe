@extends('layouts.master')
@section('title','Laporan Kehadiran')
@section('content')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Edit Data Laporan Kehadiran</h2>
                        </div>
                        <div class="card-body">
                            <form action="/laporan/{{$laporan->id}}/update" method="post">
                                @csrf
                              
                                <div class="form-group">
                                    <label for="" class="form-label">Karyawan Hadir</label>
                                    <select class="form-control" name="id_karyawan" id="id_karyawan">
                                        @foreach($karyawan as $k)
                                        <option value="{{$k->id}}">{{$k->id}} - {{$k->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Admin</label>
                                    <select class="form-control" name="id_admin" id="id_admin">
                                        @foreach($user as $u)
                                        <option value="{{$u->id}}">{{$u->id}} - {{$u->nama_admin}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Karyawan Cuti</label>
                                    <select class="form-control" name="id_cuti" id="id_cuti">
                                        @foreach($cuti as $u)
                                        <option value="{{$u->id}}">{{$u->nama_karyawan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Tanggal</label>
                                    <input type="date" name="tanggall" value="{{$laporan->tanggall}}" id="" class="form-control @error('tanggall') is-invalid @enderror" aria-describedby="helpId">
                                    @error('tanggall')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Status</label>
                                    <input type="text" name="status" value="{{$laporan->status}}" id="" class="form-control @error('status') is-invalid @enderror" aria-describedby="helpId">
                                    @error('status')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Catatan</label>
                                    <input type="text" name="catatan" value="{{$laporan->catatan}}" id="" class="form-control @error('catatan') is-invalid @enderror" aria-describedby="helpId">
                                    @error('catatan')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-info text-dark">Save</button>
                                <a href="/laporan" type="reset" class="btn btn-secondary text-dark">cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection