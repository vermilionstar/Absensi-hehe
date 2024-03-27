<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <br>
    <title>Absensi Karyawan</title>
</head>

<body onload="window.print()">
    <center>
        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif">Laporan Absensi Karyawan Jaraya App</h2>
        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif">Absen Pulang</h2>
        <table id="example" class="table table-stripped table-hover table-bordered" border="1">
            <thead>
                <tr>
                    <th scope="col">NO/ID</th>
                    <th scope="col">Karyawan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jam Pulang</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($absenkeluar as $u)
                    <tr class="">
                        <td scope="row">{{ $u->id }}</td>
                        <td>{{ $u->id_karyawan }} - {{ $u->nama_admin }}</td>
                        <td>{{ $u->tanggal }}</td>
                        <td>{{ $u->jam_pulang }}</td>
                        <td>{{ $u->keterangan }}</td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </center>
    <div class="kotak" style="margin-left: 800px;">
        <P>Bandung...............</P>
        <br>
        <br>
        <p>Jaraya App</p>
    </div>

</body>

</html>
