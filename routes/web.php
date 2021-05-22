<?php

use Illuminate\Support\Facades\Route;

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
    return view('home_0304');
})->name('home');

Route::get('/article', function () {
    return view('article_0304');
})->name('article');

Route::get('/contact', function () {
    return view('contact_0304');
})->name('contact');


