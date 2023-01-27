<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Dashboard\DashboardDokter;
use App\Http\Controllers\Dashboard\DashboardPasien;
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



Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('login.index');
});

Route::get('/about', function () {
    return view('about');
})->middleware('auth');

route::group(['prefix' => '/pasien','middleware' => 'auth'], function(){
    Route::get('/all', [PasienController:: class, 'index']);
    Route::get('/detail/{pasien}',[PasienController::class,'show']);
    Route::get('/create', [PasienController:: class, 'create']);
    Route::post('/add', [PasienController:: class, 'store']);
    Route::get('/edit/{pasien}',[PasienController::class,'edit']);
    Route::post('/update/{pasien}', [PasienController:: class, 'update']);
    Route::delete('/delete/{pasien}',[PasienController::class,'destroy']);
});

route::group(['prefix' => '/dokter','middleware' => 'auth'], function(){
    Route::get('/all', [DokterController:: class, 'index']);
    Route::get('/detail/{dokter}',[DokterController::class,'show']);
    Route::get('/create', [DokterController:: class, 'create']);
    Route::post('/add', [DokterController:: class, 'store']);
    Route::get('/edit/{dokter}',[DokterController::class,'edit']);
    Route::post('/update/{dokter}', [DokterController:: class, 'update']);
    Route::delete('/delete/{dokter}',[DokterController::class,'destroy']);
});

Route::group(['prefix' => '/session'], function(){
    Route::get('/logout', [SessionController::class, 'logout']);

    Route::group(['prefix' => '/login'], function(){
        Route::get('/all', [LoginController:: class, 'index'])->name('login')->middleware('guest');
        Route::post('/create', [LoginController:: class, 'auth']);
    });

    route::group(['prefix' => '/register'], function(){
        Route::get('/all', [RegisterController:: class, 'index'])->middleware('guest');
        Route::post('/create', [RegisterController:: class, 'store']);
    });
});

Route::group(['prefix' => '/admin','middleware' => 'auth'], function(){
    Route::get('/all', [AdminController:: class, 'index']);

    Route::group(['prefix' => '/pasien'], function(){
        Route::get('/all', [DashboardPasien:: class, 'index']);
        Route::get('/detail/{pasien}',[DashboardPasien::class,'show']);
        Route::get('/create', [DashboardPasien:: class, 'create']);
        Route::post('/add', [DashboardPasien:: class, 'store']);
        Route::get('/edit/{pasien}',[DashboardPasien::class,'edit']);
        Route::post('/update/{pasien}', [DashboardPasien:: class, 'update']);
        Route::delete('/delete/{pasien}',[DashboardPasien::class,'destroy']);
    });

    route::group(['prefix' => '/dokter'], function(){
        Route::get('/all', [DashboardDokter:: class, 'index']);
        Route::get('/detail/{dokter}',[DashboardDokter::class,'show']);
        Route::get('/create', [DashboardDokter:: class, 'create']);
        Route::post('/add', [DashboardDokter:: class, 'store']);
        Route::get('/edit/{dokter}',[DashboardDokter::class,'edit']);
        Route::post('/update/{dokter}', [DashboardDokter:: class, 'update']);
        Route::delete('/delete/{dokter}',[DashboardDokter::class,'destroy']);
    });
});


