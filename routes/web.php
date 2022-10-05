<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
    Auth::routes();
});

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('rekomendasi', [AdminController::class, 'rekomendasi'])->name('admin.rekomendasi');
    Route::get('hasil', [AdminController::class, 'hasil'])->name('admin.hasil');
    Route::get('list', [AdminController::class, 'list'])->name('admin.list');
    Route::get('tentang', [AdminController::class, 'tentang'])->name('admin.tentang');

    // Daftar Smartphone
    Route::get('/edit/{id_hp}', [AdminController::class, 'edit'])->name('list.edit');
    Route::post('/update/{id_hp}', [AdminController::class, 'update'])->name('list.update');
    Route::get('/add', [AdminController::class, 'add'])->name('list.add');
    Route::post('/store', [AdminController::class, 'store'])->name('list.store');
    Route::get('/hapus/{id_hp?}', [AdminController::class, 'hapus'])->name('list.hapus');

    //Rekomendasi Smartphone

});

Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('rekomendasi', [UserController::class, 'rekomendasi'])->name('user.rekomendasi');
    Route::get('list', [UserController::class, 'list'])->name('user.list');
    Route::get('tentang', [UserController::class, 'tentang'])->name('user.tentang');
});
