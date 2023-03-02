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
    return view('home');
});

Route::get('/pagina2', [\App\Http\Controllers\paginacontroller::class,  'pagina2'])->name('pagina2');
Route::get('/alumnos', [\App\Http\Controllers\paginacontroller::class,  'index'])->name('servidor2');
