<?php

use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tugass', TugasController::class);

Route::get('tugass/create', [TugasController::class, 'create'])->name('tugass.create');

Route::get('tugass/{tugas}/edit', [TugasController::class, 'edit'])->name('tugass.edit');
Route::put('tugass/{tugas}', [TugasController::class, 'update'])->name('tugass.update');
Route::delete('tugass/{tugas}', [TugasController::class, 'destroy'])->name('tugass.destroy');