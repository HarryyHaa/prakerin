<?php
use App\Artikel;

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
    $artikel = Artikel::all();
    return view('index', compact('artikel'));
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
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
Route::get('/post/{slug}', 'FrontendController@singel')->name('singel.post');
Route::get('/blog', 'FrontendController@allblog')->name('all.blog');

Route::resource('/admin/kategori', 'KategoriController');
Route::resource('/admin/artikel', 'ArtikelController');
Route::resource('/admin/tag', 'TagController');
