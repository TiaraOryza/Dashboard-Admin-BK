<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PDF;

use App\Http\Controllers\FotoController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WaliController;
use App\Http\Controllers\XIPAIController;
use App\Http\Controllers\XIPAIIController;
use App\Http\Controllers\XIPAIIIController;
//kurang controller laporan 

//route link pages
Route::get('/login', function () {
    return view('login');
});

Route::get('/beranda', function () {
    return view('general/beranda1');
});

//route elloquent CRUD
Route::resource('foto', FotoController::class);
Route::resource('kelas', KelasController::class);
Route::resource('keluarga', KeluargaController::class);
Route::resource('siswa', SiswaController::class);

Route::resource('wali', WaliController::class);

Route::resource('laporan', LaporanController::class);


/////////
Route::resource('X_IPA_I', XIPAIController::class);
Route::resource('X_IPA_II', XIPAIIController::class);
Route::resource('X_IPA_II', XIPAIIIController::class);

//route form input data by user
Route::get('/form1', function () {
    return view('form/form1');
});
Route::get('/form2', function () {
    return view('form/form2');
});
Route::get('/index3', function () {
    return view('index3');
});

//route untuk pdf
