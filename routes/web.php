<?php

Route::get('/', function () {
    return view('pages/index');
});

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
