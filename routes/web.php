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
    return view('pages/welcome');
});

// Route::get('/second',function(){
//     return view('pages/second');
// });

Route::get('/chat','ChatController@index')->name('chat');
Route::post('/chat','PageController@store')->name('chat');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/second', 'PageController@index')->name('second');
Route::get('/sec', 'PostController@store')->name('sec');
Route::post('/form','PageController@store');
Route::get('/form/messages','ChatController@');
Route::get('/form',function(){
    return view('posts.form');
});

Route::resource('/posts','PageController@store');
