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

    function dashboard()
    {
        return view('dashboards.admins.dashboard.dashboard');
    }
    function rekomendasi()
    {
        return view('dashboards.admins.rekomendasi.rekomendasi');
    }
    function hasil(Request $request)
    {
        $user_input = $request->post();
        $user_input = [
            intval($user_input[0]),
            intval($user_input[1]),
            intval($user_input[2]),
            intval($user_input[3]),
            intval($user_input[4]),
        ];

        $data_raw = DB::table('datas')->get();

        $data = [];
        $bobot = [0, 0, 0, 0, 0];

        foreach ($data_raw as $key => $value) {
            $data[] = [
                $value->harga_angka,
                $value->ram_angka,
                $value->memori_angka,
                $value->processor_angka,
                $value->kamera_angka
            ];
        }

        foreach ($data as $key => $value) {
            $bobot[0] += pow($value[0], 2);
            $bobot[1] += pow($value[1], 2);
            $bobot[2] += pow($value[2], 2);
            $bobot[3] += pow($value[3], 2);
            $bobot[4] += pow($value[4], 2);
        }

        foreach ($bobot as $key => $value) {
            $bobot[$key] = sqrt($value);
        }

        $normalisasi_r = [];
        foreach ($data as $key => $a) {
            $h = [];
            foreach ($bobot as $key => $k) {
                $h[] =  $a[$key] / $k;
            }
            $normalisasi_r[] = $h;
        }

        $max = [99, 0, 0, 0, 0];
        $min = [0, 99, 99, 99, 99];

        $normalisasi_terbobot = [];
        foreach ($normalisasi_r as $key => $a) {
            $h = [];
            foreach ($user_input as $key => $k) {
                $j = $a[$key] * $k;
                $h[] = $j;
                if ($key == 0) {
                    $max[$key] = ($j < $max[$key]) ? $j : $max[$key];
                    $min[$key] = ($j > $min[$key]) ? $j : $min[$key];
                } else {
                    $max[$key] = ($j > $max[$key]) ? $j : $max[$key];
                    $min[$key] = ($j < $min[$key]) ? $j : $min[$key];
                }
            }
            $normalisasi_terbobot[] = $h;
        }

        // ------------------------------







        dd($normalisasi_terbobot, $max, $min);



        return view('dashboards.admins.rekomendasi.hasil');
    }

    function tentang()
    {
        return view('dashboards.admins.tentang.tentang');
    }
}
