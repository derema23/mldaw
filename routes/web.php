<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('Front.accueil');
});

// Route::get('/dashboard', function () {
//     return view('Back.dashboard');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//  <///////////////////////////////////////////////////////////////////////////////////////////////////

//                                           ROUTE DU BACKOFFICE

// <////////////////////////////////////////////////////////////////////////////////////////////////////>


Route::group(["namespace" => "App\Http\Controllers\BackOffice"], function () {

    Route::match(['get', 'post'], "/dashboard", [
        "as" => "dashboard",
        "uses" => "AdminController@dashboard"
    ]);

    Route::match(['get', 'post'], "/ajouterPro", [
        "as" => "ajout-producteur",
        "uses" => "ProducteurController@ajouterPro"
    ]);
});


//  <///////////////////////////////////////////////////////////////////////////////////////////////////

//                                           ROUTE DU FrontOffice

// <////////////////////////////////////////////////////////////////////////////////////////////////////>
