@extends('layouts.master')
@section('title','Jadwal')
@section('content')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Tambah Data Jadwal</h2>
                        </div>
                        <div class="card-body">
                            <form action="/jadwal/simpan" method="post">
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
                                    <input type="date" name="tgl_kerja" id="" class="form-control @error('tgl_kerja') is-invalid @enderror" placeholder="Masukan tanggal" value="{{old('tgl_kerja')}}" aria-describedby="helpId">
                                    @error('tgl_kerja')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Jam Masuk</label>
                                    <input type="time" name="masuk" id="" class="form-control @error('jam_msk') is-invalid @enderror" placeholder="Masukan Jam Masuk" value="{{old('jam_msk')}}" aria-describedby="helpId" >
                                    @error('jam_msk')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Jam Pulang</label>
                                    <input type="time" name="pulang" id="" class="form-control @error('jam_plg') is-invalid @enderror" placeholder="Masukan Jam Pulang" value="{{old('jam_plg')}}" aria-describedby="helpId">
                                    @error('jam_plg')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-info text-dark">Save</button>
                                <a href="/jadwal" type="reset" class="btn btn-secondary text-dark">cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection