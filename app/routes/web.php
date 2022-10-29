<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/coba', function(){
    echo "Hello World";
});

Route::get('/test', function(){
    return view("test");
});

Route::get('/Mahasiswa', 
    [MahasiswaController::class, 'index']);

Route::get('/Mahasiswa/create', 
    [MahasiswaController::class, 'create']);

Route::post("/Mahasiswa/input", 
function(Request $req){
    echo "<pre>";
    print_r($req->post());
});

Route::get('/namamd', function(){
    echo "Berhasil Login";
})->middleware('namamd');
