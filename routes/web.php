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


Route::get('/home', function(){
    return view('index');
});

Route::get('/social', function(){
    return view('social');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/imageg', function(){
    return view('imageg');
});