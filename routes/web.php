<?php

use Illuminate\Support\Facades\Route;



Route::get('/testpage', function () {
    return view('welcome');
});

Route::get('/new','TestController@controllerMetod');


Route::any('/{slug}', function () {
    return view('welcome');
});
