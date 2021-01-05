<?php

use Illuminate\Support\Facades\Auth;
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
    return view('pages.home');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
