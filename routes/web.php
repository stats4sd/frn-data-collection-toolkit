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

// Setup RESTful API routes for contact form
Route::resource('contact', 'ContactController', ['only' => ['index','store']]);

Route::get('{page}', function($page) {
    return view($page);
});