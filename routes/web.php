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
    $artikel = Artikel::paginate(5);
    return view('index', compact('artikel'));
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/single_post', function () {
    $artikel = \App\Artikel::get();
    return view('single_post',compact('artikel'));
});

Route::get('detail/{id}', 'HomeController@detail');

Route::get('submit', function () {
    return view('submit');
});

Route::get('login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/{slug}', 'FrontendController@single')->name('single.post');
Route::get('/blog', 'FrontendController@allblog')->name('all.blog');
Route::get('/blog/category/{slug}', 'FrontendController@categoryblog')->name('category.blog');
Route::get('/blog/tag/{tag}', 'FrontendController@tagblog')->name('tag.blog');

Route::resource('/admin/kategori', 'KategoriController');
Route::resource('/admin/artikel', 'ArtikelController');
Route::resource('/admin/tag', 'TagController');
