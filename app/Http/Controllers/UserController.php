<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function dashboard()
    {

        return view('dashboards.users.dashboard');
    }
    function rekomendasi()
    {
        return view('dashboards.users.rekomendasi');
    }
    function list()
    {
        return view('dashboards.users.list');
    }
    function tentang()
    {
        return view('dashboards.users.tentang');
    }
}
