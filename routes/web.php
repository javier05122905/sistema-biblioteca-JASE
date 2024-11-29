<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bibliotecacontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio',[bibliotecacontroller::class,'inicio'])->name('inicio');
Route::get('inicio2',[bibliotecacontroller::class,'inicio2'])->name('inicio2');
Route::get('registro',[bibliotecacontroller::class,'registro'])->name('registro');