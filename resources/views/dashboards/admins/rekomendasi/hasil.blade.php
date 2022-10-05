@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Hasil')

@section('content')
<body>
    <div class="card">
    <div class="card-body p-5">
    <center><h3>Hasil Rekomendasi Smartphone</h3></center>
    <hr>
    <h6>Matrix Smartphone</h6>
    <hr>
    <table class="table table-hover table-striped table-bordered ">
        <thead>
            <tr>
                <tr>
                    <th><center>Nilai Preferensi tertinggi</center></th>
                    <th><center>Nilai</center></th>
					<th><center>Alternatif HP terpilih</center></th>
                </tr>
            </tr>
        </thead>
    </table>


</body>
</html>
@endsection
