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

Route::get('/', function () {
    return view('index');
});
Route::get('/aboutus', function () {
    return view('contact');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('checkRole:admin,mahasiswa,alumni');
Route::get('/alumni', [App\Http\Controllers\HomeController::class, 'alumni'])->name('alumni')->middleware('checkRole:admin,mahasiswa,alumni');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'contact'])->name('about')->middleware('checkRole:admin,mahasiswa,alumni');

Route::get('/profile', [App\Http\Controllers\AlumniController::class, 'show'])->name('profile')->middleware('checkRole:admin,alumni');
Route::get('/edit', [App\Http\Controllers\AlumniController::class, 'edit'])->middleware('checkRole:admin,alumni');
Route::patch('/alumni/{alumni}', [App\Http\Controllers\AlumniController::class, 'update']);
