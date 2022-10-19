@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Hasil')

@section('content')

<body>
    <div class="card">
    <div class="card-body p-5">
    <center><h3>Hasil Perhitungan TOPSIS Rekomendasi Smartphone</h3></center>
    <hr>
    <h6>Nilai Preferensi tertinggi</h6>
    <hr>
    <table class="table table-hover table-striped table-bordered ">
        <thead>
            <tr>
                <tr>
                    <th scope="col"><center>Nama Handphone</center></th>
                    <th scope="col"><center>Harga</center></th>
                    <th scope="col"><center>Ram Hp</center></th>
                    <th scope="col"><center>Memori Hp</center></th>
                    <th scope="col"><center>Processor Hp</center></th>
                    <th scope="col"><center>Kamera Hp</center></th>
                </tr>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $hasil->nama_hp; ?></td>
                <td><?= $hasil->harga_hp; ?></td>
                <td><?= $hasil->ram_hp; ?></td>
                <td><?= $hasil->memori_hp; ?></td>
                <td><?= $hasil->processor_hp; ?></td>
                <td><?= $hasil->kamera_hp; ?></td>
            </tr>
        </tbody>
    </table>
</body>
@endsection
