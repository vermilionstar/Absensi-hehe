@extends('layouts.master')
@section('title', 'Cuti')
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
                                <form action="/cuti/simpan" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="" class="form-label">Nama Karyawan</label>
                                        <input type="text" name="nama_karyawan" id=""
                                            class="form-control @error('nama_karyawan') is-invalid @enderror"
                                            value="{{ old('nama_karyawan') }}" placeholder="Masukan Nama Karyawan">
                                        @error('nama_karyawan')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Tanggal Mulai</label>
                                        <input type="date" name="tanggal_mulai" id=""
                                            class="form-control @error('tanggal_mulai') is-invalid @enderror"
                                            value="{{ old('tanggal_mulai') }}" placeholder="Masukan Tanggal Mulai">
                                        @error('tanggal_mulai')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Tanggal Selesai</label>
                                        <input type="date" name="tanggal_selesai" id=""
                                            class="form-control @error('tanggal_selesai') is-invalid @enderror"
                                            value="{{ old('tanggal_selesai') }}" placeholder="Masukan Tanggal Selesai">
                                        @error('tanggal_selesai')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Jenis Cuti</label>
                                        <input type="text" name="alasan" id=""
                                            class="form-control @error('alasan') is-invalid @enderror"
                                            value="{{ old('alasan') }}" placeholder="Masukan Jenis Cuti">
                                        @error('alasan')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-outline-info">Save</button>
                                    <a href="/cuti" type="reset" class="btn btn-outline-secondary">cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
