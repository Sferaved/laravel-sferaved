<?php

use App\Http\Controllers\UserController;
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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');


Route::get('/users/all', [UserController::class,'index'])->middleware('verified');
Route::get('/users/destroy/{id}', [UserController::class,'destroy'])->middleware('verified');

Route::get('/admin', function () {
    return view('admin.home');
})->name('admin');

Route::get('/admin/{any}', function () {
    return view('admin.home');
})->where('any', '.*');
