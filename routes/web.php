<?php

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

Route::get('/', function () {                                                               // Le chemin "/" dans la barre de navigation retournera la vue "welcome.blade.php"
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');                                  // En plus de nommer un chemin, on appelle la méthode "index" du controller "HomeController",
                                                                                            // puis on nomme la route "home" pour les prochains appels dans notre application
// C.R.U.D.

// READ
Route::get('/profiles', 'ProfilesController@readProfiles')->name('profiles');

Route::middleware(['auth'])->group(function () {                                            // Groupe de routes sécurisé par la condition d'authentification
    // CREATE                                                                               // Si la personne n'est pas connecté, elle n'a pas accès à ces routes
    Route::get('/create', 'ProfilesController@createProfiles')->name('create');
    Route::post('/store', 'ProfilesController@storeProfile')->name('store');                // Création d'une route en méthode POST pour l'envoi d'informations

    // UPDATE
    Route::get('/edit/{id}', 'ProfilesController@editProfile')->name('edit');               // On ajoute ici "/{id}" pour que notre route soit dynamique
    Route::post('/update/{id}', 'ProfilesController@updateProfile')->name('update');        // et donc créer une route correspondante à chaque id 

    // DELETE
    Route::post('/delete/{id}', 'ProfilesController@deleteProfile')->name('delete');
});

