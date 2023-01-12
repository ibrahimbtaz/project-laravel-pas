<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Contracts\Session\Session;

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
    return view('login.index');
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

route::group(['prefix' => '/dokter'], function(){
    Route::get('/all', [DokterController:: class, 'index']);
    Route::get('/detail/{dokter}',[DokterController::class,'show']);
    Route::get('/create', [DokterController:: class, 'create']);
    Route::post('/add', [DokterController:: class, 'store']);
    Route::get('/edit/{dokter}',[DokterController::class,'edit']);
    Route::post('/update/{dokter}', [DokterController:: class, 'update']);
    Route::delete('/delete/{dokter}',[DokterController::class,'destroy']);
});


route::group(['prefix' => '/login'], function(){
    Route::get('/all', [LoginController:: class, 'index']);
    Route::post('/login', [LoginController:: class, 'login']);
});

route::group(['prefix' => '/register'], function(){
    Route::get('/all', [RegisterController:: class, 'index']);
    Route::post('/create', [RegisterController:: class, 'create']);
});

route::group(['prefix' => '/session'], function(){
    Route::get('/logout', [SessionController:: class, 'logout']);
});

route::group(['prefix' => '/admin'], function(){
    Route::get('/all', [AdminController:: class, 'admin']);
});


