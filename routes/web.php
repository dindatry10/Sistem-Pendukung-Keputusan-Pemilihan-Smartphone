<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('layouts.index');
// });
Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
    Auth::routes();
});

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('rekomendasi', [AdminController::class, 'rekomendasi'])->name('admin.rekomendasi');
    Route::post('hasil', [AdminController::class, 'hasil'])->name('admin.hasil');
    Route::get('list', [AdminController::class, 'list'])->name('admin.list');
    Route::get('tentang', [AdminController::class, 'tentang'])->name('admin.tentang');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');

    Route::post('update-profile-info', [AdminController::class, 'updateInfo'])->name('adminUpdateInfo');
    Route::post('change-profile-picture', [AdminController::class, 'updatePicture'])->name('adminPictureUpdate');
    Route::post('change-password', [AdminController::class, 'changePassword'])->name('adminChangePassword');

    // List Smartphone
    Route::get('/edit/{id_hp}', [AdminController::class, 'edit'])->name('list.edit');
    Route::post('/update/{id_hp}', [AdminController::class, 'update'])->name('list.update');
    Route::get('/add', [AdminController::class, 'add'])->name('list.add');
    Route::post('/store', [AdminController::class, 'store'])->name('list.store');
    Route::get('admin/search', [AdminController::class, 'searchlist'])->name('list.search');
    Route::get('admin/find', [AdminController::class, 'findlist'])->name('list.find');
    Route::get('/hapus/{id_hp?}', [AdminController::class, 'hapus'])->name('list.hapus');
});

Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('rekomendasi', [UserController::class, 'rekomendasi'])->name('user.rekomendasi');
    Route::post('hasil', [UserController::class, 'hasil'])->name('user.hasil');
    Route::get('list', [UserController::class, 'list'])->name('user.list');
    Route::get('tentang', [UserController::class, 'tentang'])->name('user.tentang');
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');

    // List Smartphone
    Route::get('/edit/{id_hp}', [UserController::class, 'edit'])->name('listuser.edit');
    Route::post('/update/{id_hp}', [UserController::class, 'update'])->name('listuser.update');
    Route::get('/add', [UserController::class, 'add'])->name('listuser.add');
    Route::post('/store', [UserController::class, 'store'])->name('listuser.store');
    Route::get('/hapus/{id_hp?}', [UserController::class, 'hapus'])->name('listuser.hapus');
    Route::get('/user/search', [UserController::class, 'search'])->name('listuser.search');

    Route::post('update-profile-info', [UserController::class, 'updateInfo'])->name('userUpdateInfo');
    Route::post('change-profile-picture', [UserController::class, 'updatePicture'])->name('userPictureUpdate');
    Route::post('change-password', [UserController::class, 'changePassword'])->name('userChangePassword');
});
