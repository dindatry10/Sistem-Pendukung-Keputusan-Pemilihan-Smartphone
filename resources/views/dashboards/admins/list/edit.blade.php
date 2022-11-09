@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Daftar Smartphone')

@section('content')

<body>
    <div class="card">
    <div class="card-body">
    <h3 class="text-center">Edit Data</h3>
    <div class="p-5">
    <form action="{{ route('list.update', ['id_hp' => $list->id_hp]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
        <label>Nama Handphone</label>
        <input name="nama" type="text" class="form-control" placeholder="Masukkan nama smartphone" value="{{ $list->nama_hp}}">
    </div>
    <div class="form-group mb-3">
        <label>Harga Handphone</label>
        <input name="harga" type="number" class="form-control" placeholder="Masukkan data harga smartphone" value="{{ $list->harga_hp}}">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">RAM Handphone</label>
        <select class="form-control" id="ram" name="ram">
            <option value = "1">1 Gb</option>
            <option value = "2">2 Gb</option>
            <option value = "3">3 Gb</option>
            <option value = "4">4 Gb</option>
            <option value = "6">6 Gb</option> 
            <script>
                document.getElementById('ram').value = "{{ $list->ram_hp}}";
            </script>
        </select>
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Memori Handphone</label>
        <select class="form-control" id="memori" name="memori">
            <option value = "4">4 Gb</option>
            <option value = "8">8 Gb</option>
            <option value = "16">16 Gb</option>  
            <option value = "32">32 Gb</option>
            <option value = "64">64 Gb</option>
            <script>
                document.getElementById('memori').value = "{{ $list->memori_hp}}";
            </script>
        </select>
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Processor Handphone</label>
        <select class="form-control" id="processor" name="processor">
            <option value = "Dualcore">Dualcore</option>
            <option value = "Quadcore">Quadcore</option>
            <option value = "Octacore">Octacore</option>
            <script>
                document.getElementById('processor').value = "{{ $list->processor_hp}}";
            </script>
        </select>
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Kamera Handphone</label>
        <select class="form-control" id="kamera" name="kamera">
        <option value = "8">8 Mp</option>
            <option value = "13">13 Mp</option>
            <option value = "16">16 Mp</option>
            <script>
                document.getElementById('kamera').value = "{{ $list->kamera_hp}}";
            </script>
        </select>
    </div>
    <div class="form-group mb-3">
        <label>Harga Angka</label>
        <input name="harga_angka" id="harga_angka" type="text" class="form-control" placeholder="Masukkan data angka harga smartphone" value="{{ $list->harga_angka}}" readonly>
    </div>
    <div class="form-group mb-3">
        <label>RAM Angka</label>
        <input name="ram_angka" id="ram_angka" type="text" class="form-control" placeholder="Masukkan data angka ram smartphone" value="{{ $list->ram_angka}}" readonly>
    </div>
    <div class="form-group mb-3">
        <label>Memori Angka</label>
        <input name="memori_angka" id="memori_angka" type="text" class="form-control" placeholder="Masukkan data angka memori smartphone" value="{{ $list->memori_angka}}" readonly>
    </div>
    <div class="form-group mb-3">
        <label>Processor Angka</label>
        <input name="processor_angka" id="processor_angka" type="text" class="form-control" placeholder="Masukkan data angka procesor smartphone" value="{{ $list->processor_angka}}" readonly>
    </div>
    <div class="form-group mb-3">
        <label>Kamera Angka</label>
        <input name="kamera_angka" id="kamera_angka" type="text" class="form-control" placeholder="Masukkan data angka kamera smartphone" value="{{ $list->kamera_angka}}" readonly>
    </div>

        <a href="/admin/list" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-success">Update</button>
        
    </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script>
        $('#harga').on('change', function(){
          let valueHarga = $('#harga').val();
      
          let harga;
          if(valueHarga < 1000000){
            harga = 5;
          }
          else if(valueHarga >= 1000000 && valueHarga <= 3000000){
            harga = 4;
          }
          else if(valueHarga > 3000000 && valueHarga <= 4000000){
            harga = 3;
          }
          else if(valueHarga > 4000000 && valueHarga <= 5000000){
            harga = 2;
          }
          else if(valueHarga > 5000000){
            harga = 1;
          }
          
          $('#harga_angka').val(harga);
        });
      
        $('#ram').on('change', function(){
          let valueRam = $('#ram').val();
      
          let ram;
          if(valueRam < 6 ){
            ram = valueRam;
          }
          else if(valueRam = 6){
            ram = 5;
          }
          $('#ram_angka').val(ram);
        });
      
        $('#memori').on('change', function(){
          let valueMemori = $('#memori').val();
      
          let memori;
          if(valueMemori == 4 ){
            memori = 1;
          }
          else if(valueMemori == 8){
            memori = 2;
          }
          else if(valueMemori == 16){
            memori = 3;
          }
          else if(valueMemori == 32){
            memori = 4;
          }
          else if(valueMemori == 64){
            memori = 5;
          }
          $('#memori_angka').val(memori);
        });
      
        $('#processor').on('change', function(){
          let valueProcessor = $('#processor').val();
      
          let processor;
          if(valueProcessor == "Dualcore"){
            processor = 1;
          }
          else if(valueProcessor == "Quadcore"){
            processor = 3;
          }
          else if(valueProcessor == "Octacore"){
            processor = 5;
          }
          $('#processor_angka').val(processor);
        });
      
        $('#kamera').on('change', function(){
          let valueKamera = $('#kamera').val();
      
          let kamera;
          if(valueKamera == 8){
            kamera = 1;
          }
          else if(valueKamera == 13){
            kamera = 3;
          }
          else if(valueKamera == 16){
            kamera = 5;
          }
          $('#kamera_angka').val(kamera);
        });
      
      </script>
</body>
@endsection