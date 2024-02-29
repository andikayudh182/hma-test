<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('userIndex');
Route::post('/user', [App\Http\Controllers\UserController::class, 'store'])->name('addUser');
Route::put('/user', [App\Http\Controllers\UserController::class, 'update'])->name('updateUser');
Route::delete('/user', [App\Http\Controllers\UserController::class, 'destroy'])->name('deleteUser');

