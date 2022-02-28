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

// Default route bawaan create project laravel
Route::get('/', function () {
    return view('welcome');
});

// Jobsheet 2 Praktikum 1

// URL : /
Route::get('/', function () {
    echo 'Selamat Datang';
});

// URL : /about
Route::get('/about', function ($id = 2041720249, $name = 'Vinka Kharisma Adzania', $class = 'TI - 2D') {
    echo 'NIM : ' . $id . '<br>Nama : ' . $name . '<br>Kelas : ' . $class;
});

// URL : /articles/{id}
Route::get('/articles/{id}', function ($id) {
    echo 'Halaman Artikel dengan ID ' . $id;
});

// Route parameter
Route::get('/articles/{id}', function ($id) {
    echo 'Ini merupakan halaman artikel dengan id ' . $id;
});
