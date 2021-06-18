<?php

use Illuminate\Support\Facades\Route;

//
Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/aboutus', [App\Http\Controllers\PageController::class, 'about']);

Auth::routes();

// Page All Auth
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('checkRole:admin,mahasiswa,alumni');
Route::get('/alumnipage', [App\Http\Controllers\HomeController::class, 'alumni'])->name('alumni')->middleware('checkRole:admin,mahasiswa,alumni');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about')->middleware('checkRole:admin,mahasiswa,alumni');
Route::get('/alumni/{alumni}', [App\Http\Controllers\HomeController::class, 'show'])->name('show_alumni')->middleware('checkRole:admin,mahasiswa,alumni');

// Page Alumni
Route::get('/alumni', [App\Http\Controllers\AlumniController::class, 'index'])->name('profile')->middleware('checkRole:admin,alumni');
Route::get('/alumni/create', [App\Http\Controllers\AlumniController::class, 'create']);
Route::post('/alumni', [App\Http\Controllers\AlumniController::class, 'store']);
Route::get('alumni/{alumni}/edit', [App\Http\Controllers\AlumniController::class, 'edit'])->name('alumniedit')->middleware('checkRole:admin,alumni');
Route::post('/alumni/{alumni}', [App\Http\Controllers\AlumniController::class, 'update'])->name('alumniupdate');

// Page Admin
// Home
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard')->middleware('checkRole:admin');
Route::get('/admin/create', [App\Http\Controllers\Admin\HomeController::class, 'create']);
Route::post('/admin', [App\Http\Controllers\Admin\HomeController::class, 'store']);
Route::get('/admin/{grad}/edit', [App\Http\Controllers\Admin\HomeController::class, 'edit']);
Route::patch('/admin/{grad}', [App\Http\Controllers\Admin\HomeController::class, 'update']);
Route::delete('/admin/slider/{slider}', [App\Http\Controllers\Admin\HomeController::class, 'destroy']);

//About
Route::get('/admin/about', [App\Http\Controllers\Admin\AboutController::class, 'index'])->name('admin_about')->middleware('checkRole:admin');
Route::get('/admin/about/{about}/edit', [App\Http\Controllers\Admin\AboutController::class, 'edit']);
Route::patch('/admin/about/{about}', [App\Http\Controllers\Admin\AboutController::class, 'update']);

Route::get('/admin/contact/{contact}/edit', [App\Http\Controllers\Admin\AboutController::class, 'edit_contact']);
Route::patch('/admin/contact/{contact}', [App\Http\Controllers\Admin\AboutController::class, 'update_contact']);

//Profile
Route::get('/admin/alumni', [App\Http\Controllers\Admin\AlumniController::class, 'index'])->name('admin_alumni')->middleware('checkRole:admin');
Route::get('/admin/alumni/create', [App\Http\Controllers\Admin\AlumniController::class, 'create']);
Route::patch('/admin/alumni', [App\Http\Controllers\Admin\AlumniController::class, 'store']);
Route::delete('/admin/alumni/{alumni}', [App\Http\Controllers\Admin\AlumniController::class, 'destroy']);
