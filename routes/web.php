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
// get, post, put, patch, delete, options

// Auth::routes();
// Route::get('/logout', function () {
// 	Auth::logout();
// 	return redirect()->back();
// });

Route::match(['get'], '/', function () {
    return view('page-front');
})->name('page-front');

Route::resource('profile/page', 'PageProfileController');

Route::match(
    ['get'],
    'catalog/{category_slug}/{product_slug?}',
    'CatalogController@route'
)->where('category_slug', '[a-z\-]+')->where('product_slug', '[a-z\-]+');

// Route::match(['get'], '{slug}', 'PageController@view');

// Route::get('/home', 'HomeController@index')->name('home');
