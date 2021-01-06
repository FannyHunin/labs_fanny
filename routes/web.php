<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NavlinkController;
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

/*Main Controller*/
Route::get('/', [MainController::class, 'index']);
Route::get('/services', [MainController::class, 'services']);
Route::get('/blog', [MainController::class, 'blog']);
Route::get('/contact', [MainController::class, 'contact']);

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

/*icon controller*/
Route::get('/edit_icon', [IconController::class, 'index']);
Route::post('/add_icon', [IconController::class, 'store']);
Route::get('/delete_icon', [IconController::class, 'destroy']);

/*navlink controller*/
Route::get('edit_navlinks', [NavlinkController::class, 'index']);
Route::post('/add_link', [NavlinkController::class, 'store']);
Route::get('/edit_navlink', [NavlinkController::class, 'edit']);
Route::post('/update_link', [NavlinkController::class, 'update']);

/*carousel controller*/
Route::get('/carousel', [CarouselController::class, 'index']);
Route::post('/add_carousel', [CarouselController::class, 'store']);
Route::get('/delete_carousel/{id}', [CarouselController::class, 'destroy']);