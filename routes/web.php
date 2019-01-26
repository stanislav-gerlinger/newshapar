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

Route::get('/', function () {
    return view('index');
});
Route::any('test/{product_slug?}', 'TestController@router');

Route::any('catalog/{category_slug}/{product_slug?}', 'CatalogController@router')
    ->where('category_slug', '[a-z\-]+')
    ->where('product_slug', '[a-z\-]+')
    ->name('catalog');
Route::any('products', 'ProductController@router')->name('products');
Route::any('yarn', 'YarnController@router')->name('yarn');

Route::any('profile', 'ProfileController@router')->name('profile');
Route::resource('profile/pages', 'ProfilePageController');
Route::resource('profile/directories', 'DirectoryController');
// Route::resource('profile/directories/elements', 'DirectoryElementController', ['except' => [
//     'index', 'show'
// ]]);

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->back();
});

//Route::get($uri, $callback);
//Route::post($uri, $callback);
//Route::put($uri, $callback);
//Route::patch($uri, $callback);
//Route::delete($uri, $callback);
//Route::options($uri, $callback);
//Route::match(Array $methods, $uri, $callback);
//Route::any($uri, $callback);
//Route::any('test/{var1}/{var2}', function($var1, $var2){  });
//{{ csrf_field() }}