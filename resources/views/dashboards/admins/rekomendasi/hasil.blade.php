@extends('dashboards.admins.rekomendasi.admin-dash-layout')
@section('title','Hasil')

@section('content')

<body>
    <div class="card">
    <div class="card-body p-5">
    <center><h5 class="text-primary">Hasil Perhitungan TOPSIS Rekomendasi Smartphone</h5></center>
    <hr>
    <center><h6 class="text-danger">Nilai Preferensi tertinggi</h6></center>
    <hr>
<div class="row justify-content-md-center h-100">
    <div class="col-sm-4 stretch-card grid-margin">
        <div class="card">
          <div class="card-body p-0">
            <img class="img-fluid w-100" src="{{asset('assets')}}/images/dashboard/sm2.jpg" alt="" />
          </div>
          <div class="card-body px-3 text-dark">
            <h5 class="font-weight-semibold"><center> <?= $hasil->nama_hp; ?> </center> </h5>
            <ul class="list-ticked">
                <li>Harga :  Rp.<?= $hasil->harga_hp; ?></li>
                <li>Ram : <?= $hasil->ram_hp; ?></li>
                <li>Memori : <?= $hasil->memori_hp; ?></li>
                <li>Processor : <?= $hasil->processor_hp; ?></li>
                <li>Kamera : <?= $hasil->kamera_hp; ?></li>
              </ul>
          </div>
        </div>
    </div>
</div>

    {{-- <table class="table table-hover table-striped table-bordered ">
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
            <tr class="table-primary">
                <td><center><?= $hasil->nama_hp; ?></center></td>
                <td><center><?= $hasil->harga_hp; ?></center></td>
                <td><center><?= $hasil->ram_hp; ?></center></td>
                <td><center><?= $hasil->memori_hp; ?></center></td>
                <td><center><?= $hasil->processor_hp; ?></center></td>
                <td><center><?= $hasil->kamera_hp; ?></center></td>
            </tr>
        </tbody>
    </table> --}}

</body>
@endsection
