<?php

use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\FilmController;
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
    return view('welcome');
});

//test

Route::get('index', [FilmController::class, 'hall']);

Route::get('/contact', [ContactUsFormController::class, 'createForm']);

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
Route::get('/show/{id}', [ContactUsFormController::class, 'show'])->name('contact.show');
Route::get('/showcinema/{id}', [ContactUsFormController::class, 'showСinema'])->name('contact.showСinema');

