@extends('layouts.master')
@section('title','Absensi')
@section('content')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Edit Data Absensi</h2>
                        </div>
                        <div class="card-body">
                            <form action="/absensi/{{$absensi->id}}/update" method="post">
                                @csrf
                              
                                <div class="form-group">
                                    <label for="" class="form-label">ID Karyawan</label>
                                    <select class="form-control" name="id_karyawan" id="id_karyawan">
                                        @foreach($karyawan as $k)
                                        <option value="{{$k->id}}">{{$k->id}} - {{$k->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Tanggal</label>
                                    <input type="date" name="tanggal" value="{{$absensi->tanggal}}" id="" class="form-control @error('tanggal') is-invalid @enderror" aria-describedby="helpId">
                                    @error('tanggal')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Jam Masuk</label>
                                    <input type="time" name="jam_masuk" value="{{$absensi->jam_masuk}}" id="" class="form-control @error('jam_masuk') is-invalid @enderror" aria-describedby="helpId">
                                    @error('jam_masuk')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Jam Pulang</label>
                                    <input type="time" name="jam_pulang" value="{{$absensi->jam_pulang}}" id="" class="form-control @error('jam_pulang') is-invalid @enderror" aria-describedby="helpId">
                                    @error('jam_pulang')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Kehadiran</label>
                                    <input type="text" name="kehadiran" value="{{$absensi->kehadiran}}" id="" class="form-control @error('kehadiran') is-invalid @enderror" aria-describedby="helpId">
                                    @error('kehadiran')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-info text-dark">Save</button>
                                <a href="/absensi" type="reset" class="btn btn-secondary text-dark">cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection