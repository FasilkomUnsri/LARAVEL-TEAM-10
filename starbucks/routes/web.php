<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Name;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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

Route::get('/index', function () {
    return view('site/index');
})->name('site/index');

Route::get('/about-us', function () {
    return view('site/about');
})->name('site/about');

Route::get('/supplier', function () {
    return view('site/supplier');
})->name('site/supplier');

Route::get('/penghargaan', function () {
    return view('site/penghargaan');
})->name('site/penghargaan');

Route::get('/sponsor', function () {
    return view('site/sponsor');
})->name('site/sponsor');

Route::get('/order', function () {
    return view('site/online');
})->name('site/online');

Route::get('/lokasi', function () {
    return view('site/lokasi');
})->name('site/lokasi');

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);