<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return '<h1>Hola</h1>'
    .'Selamat datang di Jurusan Teknik Komputer dan Informatika<br>'
    .'Dari CIWARUGA menggapai DUNIA.';
    });