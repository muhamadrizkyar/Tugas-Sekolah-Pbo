<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;

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
    return view('auth.login');
});

// Route::resource('blog', BlogController::class);
 
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['web', 'auth', 'checkRole:admin'])->group(function () {
    Route::resource('user', RegisterController::class);
    Route::resource('dashboard', DashboardController::class);
});

Route::middleware(['web', 'auth', 'checkRole:admin,user'])->group(function () {
    Route::resource('blog', BlogController::class);
});

Route::get('/register', [RegisterController::class, 'tambah']);
Route::post('/register', [RegisterController::class, 'registerUser']);