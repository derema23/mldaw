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

//Creer un raccourci du dossier Storage dans le dossier Public dans le Cpanel
Route::get('/symlink', function () {
    $targetFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage/app/public';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/public/storage';
    symlink($targetFolder, $linkFolder);
    return 'Symlink process successfully completed';
});

Route::get('/', function () {
    return view('Front.accueil');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//  <///////////////////////////////////////////////////////////////////////////////////////////////////

//                                           ROUTE DU BACKOFFICE

// <////////////////////////////////////////////////////////////////////////////////////////////////////>

Route::group(["namespace" => "App\Http\Controllers\BackOffice"], function () {

    // Route detail Offre
    Route::match(['get', 'post'], "/details/{id?}", [
        "as" => "details-offre",
        "uses" => "OffreController@details"
    ]);

    Route::match(['get', 'post'], "AddAdmin", [
        "as" => "add-admin",
        "uses" => "AdminController@AddAdmin"
    ]);

    // route page register vendeur
    Route::match(['get', 'post'], "AddUser", [
        "as" => "add-user",
        "uses" => "AdminController@AddUser"
    ]);


    // Partie Offre
    Route::match(['get', 'post'], "/AfficherOffre", [
        "as" => "list-offre",
        "uses" => "OffreController@AfficherOffre"
    ]);

    Route::match(['get', 'post'], "/ZapLink/{id}", [
        "as" => "achat-whatsapp",
        "uses" => "OffreController@AchatWhatsapp"
    ]);
});

// Groupe mmiddleware pour empêcher accès aux pages sans se connecter
Route::middleware(['auth'])->group(function () {

    Route::group(["namespace" => "App\Http\Controllers\BackOffice"], function () {

        Route::match(['get', 'post'], "/dashboard", [
            "as" => "dashboard",
            "uses" => "AdminController@dashboard"
        ]);

        Route::match(['get', 'post'], "/ajouterPro", [
            "as" => "ajout-producteur",
            "uses" => "ProducteurController@ajouterPro"
        ]);
        Route::match(['get', 'post'], "AddPro", [
            "as" => "add-producteur",
            "uses" => "ProducteurController@AddPro"
        ]);
        Route::match(['get', 'post'], "ListePro", [
            "as" => "list-producteur",
            "uses" => "ProducteurController@ListePro"
        ]);

        Route::match(['get', 'post'], "AddOffre", [
            "as" => "add-offre",
            "uses" => "OffreController@AddOffre"
        ]);
        Route::match(['get', 'post'], "/AjouterOffre", [
            "as" => "ajouter-offre",
            "uses" => "OffreController@AjouterOffre"
        ]);
    });
});

//  <///////////////////////////////////////////////////////////////////////////////////////////////////

//                                           ROUTE DU FrontOffice

// <////////////////////////////////////////////////////////////////////////////////////////////////////>

Route::group(["namespace" => "App\Http\Controllers\FrontOffice"], function () {

    // route A Propos
    Route::match(['get', 'post'], "/About", [
        "as" => "about",
        "uses" => "FrontController@About"
    ]);

    Route::match(['get', 'post'], "/RegisterVendeur", [
        "as" => "add-vendeur",
        "uses" => "VendeurController@RegisterVendeur"
    ]);

    // route page register vendeur
    Route::match(['get', 'post'], "AddUser", [
        "as" => "add-user",
        "uses" => "VendeurController@AddUser"
    ]);
});
