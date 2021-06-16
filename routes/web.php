<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
use App\Models\About;
use App\Models\Contact;
use App\Models\Hero;
use App\Models\Information;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Titre;
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
    $titres= Titre::all();
    $about = About::first();
    $heroes = Hero::all();
    $informations = Information::all();
    $portfolios = Portfolio::all();
    $services = Service::all();
    $contacts = Contact::all();
    $teams = Team::all();
    $testimonials = Testimonial::all();

return view('home',compact("titres","about","informations","heroes","services","contacts","teams","testimonials"));

});


Route::resource("/heroes",HeroController::class);

Route::resource("/abouts", AboutController::class);
Route::post("/abouts/{id}/download",[AboutController::class,"download"]);


Route::resource("/informations",InformationController::class);

Route::resource("/services", ServiceController::class);

Route::resource("/testimonials", TestimonialController::class);
Route::post("/testimonials/{id}/download",[TestimonialController::class,"download"]);

Route::resource("/contacts", ContactController::class);

Route::resource("/titres", TitreController::class);

Route::resource("/teams", TeamController::class);




