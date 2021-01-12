<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CenterTeamController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\NavlinkController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\PrimeServiceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceTitleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamTitleController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VideoController;
use App\Models\ServiceTitle;
use App\Models\TeamTitle;
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

/*teams title controller*/
Route::get('/teamsTitle', [TeamTitleController::class, 'index']);
Route::post('update_teamsTitle', [TeamTitleController::class, 'update']);

/*teams controller*/
Route::get('/teams', [TeamController::class, 'index']);
Route::post('/add_teams', [TeamController::class, 'store']);
Route::get('/delete_teams/{id}', [TeamController::class, 'destroy']);
Route::get('/edit_teams/{id}', [TeamController::class, 'edit']);
Route::post('/update_teams/{id}', [TeamController::class, 'update']);

Route::post('/add_center', [TeamController::class, 'center']);

/*contact form controller*/
Route::get('/contactForm', [ContactFormController::class, 'index']);
Route::post('/update_contactForm', [ContactFormController::class, 'update']);

/*service title controller*/
Route::get('/serviceTitle', [ServiceTitleController::class, 'index']);
Route::post('/update_serviceTitle', [ServiceTitleController::class, 'update']);


/*prime services controller*/
Route::get('/primeServices', [PrimeServiceController::class, 'index']);
Route::post('/add_primeServices', [PrimeServiceController::class, 'store']);
Route::get('/delete_primeServices/{id}', [PrimeServiceController::class, 'destroy']);
Route::get('/edit_primeServices/{id}', [PrimeServiceController::class, 'edit']);
Route::post('/update_primeServices/{id}', [PrimeServiceController::class, 'update']);

/*mail contact*/
Route::post('/mail_sending', [MailController::class, 'store']);

/*tags controller*/
Route::get('/tags', [TagController::class, 'index']);
Route::post('/add_tags', [TagController::class, 'store']);
Route::get('/delete_tags/{id}', [TagController::class, 'destroy']);

/*articles controller*/
Route::get('/article', [ArticleController::class, 'index']);
Route::post('/add_article', [ArticleController::class, 'store']);