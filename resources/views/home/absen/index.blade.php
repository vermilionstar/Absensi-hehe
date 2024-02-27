@extends('layouts.master')
@section('title', 'Karyawan Absensi')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header ">
                                <h2>Data Absensi</h2>
                                <a href="/absen/tambah" class="btn btn-primary text-dark">Tambah Data</a>
                                {{-- </div>
                        <div class="card-body bg-gradient-secondary"> --}}
                                <div class="table-responsive">
                                    <table class="table text-white">
                                        <thead>
                                            <tr align="center">
                                                <th>ID</th>
                                                <th>Id Karyawan</th>
                                                <th>Tanggal</th>
                                                <th>Jam Masuk</th>
                                                <th>Jam Pulang</th>
                                                <th>Kehadiran</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $absen as $a)
                                                <tr align="center">
                                                    <td>{{ $a->id }}</td>
                                                    <td>{{ $a->karyawan->id}} - {{ $a->karyawan->nama}}</td>
                                                    <td>{{ $a->tanggal }}</td>
                                                    <td>{{ $a->jam_masuk }}</td>
                                                    <td>{{ $a->jam_pulang }}</td>
                                                    <td>{{ $a->kehadiran }}</td>
                                                    <td>
                                                        <a href="/absen/{{ $a->id }}/edit"
                                                            class="btn btn-outline-warning">Edit</a>
                                                        <a href="/absen/{{ $a->id }}/hapus"
                                                            class="btn btn-outline-danger"
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Mengahpus ini?')">Delete</a>
                                                    </td>
                                                  
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Absen
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/absen/simpan" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Id Karyawan</label>
                            <select name="id_karyawan" class="form-control" id="id_karyawan">
                                @foreach($absen as $a)
                                        <option value="{{$a->id}}">{{$a->karyawan->id}} - {{$a->karyawan->nama}}</option>
                                        @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            {{-- untuk tanggal --}}
                            <label for="" class="form-label" value="{{ old('tanggal_acc') }}">Tanggal</label>
                            <input type="date" class="form-control "
                                name="tanggal" value="" autofocus/>
                        </div>

                        <div class="mb-3">
                           Jam Masuk
                            <input type="time" class="form-control" name="jam_masuk" value="" />
                        </div>
                        <div class="mb-3">
                            Jam Pulang
                             <input type="time" class="form-control" name="jam_pulang" value="" />
                         </div>
                         <div class="mb-3">
                            Kehadiran
                             <input type="text" class="form-control" name="kehadiran" value="" />
                         </div>


                       




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const myModal = new bootstrap.Modal(
            document.getElementById("modalId"),
            options,
        );
    </script>
    <script>
        function prepareModal(idPengajuan, Nis) {
            // Mengisi nilai ID PENGAJUAN pada formulir modal
            document.querySelector('input[name="id_pengajuan"]').value = idPengajuan;
            document.querySelector('input[name="nis"]').value = Nis;
            myModal.show();
        }
    </script>
@endsection
