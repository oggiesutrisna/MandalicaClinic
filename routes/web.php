<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowPasienController;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Resources with Auth Systems
Route::group(['middleware', 'auth'], function() {
    Route::get('pasienIndex', [PasienController::class, 'pasienIndex'])->name('pasienIndex');
    Route::get('blogindex', [BlogController::class, 'blogindex'])->name('blogindex');
    Route::resource('pasiens', PasienController::class);
    Route::resource('blogs', BlogController::class);
    Route::put('storePasien', [PasienController::class, 'storePasien'])->name('setorPasien');
});
