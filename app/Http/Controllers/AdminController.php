<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function list()
    {
        // ini untuk mengambil semua data di table datas
        $data['list'] = DB::table('datas')
            // ->orderBy('nama_hp', 'asc')
            ->get();
        // CHECK DATA
        // dd($data['list']);
        return view('dashboards.admins.list.list', $data);
    }

    public function searchlist(Request $request)
    {
        if (isset($_GET['query']) && strlen($_GET['query']) > 1) {

            $search_text = $_GET['query'];
            $data = DB::table('datas')->where('nama_hp', 'LIKE', '%' . $search_text . '%')->paginate(2);
            $data->appends($request->all());
            return view('dashboards.admins.list.list', ['list' => $data]);
        } else {
            return view('dashboards.admins.list.list');
        }
        return view('dashboards.admins.list.list');
    }

    public function findlist(Request $request)
    {
        $request->validate([
            'query' => 'required|min:2'
        ]);

        $search_text = $request->input('query');
        $data = DB::table('datas')
            ->where('nama_hp', 'LIKE', '%' . $search_text . '%')
            //   ->orWhere('SurfaceArea','<', 10)
            //   ->orWhere('LocalName','like','%'.$search_text.'%')
            ->paginate(2);
        return view('dashboards.admins.list.list', ['list' => $data]);
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

    public function dashboard()
    {
        $totalUser = DB::table('users')->count();
        $totalData = DB::table('datas')->count();
        return view('dashboards.admins.dashboard.dashboard', compact('totalUser', 'totalData'));
    }
    public function rekomendasi()
    {
        return view('dashboards.admins.rekomendasi.rekomendasi');
    }
    public function hasil(Request $request)
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

        $jarakPlus = [];
        $jarakMinus = [];

        foreach ($normalisasi_terbobot as $key1 => $value1) {
            $dplus = 0;
            $dmin = 0;
            foreach ($max as $i => $value2) {
                $dplus += pow($max[$i] - $value1[$i], 2);
                $dmin += pow($min[$i] - $value1[$i], 2);
            }

            array_push($jarakPlus, sqrt($dplus));
            array_push($jarakMinus, sqrt($dmin));
        }

        $v = [];
        $max = 0;
        $seletedAlt = 0;
        foreach ($jarakMinus as $key => $value) {
            $va = $value / ($value + $jarakPlus[$key]);
            if ($max < $va) {
                $max = $va;
                $seletedAlt = $key;
            }
            $v[] = $va;
        }

        // dd($v, $max, $seletedAlt, $data_raw[$seletedAlt]);

        // dd($data, $normalisasi_r, $normalisasi_terbobot, $min, $jarakPlus, $jarakMinus, $v, $max, $seletedAlt, $data_raw[$seletedAlt]);
        // dd($data);
        // dd($data_raw[$seletedAlt]);

        $hasil = $data_raw[$seletedAlt];
        return view('dashboards.admins.rekomendasi.hasil', compact('hasil'));
    }

    public function tentang()
    {
        return view('dashboards.admins.tentang.tentang');
    }
    public function profile()
    {
        return view('dashboards.admins.profile.profile');
    }

    public function updateInfo(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $query = User::find(Auth::user()->id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            if (!$query) {
                return response()->json(['status' => 0, 'msg' => 'Something went wrong.']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Your profile info has been update successfuly.']);
            }
        }
    }

    public function updatePicture(Request $request)
    {
        $path = 'users/images/';
        $file = $request->file('admin_image');
        $new_name = 'UIMG_' . date('Ymd') . uniqid() . '.jpg';

        //Upload new image
        $upload = $file->move(public_path($path), $new_name);

        if (!$upload) {
            return response()->json(['status' => 0, 'msg' => 'Something went wrong, upload new picture failed.']);
        } else {
            //Get Old picture
            $oldPicture = User::find(Auth::user()->id)->getAttributes()['picture'];

            if ($oldPicture != '') {
                if (\File::exists(public_path($path . $oldPicture))) {
                    \File::delete(public_path($path . $oldPicture));
                }
            }

            //Update DB
            $update = User::find(Auth::user()->id)->update(['picture' => $new_name]);

            if (!$upload) {
                return response()->json(['status' => 0, 'msg' => 'Something went wrong, updating picture in db failed.']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Your profile picture has been updated successfully']);
            }
        }
    }

    public function changePassword(Request $request)
    {
        //Validate form
        $validator = \Validator::make($request->all(), [
            'oldpassword' => [
                'required', function ($attribute, $value, $fail) {
                    if (!\Hash::check($value, Auth::user()->password)) {
                        return $fail(__('The current password is incorrect'));
                    }
                },
                'min:8',
                'max:30'
            ],
            'newpassword' => 'required|min:8|max:30',
            'cnewpassword' => 'required|same:newpassword'
        ], [
            'oldpassword.required' => 'Enter your current password',
            'oldpassword.min' => 'Old password must have atleast 8 characters',
            'oldpassword.max' => 'Old password must not be greater than 30 characters',
            'newpassword.required' => 'Enter new password',
            'newpassword.min' => 'New password must have atleast 8 characters',
            'newpassword.max' => 'New password must not be greater than 30 characters',
            'cnewpassword.required' => 'ReEnter your new password',
            'cnewpassword.same' => 'New password and Confirm new password must match'
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            $update = User::find(Auth::user()->id)->update(['password' => \Hash::make($request->newpassword)]);

            if (!$update) {
                return response()->json(['status' => 0, 'msg' => 'Something went wrong, Failed to update password in db']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Your password has been changed successfully']);
            }
        }
    }
}
