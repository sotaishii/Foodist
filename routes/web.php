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
    return view('welcome');
});

Route::get('users/mypage', 'UserController@mypage')->name('mypage');
Route::get('users/mypage/edit', 'UserController@edit')->name('mypage.edit');
Route::get('users/mypage/address/edit', 'UserController@edit_address')->name('mypage.edit_address');
Route::put('users/mypage', 'UserController@update')->name('mypage.update');

Route::get("/", "PostController@index");
Route::get("posts/index2", "PostController@index2");

Route::resource("posts", "PostController");

if (env("APP_ENV") ==="local") {
    URL::forceScheme("https");
}

Auth::routes(["verify" => true]);

Route::get('/home', 'HomeController@index')->name('home');


