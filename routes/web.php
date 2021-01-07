<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\NavlinkController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VideoController;
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
Route::get('/service', [MainController::class, 'services']);
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

/*moto controller*/
Route::get('/edit_moto', [MotoController::class, 'index']);
Route::post('/update_moto', [MotoController::class, 'update']);

/*services controller*/
Route::get('/services', [ServiceController::class, 'index']);
Route::post('/add_services', [ServiceController::class, 'store']);
Route::get('/delete_services/{id}', [ServiceController::class, 'destroy']);
Route::get('/edit_services/{id}', [ServiceController::class, 'edit']);
Route::post('/update_services/{id}', [ServiceController::class, 'update']);

/*presentation controller*/
Route::get('/edit_presentation', [PresentationController::class, 'index']);
Route::post('/update_presentation/{id}', [PresentationController::class, 'update']);

/*video controller*/
Route::get('/video', [VideoController::class, 'index']);
Route::post('/update_video', [VideoController::class, 'update']);

/*testimonials controller*/
Route::get('/testimonials', [TestimonialController::class, 'index']);
Route::post('/add_testimonials', [TestimonialController::class, 'store']);
Route::get('/delete_testimonials/{id}', [TestimonialController::class, 'destroy']);
Route::get('/edit_testimonials/{id}', [TestimonialController::class, 'edit']);
Route::post('/update_testimonials/{id}', [TestimonialController::class, 'update']);

/*teams controller*/
Route::get('/teams', [TeamController::class, 'index']);
Route::post('/add_teams', [TeamController::class, 'store']);
Route::get('/delete_teams/{id}', [TeamController::class, 'destroy']);
Route::get('/edit_teams/{id}', [TeamController::class, 'edit']);
Route::post('/update_teams/{id}', [TeamController::class, 'update']);

/*contact form controller*/
Route::get('/contactForm', [ContactFormController::class, 'index']);
Route::post('/update_contactForm', [ContactFormController::class, 'update']);



/*mail*/
Route::post('/mail_sending', [MailController::class, 'store']);