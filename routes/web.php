<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Offre;

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
    $offres = Offre::orderByDesc('id')->limit(4)->get();
    return view('Front.accueil')->with('offres', $offres);
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
    Route::match(['get', 'post'], "/OffreCategorie/{categorie}", [
        "as" => "tri-offre",
        "uses" => "OffreController@rechOffreCategorie"
    ]);
    Route::match(['get', 'post'], "/OffreClasse/{classe}", [
        "as" => "tri-offre",
        "uses" => "OffreController@rechOffreClasse"
    ]);
    Route::match(['get', 'post'], "/ZapLink/{id}", [
        "as" => "achat-whatsapp",
        "uses" => "OffreController@AchatWhatsapp"
    ]);
    Route::match(['get', 'post'], "RechOffre", [
        "as" => "recherche-offre",
        "uses" => "OffreController@RechOffre"
    ]);
});

// Groupe mmiddleware pour empêcher accès aux pages sans se connecter
Route::middleware(['auth'])->group(function () {

    Route::group(["namespace" => "App\Http\Controllers\BackOffice"], function () {

        Route::match(['get', 'post'], "/dashboard", [
            "as" => "dashboard",
            "uses" => "AdminController@dashboard"
        ]);
        Route::match(['get', 'post'], "/listUser", [
            "as" => "liste-Utilisateur",
            "uses" => "AdminController@listUser"
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
        Route::match(['get', 'post'], "/ModifierOffre/{id}", [
            "as" => "modifier-offre",
            "uses" => "OffreController@modifierOffre"
        ]);
        Route::match(['get', 'post'], "editOffre", [
            "as" => "edit-offre",
            "uses" => "OffreController@editOffre"
        ]);
        Route::match(['get', 'post'], "/listOffre", [
            "as" => "list-offre",
            "uses" => "OffreController@listOffre"
        ]);
        Route::match(['get', 'post'], "/PlusInfosOffre/{id}", [
            "as" => "plus-info-offre",
            "uses" => "OffreController@PlusInfosOffre"
        ]);
        Route::match(['get', 'post'], "/SupprimerOffre/{id}", [
            "as" => "delete-offre",
            "uses" => "OffreController@SupprimerOffre"
        ]);
        Route::match(['get', 'post'], "/MesOffres/{id}", [
            "as" => "mes-offres",
            "uses" => "OffreController@MesOffres"
        ]);
        Route::match(['get', 'post'], "searchOffreback", [
            "as" => "search-offre",
            "uses" => "OffreController@SearchOffreback"
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

    // PARTIE PANIER
    Route::match(['get', 'post'], "/ajout_panier/{id}", [
        "as" => "add-panier",
        "uses" => "PanierController@ajout_panier"
    ]);
    Route::match(['get', 'post'], "/panier", [
        "as" => "Mon-panier",
        "uses" => "PanierController@cart"
    ]);
    Route::match(['get', 'post'], "/supprimer_panier/{id}", [
        "as" => "delete-from-panier",
        "uses" => "PanierController@supprimer_panier"
    ]);
    Route::match(['get', 'post'], "/modifier_qty/{id}", [
        "as" => "edit-qty-panier",
        "uses" => "PanierController@modifier_qty"
    ]);
    Route::match(['get', 'post'], "/Commander", [
        "as" => "commander-panier",
        "uses" => "PanierController@Commander"
    ]);
});
