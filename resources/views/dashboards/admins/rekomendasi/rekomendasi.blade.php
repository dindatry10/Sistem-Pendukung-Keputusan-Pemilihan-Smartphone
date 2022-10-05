@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Rekomendasi')

@section('content')
    
<body>
    <div class="card">
    <div class="card-body p-5">
    <div class="p-3">
    <center><h5>Masukkan Bobot</h5></center>
    <hr>
    <form action="{{ route('admin.hasil')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-group mb-3">
          <label class="form-label">Kriteria Harga</label>
          <select class="form-control" id="harga" name="harga">
            <option value = "" disabled selected style="color: #306283;"><i>Kriteria Harga</i></option>
            <option value = "5">< Rp. 1.000.000</option>
            <option value = "4">1.000.000 - 3.000.000</option>
            <option value = "3">3.000.000 - 4.000.000</option>
            <option value = "2">4.000.000 - 5.000.000</option>
            <option value = "1">> 5.000.000</option>
          </select>
        </div>
        <div class="form-group mb-3">
          <label class="form-label">RAM</label>
          <select class="form-control" id="ram" name="ram">
            <option value = "" disabled selected style="color: #306283;"><i>Kriteria RAM</i></option>
            <option value = "1">1 Gb</option>
						<option value = "2">2 Gb</option>
						<option value = "3">3 Gb</option>
						<option value = "4">4 Gb</option>
						<option value = "6">6 Gb</option> 
          </select>
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Memori</label>
          <select class="form-control" id="memori" name="memori">
            <option value = "" disabled selected style="color: #306283;"><i>Kriteria Memori</i></option>
            <option value = "4">4 Gb</option>
						<option value = "8">8 Gb</option>
						<option value = "16">16 Gb</option>
						<option value = "32">32 Gb</option>
						<option value = "64">64 Gb</option>
          </select>
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Processor</label>
          <select class="form-control" id="processor" name="processor">
            <option value = "" disabled selected style="color: #306283;"><i>Kriteria Processor</i></option>
            <option value = "Dualcore">Dualcore</option>
						<option value = "Quadcore">Quadcore</option>
						<option value = "Octacore">Octacore</option>
          </select>
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Kamera</label>
          <select class="form-control" id="kamera" name="kamera">
            <option value = "" disabled selected style="color: #306283;"><i>Kriteria Kamera</i></option>
            <option value = "8">8 Mp</option>
						<option value = "13">13 Mp</option>
						<option value = "16">16 Mp</option>
          </select>
        </div>
        <a href="{{ route('admin.hasil')}}" type="submit" class="btn btn-primary" style="margin-bottom:20px">Hitung</a>
      </form>
    
    </div>
</body>
@endsection