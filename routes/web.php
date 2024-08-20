<?php
use App\Http\Controllers\DataMateriController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PosController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

// Home

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/scan-barcode', function () {
    return view('camera');
})->name('camera');

//Detail Kegiatan


Route::get('/detail-kegiatan', [DaftarController::class, 'detailKegiatan'])->name('detail.kegiatan');

// kegiatan
Route::get('/kegiatan-daftar', [DaftarController::class, 'kegiatanDaftar'])->name('kegaiatan.daftar');
Route::get('/kegiatan-daftar-cek', [DaftarController::class, 'kegiatanDaftarCek'])->name('kegaiatan.daftar.cek');
Route::post('/kegiatan-daftar-tambah', [DaftarController::class, 'kegiatanDaftarTambah'])->name('kegaiatan.daftar.tambah');
// end kegiatan

Route::get('/cangkul/admin', function () {
    return view('admin.index');
})->name('admin')->middleware('auth');

Route::get('/cangkul/daftar', function () {
    return view('admin.daftar');
})->name('admin.daftar')->middleware('auth');

Route::get('/cangkul/data-materi', function () {
    return view('admin.materi');
})->name('admin.materi.front')->middleware('auth');

Route::get('/cangkul/content', function () {
    return view('admin.content');
})->name('content.data')->middleware('auth');

// routes/web.php

//Daftar Peserta
Route::get('/cangkul/daftar', [DaftarController::class, 'show'])->name('admin.daftar')->middleware('auth');
Route::get('/cangkul/peserta', [DaftarController::class, 'create'])->name('daftar.create')->middleware('auth');
Route::post('/cangkul/peserta', [DaftarController::class, 'store'])->name('daftar.store')->middleware('auth');
//Delete Daftar Peserta
Route::delete('/cangkul/peserta/{id}', [DaftarController::class, 'destroy'])->name('daftar.destroy')->middleware('auth');
//Update Peserta
// Route::get('/peserta/{id}/update', [DaftarController::class, 'update'])->name('daftar.update');
Route::get('/cangkul/peserta/{id}/tracking', [DaftarController::class, 'tracking'])->name('peserta.tracking')->middleware('auth');

// Route::get('/cangkul/pos', function () {
//     return view('admin.pos');
// })->name('admin.pos')->middleware('auth');


//Daftar Pos
Route::get('/cangkul/pos', [PosController::class, 'show'])->name('admin.pos')->middleware('auth');
Route::get('/cangkul/datapos', [PosController::class, 'create'])->name('pos.create')->middleware('auth');
Route::post('/cangkul/datapos', [PosController::class, 'store'])->name('pos.store')->middleware('auth');
//Delete pos pos
Route::delete('/cangkul/datapos/{id}', [PosController::class, 'destroy'])->name('pos.destroy')->middleware('auth');
//Update pos
Route::get('/cangkul/pos/{id}/edit', [PosController::class, 'edit'])->name('pos.edit')->middleware('auth');
Route::put('/cangkul/pos/{id}/edit', [PosController::class, 'update'])->name('pos.update')->middleware('auth');

//Daftar Data Materi
Route::get('/cangkul/materi', [DataMateriController::class, 'show'])->name('admin.materi')->middleware('auth');
Route::get('/cangkul/dmateri', [DataMateriController::class, 'create'])->name('materi.create')->middleware('auth');
Route::post('/cangkul/dmateri', [DataMateriController::class, 'store'])->name('materi.store')->middleware('auth');
//Delete Data Materi
Route::delete('/cangkul/dmateri/{id}', [DataMateriController::class, 'destroy'])->name('materi.destroy')->middleware('auth');

//Daftar content
Route::get('/cangkul/content', [KontenController::class, 'show'])->name('admin.content')->middleware('auth');
Route::get('/cangkul/dkonten', [KontenController::class, 'create'])->name('content.create')->middleware('auth');
Route::post('/cangkul/dkonten', [KontenController::class, 'store'])->name('content.store')->middleware('auth');
//Delete Daftar dkonten
Route::delete('/cangkul/dkonten/{id}', [KontenController::class, 'destroy'])->name('content.destroy')->middleware('auth');
//Update dkonten
// Route::get('/dkonten/{id}/update', [KontenController::class, 'update'])->name('content.update');