<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;

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

Route::get('/biodata', function () {

    $data=[
        'nama'=>'Windi Anandira',
        'lahir'=>'Bandung, 07 Januari 2004',
        'hobi'=>'Menonton film',
        'jk'=>'Perempuan',
        'agama'=>'islam',
        'alamat'=>'Griya mitra posindo blok F2 no 25',
        'telp'=>'08986959172',
        'email'=>'anandirawindi@gmail.com',
    ];
    return view('biodata',$data);
});
Route::get('/list', [BiodataController::class,'index'])->name('list');
Route::get('/add_siswa', [BiodataController::class, 'create'])->name('add_siswa');
Route::post('/store_siswa', [BiodataController::class, 'store'])->name('store-siswa');
Route::get('/edit/{id}', [BiodataController::class, 'edit'])->name('edit_siswa');
Route::put('/update/{id}', [BiodataController::class, 'update'])->name('update_siswa');
Route::get('/bio/{id}', [BiodataController::class, 'show'])->name('show_bio');
Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->name('destroy-siswa');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
