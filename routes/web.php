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
Route::get('/list', [BiodataController::class,'index']);
