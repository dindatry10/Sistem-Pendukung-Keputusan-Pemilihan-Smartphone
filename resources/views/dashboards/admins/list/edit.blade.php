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
        <input name="harga_angka" type="text" class="form-control" placeholder="Masukkan data angka harga smartphone" value="{{ $list->harga_angka}}">
    </div>
    <div class="form-group mb-3">
        <label>RAM Angka</label>
        <input name="ram_angka" type="text" class="form-control" placeholder="Masukkan data angka ram smartphone" value="{{ $list->ram_angka}}">
    </div>
    <div class="form-group mb-3">
        <label>Memori Angka</label>
        <input name="memori_angka" type="text" class="form-control" placeholder="Masukkan data angka memori smartphone" value="{{ $list->memori_angka}}">
    </div>
    <div class="form-group mb-3">
        <label>Processor Angka</label>
        <input name="processor_angka" type="text" class="form-control" placeholder="Masukkan data angka procesor smartphone" value="{{ $list->processor_angka}}">
    </div>
    <div class="form-group mb-3">
        <label>Kamera Angka</label>
        <input name="kamera_angka" type="text" class="form-control" placeholder="Masukkan data angka kamera smartphone" value="{{ $list->kamera_angka}}">
    </div>

        <a href="/admin/list" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-success">Update</button>
        
    </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
@endsection