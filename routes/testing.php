<?php

Route::get('/',function(){
    return view('');
});

Route::get('/testing','TestingController@index');