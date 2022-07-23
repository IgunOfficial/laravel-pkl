<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\TugasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 //route basic
Route::get('/belajar', function () {
    echo "<center>";
    echo "<h2><b>HALO SEMUANYANYAH</b></h2><br>";
    echo "<b><i><u>Kami sedang belajar laravel dasar</u></i></b>";
    echo "</center>";
});

//route basic lanjut ke view
Route::get('/index', function () {
    return view('index');
});

Route::get('/contoh1', function () {
    return view('page.contoh1');
});

Route::get('/contoh2', function () {
    return view('page.contoh2');
});

Route::get('/contoh3', function () {
    return view('page.contoh3');
});

//Route parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jk}/{kelas}/{Hobi}', function ($a,$b,$c,$d,$e,$f) {
    return view('page.biodata', compact ('a','b','c','d','e','f'));
});

//route optional parameter
Route::get('/pesanan/{makanan?}/{makanan1?}', function($a = "Makanan Tidak Tersedia", $a1= "Makanan Tidak Tersedia"){
    return view('page.pesanan',compact('a','a1'));
});

//passing data controller ke view
Route::get('/pengenalan',[PengenalanController::class,'pengenalan']);

//passing data dinamis (route parameter) dari controller ke view
Route::get('/intro/{nama}/{alamat}/{umur}',[PengenalanController::class,'intro']);

Route::get('/siswa1',[PengenalanController::class,'siswa']);

//latihan ieu mah da sing aslina ge
Route::get('/menu',[LatihanController::class,'menu']);
Route::get('/dosen',[LatihanController::class,'dosen']);
Route::get('/televisi',[LatihanController::class,'televisi']);

//
Route::get('/post', [PostController::class,'index']);

Route::get('/tugas', [SiswaController::class,'index']);
Route::get('/soal2', [PesertaController::class,'index']);
Route::get('/soal3', [MapelController::class,'index']);

Route::get('/latihan', [TugasController::class,'index']);
Auth::routes();
use App\Http\Controllers\SlotController;
Route::resource('slot', SlotController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
