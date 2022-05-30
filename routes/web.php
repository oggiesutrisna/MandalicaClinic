<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PackageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('showpasien/{id}', function(Pasien $pasien) {
//     return view('pasiens.showpasien', compact('pasien'));
// });

// Route without group
Route::get('/blogs/post/{id}', [BlogController::class, 'showBlog'])->name('showBlog');
Route::get('/', [BlogController::class, 'indexBlog'])->name('indexBlog');
Route::put('storecontact', [ContactController::class, 'storecontact'])->name('setorcontact');
Route::put('setorpasien', [PasienController::class, 'setorpasien'])->name('pasiensetor');
Route::get('viewpackages/{nama}', [PackageController::class, 'viewpackages'])->name('packagesview');
Route::get('/en-en', [WelcomeController::class, 'en-en'])->name('en-en');

Auth::routes();

Route::group(['middleware', 'auth'], function () {
    Route::resource('packages', PackageController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('pasiens', PasienController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('obats', ObatController::class);
    Route::resource('contacts', ContactController::class);
    Route::put('storePasien', [PasienController::class, 'storePasien'])->name('setorPasien');
});
