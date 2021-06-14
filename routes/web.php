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
Route::get('/profile', function () {
    return view('admin.profile');
});
Route::get('/dashboard', function () {
    return view('admin.index');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('checkRole:admin,mahasiswa,alumni');
Route::get('/alumnipage', [App\Http\Controllers\HomeController::class, 'alumni'])->name('alumni')->middleware('checkRole:admin,mahasiswa,alumni');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'contact'])->name('about')->middleware('checkRole:admin,mahasiswa,alumni');

Route::get('/alumni', [App\Http\Controllers\AlumniController::class, 'index'])->name('profile')->middleware('checkRole:admin,alumni');
Route::get('/alumni/create', [App\Http\Controllers\AlumniController::class, 'create']);
Route::post('/alumni', [App\Http\Controllers\AlumniController::class, 'store']);
Route::get('alumni/{alumni}/edit', [App\Http\Controllers\AlumniController::class, 'edit'])->name('alumniedit')->middleware('checkRole:admin,alumni');
Route::post('/alumni/{alumni}', [App\Http\Controllers\AlumniController::class, 'update'])->name('alumniupdate');

// Route::get('/alumnipage', [App\Http\Controllers\HomeController::class, 'search']);