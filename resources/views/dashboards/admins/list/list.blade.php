@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Data Smartphone')

@section('content')

<body>
    {{-- Start Tabel Daftar Smartphone --}}
    <div class="card">
    <div class="card-body p-2">
    <div class="p-3">
    <a href="{{ route ('list.add') }}" type="submit" class="btn btn-primary" style="margin-bottom:10px"><i class="btn-md mdi mdi-file-check btn-icon-prepend"></i>Tambah Data</a>

    <div class="form-group">
    <form class="d-flex align-items-center" action="/admin/search" class="form-inline" method="GET">
        <div class="input-group">
          <input type="search" name="search" class="form-control" placeholder="Cari Data Smartphone" aria-label="Cari Data Smartphone" aria-describedby="basic-addon2" />
          <div class="input-group-append">
            <button class="btn btn-sm btn-primary" type="button"> Search </button>
          </div>
        </div>
    </form>
</div>

    <table class="table table-hover table-striped table-bordered ">
        <thead>
            <tr>
                <th scope="col"><center>No</center></th>
                <th scope="col"><center>Nama</center></th>
                <th scope="col"><center>Harga Hp</center></th>
                <th scope="col"><center>RAM Hp</center></th>
                <th scope="col"><center>Memori Hp</center></th>
                <th scope="col"><center>Processor Hp</center></th>
                <th scope="col"><center>Kamera Hp</center></th>
                <th scope="col"><center>Aksi</center></th>
            </tr>
        </thead>
        <tbody>
            <?php $no= 1; ?>
            @foreach ($list as $item)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $item->nama_hp}}</td>
                <td>Rp.{{ $item->harga_hp}}</td>
                <td>{{ $item->ram_hp}}GB</td>
                <td>{{ $item->memori_hp}}GB</td>
                <td>{{ $item->processor_hp}}</td>
                <td>{{ $item->kamera_hp}}MP</td>
                <td>
                    <a href="{{ route ('list.edit', ['id_hp' => $item->id_hp]) }}" 
                        class="btn btn-success mdi mdi-file-check btn-icon-prepend">Edit</a>
                    <button onclick="hapus({{ $item->id_hp}})" class="btn btn-danger mdi mdi-delete">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
{{-- End Tabel Daftar Smartphone --}}
    <hr>
    <center><h5>Analisa Smartphone</h5></center>
    <hr>
    {{-- Start Tabel Analisa Smartphone --}}
        <table class="table table-hover table-striped table-bordered ">
            <thead>
                <tr>
                    <th scope="col"><center>Alternatif</center></th>
                    <th scope="col"><center>C1 (Cost)</center></th>
                    <th scope="col"><center>C2 (Benefit)</center></th>
                    <th scope="col"><center>C3 (Benefit)</center></th>
                    <th scope="col"><center>C4 (Benefit)</center></th>
                    <th scope="col"><center>C5 (Benefit)</center></th>
                </tr>
            </thead>
			<tbody>
			<?php $no= 1; ?>
            @foreach ($list as $item)
            <tr>
                <th scope="row"><center> A {{ $no++ }}</center></th>
                <td><center>{{ $item->harga_angka}}</center></td>
                <td><center>{{ $item->ram_angka}}</center></td>
                <td><center>{{ $item->memori_angka}}</center></td>
                <td><center>{{ $item->processor_angka}}</center></td>
                <td><center>{{ $item->kamera_angka}}</center></td>
            </tr>
            @endforeach
			</tbody>
        </table>
{{-- End Tabel Analisa Smartphone --}}  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function hapus(id_hp) {

            console.log(id_hp);

            if (confirm('Anda yakin ingin menghapus data?')){
                $.ajax({
                    type: "get",
                    url: "{{ route('list.hapus')}}/" + id_hp,
                    data: {
                        "id_hp": id_hp
                    },
                    success: function(response){
                        window.location.reload();
                    }
                });
            }
        }
    </script>
    </div>
</div>
</body>

</html>
@endsection

