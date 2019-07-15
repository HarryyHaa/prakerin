<?php

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

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

Route::get('archive', function () {
    return view('archive');
});

Route::get('singel', function () {
    return view('singel_post');
});

Route::get('video', function () {
    return view('video_post');
});

Route::get('submit', function () {
    return view('submit');
});

Route::get('login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/kategori', 'KategoriController');
Route::resource('/admin/artikel', 'ArtikelController');
Route::resource('/admin/tag', 'TagController');
