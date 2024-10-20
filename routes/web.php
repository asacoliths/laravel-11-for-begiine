<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
The block above can stil be written as
Route::view('/','welcome');
*/
