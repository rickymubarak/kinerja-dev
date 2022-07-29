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
    return view('index', [
        "style" => "style.css"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "style" => "style.css"
    ]);
});

Route::get('rencana', function () {
    return view('page.rencana', [
        "style" => "style.css"
    ]);
});

Route::get('laporan', function () {
    return view('page.laporan', [
        "style" => "style.css"
    ]);
});