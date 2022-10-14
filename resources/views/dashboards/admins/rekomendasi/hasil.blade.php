@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Hasil')

@section('content')

<body>
    <div class="card">
    <div class="card-body p-5">
    <center><h3>Hasil Perhitungan TOPSIS Rekomendasi Smartphone</h3></center>
    <hr>
    <h6>Analisa Matrix Smartphone</h6>
    <hr>
    <table class="table table-hover table-striped table-bordered ">
        <thead>
            <tr>
                <tr>
                    <th scope="col"><center>Alternatif</center></th>
                    <th scope="col"><center>C1 (Cost)</center></th>
                    <th scope="col"><center>C2 (Benefit)</center></th>
                    <th scope="col"><center>C3 (Benefit)</center></th>
                    <th scope="col"><center>C4 (Benefit)</center></th>
                    <th scope="col"><center>C5 (Benefit)</center></th>
                </tr>
            </tr>
        </thead>
        <tbody>
        
        </tbody>
    </table>

    <hr>

    <h6>Analisa Matrix Normalisasi (R)</h6>
    <hr>
    <table class="table table-hover table-striped table-bordered ">
        <thead>
            <tr>
                <tr>
                    <th scope="col"><center>Alternatif</center></th>
                    <th scope="col"><center>C1 (Cost)</center></th>
                    <th scope="col"><center>C2 (Benefit)</center></th>
                    <th scope="col"><center>C3 (Benefit)</center></th>
                    <th scope="col"><center>C4 (Benefit)</center></th>
                    <th scope="col"><center>C5 (Benefit)</center></th>
                </tr>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <hr>

    <h6>Analisa Bobot (W)</h6>
    <hr>
    <table class="table table-hover table-striped table-bordered ">
        <thead>
            <tr>
                <tr>
                    <th scope="col"><center>Value Kriteria Harga</center></th>
                    <th scope="col"><center>Value Kriteria Ram</center></th>
                    <th scope="col"><center>Value Kriteria Memori</center></th>
                    <th scope="col"><center>Value Kriteria Processor</center></th>
                    <th scope="col"><center>Value Kriteria Kamera</center></th>
                </tr>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <hr>

    <h6>Analisa Matrix Normalisasi Terbobot (Y)</h6>
    <hr>
    <table class="table table-hover table-striped table-bordered ">
        <thead>
            <tr>
                <tr>
                    <th scope="col"><center>Alternatif</center></th>
                    <th scope="col"><center>C1 (Cost)</center></th>
                    <th scope="col"><center>C2 (Benefit)</center></th>
                    <th scope="col"><center>C3 (Benefit)</center></th>
                    <th scope="col"><center>C4 (Benefit)</center></th>
                    <th scope="col"><center>C5 (Benefit)</center></th>
                </tr>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <hr>

    <h6>Analisa Matrix Solusi ideal positif (A+) dan negatif (A-)</h6>
    <hr>
    <table class="table table-hover table-striped table-bordered ">
        <thead>
            <tr>
                <tr>
                    <th scope="col"><center>Y1 (Cost)</center></th>
                    <th scope="col"><center>Y2 (Benefit)</center></th>
                    <th scope="col"><center>Y3 (Benefit)</center></th>
                    <th scope="col"><center>Y4 (Benefit)</center></th>
                    <th scope="col"><center>Y5 (Benefit)</center></th>
                    
                </tr>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <hr>

    <h6>Jarak antara nilai terbobot setiap alternatif terhadap solusi ideal positif</h6>
    <hr>
    <table class="table table-hover table-striped table-bordered ">
        <thead>
            <tr>
                <tr>
                    <th scope="col"><center>D+</center></th>
                    <th scope="col"><center>D-</center></th>
                </tr>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <hr>

    <h6>Nilai Preferensi untuk Setiap alternatif (V)</h6>
    <hr>
    <table class="table table-hover table-striped table-bordered ">
        <thead>
            <tr>
                <tr>
                    <th scope="col"><center>Nilai Preferensi "V"</center></th>
                    <th scope="col"><center>Nilai</center></th>
                </tr>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <hr>

    <h6>Nilai Preferensi tertinggi</h6>
    <hr>
    <table class="table table-hover table-striped table-bordered ">
        <thead>
            <tr>
                <tr>
                    <th scope="col"><center>Nilai Preferensi tertinggi</center></th>
                    <th scope="col"><center>Analisa</center></th>
                    <th scope="col"><center>Alternatif HP terpilih</center></th>
                </tr>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</body>
@endsection
