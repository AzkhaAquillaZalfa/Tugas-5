<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BiodataController::class, 'show'])->name('home');
Route::get('/admin', [BiodataController::class, 'edit'])->name('admin.biodata.edit');
Route::put('/admin', [BiodataController::class, 'update'])->name('admin.biodata.update');
