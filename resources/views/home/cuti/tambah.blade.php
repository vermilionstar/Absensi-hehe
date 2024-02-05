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
                            <h2>Tambah Data Cuti</h2>
                        </div>
                        <div class="card-body">
                            <form action="/cuti/save" method="post">
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
                                    <input type="date" name="tanggal_mulai" id="" class="form-control @error('tanggal_mulai') is-invalid @enderror" placeholder="Masukan Tanggal Mulai" value="{{old('tanggal_mulai')}}" aria-describedby="helpId">
                                    @error('tanggal_mulai')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Tanggal Selesai</label>
                                    <input type="date" name="tanggal_selesai" id="" class="form-control @error('tanggal_selesai') is-invalid @enderror" placeholder="Masukan Tanggal Selesai" value="{{old('tanggal_selesai')}}" aria-describedby="helpId" >
                                    @error('tanggal_selesai')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Jenis Cuti</label>
                                    <input type="text" name="jenis_cuti" id="" class="form-control @error('jenis_cuti') is-invalid @enderror" placeholder="Masukan Jenis Cuti" value="{{old('jenis_cuti')}}" aria-describedby="helpId">
                                    @error('jenis_cuti')
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