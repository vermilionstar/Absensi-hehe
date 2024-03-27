@extends('layouts.master')
@section('title','Halaman Edit Data')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <center>
                                <h4>Halaman Edit Data</h4>
                            </center>
                        </div>
                        <div class="card-body">
                            <form action="/absenkeluar/{{$absenkeluar->id}}/update" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Nama Karyawan</label>
                                <select class="form-control" name="id_karyawan" id="id_karyawan">
                                    @foreach($karyawan as $k)
                                    <option value="{{$k->id}}">{{$k->id}} - {{$k->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" value="{{$absenkeluar->tanggal}}" class="form-control" placeholder="Masukan Username" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Jam Pulang</label>
                                <input type="time" name="jam_pulang" value="{{$absenkeluar->jam_pulang}}" class="form-control" placeholder="Masukan Password" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Keterangan</label>
                                <input type="text" name="keterangan" value="{{$absenkeluar->keterangan}}" class="form-control" placeholder="Masukan Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/absenkeluar" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection