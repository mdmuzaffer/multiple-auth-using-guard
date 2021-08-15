<?php

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

// Admin Dashboard
Route::match(['get','post'],'/admin/login', [App\Http\Controllers\AdminController::class, 'index'])->name('login');

Route::group(['middleware' => ['admin']],function(){
    Route::Match(['get', 'post'],'/admin/dashboard', [App\Http\Controllers\AdminController::class, 'show']);
    Route::Match(['get', 'post'],'/admin/logout', [App\Http\Controllers\AdminController::class, 'destroy']);
});

//Barber Dashboard
Route::match(['get','post'],'/barber/login', [App\Http\Controllers\BarberController::class, 'index'])->name('login');

Route::group(['middleware' => ['barber']],function(){
    Route::Match(['get', 'post'],'/barber/dashboard', [App\Http\Controllers\BarberController::class, 'show']);
    Route::Match(['get', 'post'],'/barber/logout', [App\Http\Controllers\BarberController::class, 'destroy']);
});

//User Dashboard
Route::match(['get','post'],'/user/login', [App\Http\Controllers\UsersController::class, 'index'])->name('login');

Route::group(['middleware'=>['auth']],function(){
    Route::Match(['get', 'post'],'/user/dashboard', [App\Http\Controllers\UsersController::class, 'show']);
    Route::Match(['get', 'post'],'/user/logout', [App\Http\Controllers\UsersController::class, 'destroy']);
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

