<?php

use Illuminate\Support\Facades\Route;



Route::get('/', "OminiController@index")->name("home");
Route::get('/show/{id}', "OminiController@show")->name("show");
Route::get('/delete/{id}', "OminiController@delete")->name("delete");
