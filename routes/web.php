<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

// Route::get('showpasien/{id}', function(Pasien $pasien) {
//     return view('pasiens.showpasien', compact('pasien'));
// });

Route::get('/blogs/post/{id}', [BlogController::class, 'showBlog'])->name('showBlog');
Route::get('/', [BlogController::class, 'indexBlog'])->name('indexBlog');

Auth::routes();
Route::put('storecontact', [ContactController::class, 'storecontact'])->name('setorcontact');

Route::group(['middleware', 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('pasiens', PasienController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('contacts', ContactController::class);
    Route::put('storePasien', [PasienController::class, 'storePasien'])->name('setorPasien');
});
