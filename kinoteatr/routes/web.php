<?php

use App\Http\Controllers\CinemaController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\TestController;
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

//Route::get('index', [HallController::class, 'hall']);
//Route::resource('test', TestController::class, );
//Route::get('show', [TestController::class,'someMethod']);
//Route::get('show', [TestController::class,'someMethod']);
//Route::get('show', [TestController::class,'show']);
//Route::post('testshow', [TestController::class,'someMethod']);
//Route::resource('show', TestController::class );

//Route::get('people', 'TestController@index');
//Route::get('people/{lastName}', [TestController::class,'show']);
//Route::get('people/{firstName}', [TestController::class,'show']);
//Route::resource('showindex', TestController::class);
Route::get('/contact', [ContactUsFormController::class, 'createForm']);

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
//Route::post('/contact', [ContactUsFormController::class, 'ContactAllForm'])->name('contact.store');
