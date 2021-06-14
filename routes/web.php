<?php

use Illuminate\Support\Facades\Route;

//
Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/aboutus', [App\Http\Controllers\PageController::class, 'about']);

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


Route::get('/admin/about', [App\Http\Controllers\Admin\AboutController::class, 'index'])->middleware('checkRole:admin');

// Route::get('/dashboard', function () {
//     return view('admin.index');
// });