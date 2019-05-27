<?php

Route::get('/', function () {
    return view('pages/index');
});
Route::get('/games', function() {
    return view('pages/funGame');
});
Route::get('/logins', function() {
    return view('pages/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/second', 'PageController@index')->name('second');
Route::get('/sec', 'PostController@store')->name('sec');
Route::post('/form','PageController@store');
Route::get('/form/messages','ChatController@');

Route::resource('/posts','PageController@store');
