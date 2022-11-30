<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;

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
    return view('data.home');
});

route::group(['prefix' => '/dokter'], function(){
    Route::get('/all', [DokterController:: class, 'index']);
    Route::get('/detail/{dokter}',[DokterController::class,'show']);
    Route::get('/create', [DokterController:: class, 'create']);
    Route::post('/add', [DokterController:: class, 'store']);
    Route::get('/edit/{dokter}',[DokterController::class,'edit']);
    Route::post('/update/{dokter}', [DokterController:: class, 'update']);
    Route::delete('/delete/{dokter}',[DokterController::class,'destroy']);
});

route::group(['prefix' => '/pasien'], function(){
    Route::get('/all', [PasienController:: class, 'index']);
    Route::get('/detail/{pasien}',[PasienController::class,'show']);
    Route::get('/create', [PasienController:: class, 'create']);
    Route::post('/add', [PasienController:: class, 'store']);
    Route::get('/edit/{pasien}',[PasienController::class,'edit']);
    Route::post('/update/{pasien}', [PasienController:: class, 'update']);
    Route::delete('/delete/{pasien}',[PasienController::class,'destroy']);
});

