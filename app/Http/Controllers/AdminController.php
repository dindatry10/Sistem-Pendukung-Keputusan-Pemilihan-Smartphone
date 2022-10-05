<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function list()
    {
        // ini untuk mengambil semua data di table datas
        $data['list'] = DB::table('datas')->get();
        // CHECK DATA
        // dd($data['list']);
        return view('dashboards.admins.list.list', $data);
    }

    public function edit($id_hp)
    {
        // ini untuk mengambil satu user yang dipilih pada table datas
        $data['list'] = DB::table('datas')->where('id_hp', $id_hp)->first();
        return view('dashboards.admins.list.edit', $data);
    }

    public function update(Request $request, $id_hp)
    {
        // menyimpan data yang di update
        // dd($request);

        $simpan = DB::table('datas')
            ->where('id_hp', $id_hp)
            ->update([
                'nama_hp' => $request->nama,
                'harga_hp' => $request->harga,
                'ram_hp' => $request->ram,
                'memori_hp' => $request->memori,
                'processor_hp' => $request->processor,
                'kamera_hp' => $request->kamera,
                'harga_angka' => $request->harga_angka,
                'ram_angka' => $request->ram_angka,
                'memori_angka' => $request->memori_angka,
                'processor_angka' => $request->processor_angka,
                'kamera_angka' => $request->kamera_angka
            ]);

        if ($simpan == true) {
            echo "<script>
                alert('Data Berhasil Disimpan');
                window.location = '/';
                </script>";
        } else {
            echo "<script>
            alert('Data gagal Disimpan');
            window.location ='/edit/$id_hp';
            </script>";
        }
        return redirect('/admin/list');
    }

    public function add()
    {
        return view('dashboards.admins.list.add');
    }

    public function store(Request $request)
    {
        // dd($request);
        $tambah = DB::table('datas')->insert(
            [
                'nama_hp' => $request->nama,
                'harga_hp' => $request->harga,
                'ram_hp' => $request->ram,
                'memori_hp' => $request->memori,
                'processor_hp' => $request->processor,
                'kamera_hp' => $request->kamera,
                'harga_angka' => $request->harga_angka,
                'ram_angka' => $request->ram_angka,
                'memori_angka' => $request->memori_angka,
                'processor_angka' => $request->processor_angka,
                'kamera_angka' => $request->kamera_angka
            ]

        );

        if ($tambah == true) {
            echo "<script>
                alert('Data Berhasil Ditambahkan');
                window.location = '/';
                </script>";
        } else {
            echo "<script>
            alert('Data gagal Ditambahkan');
            window.location ='/tambah';
            </script>";
        }
        return redirect('/admin/list');
    }


    public function hapus($id_hp)
    {
        DB::table('datas')
            ->where('id_hp', $id_hp)
            ->delete();
        return redirect('/admin/list');
    }

    //Bobot

    public function pembagiNM()
    {
    }

    function dashboard()
    {

        return view('dashboards.admins.dashboard.dashboard');
    }
    function rekomendasi()
    {
        return view('dashboards.admins.rekomendasi.rekomendasi');
    }
    function hasil()
    {
        return view('dashboards.admins.rekomendasi.hasil');
    }
    function tentang()
    {
        return view('dashboards.admins.tentang.tentang');
    }
}
