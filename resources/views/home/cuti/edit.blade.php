@extends('layouts.master')
@section('title','Cuti')
@section('content')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Edit Data Cuti</h2>
                        </div>
                        <div class="card-body">
                            <form action="/cuti/{{$cuti->id}}/update" method="post">
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
                                    <label for="" class="form-label">Tanggal Mulai</label>
                                    <input type="date" name="tanggal_mulai" value="{{$cuti->tanggal_mulai}}" id="" class="form-control @error('tanggal_mulai') is-invalid @enderror" aria-describedby="helpId">
                                    @error('tanggal_mulai')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Tanggal Selesai</label>
                                    <input type="date" name="tanggal_selesai" value="{{$cuti->tanggal_selesai}}" id="" class="form-control @error('tanggal_selesai') is-invalid @enderror" aria-describedby="helpId">
                                    @error('tanggal_selesai')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Alasan</label>
                                    <input type="text" name="alasan" value="{{$cuti->alasan}}" id="" class="form-control @error('alasan') is-invalid @enderror" aria-describedby="helpId">
                                    @error('alasan')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                               
                                <button type="submit" class="btn btn-info text-dark">Save</button>
                                <a href="/cuti" type="reset" class="btn btn-secondary text-dark">cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection