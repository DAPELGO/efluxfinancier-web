<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/acceuil', 'HomeController@index')->name('app.home');
Route::get('/', [LoginController::class, 'userLogin'])->name('user.login');

// Livres
Route::resource('livres', 'LivreController');
// Creance-dettes
Route::resource('creancedettes', 'CreanceDetteController');
// Paiements
Route::resource('paiements', 'PaiementController');
// Structures
Route::resource('structures', 'StructureController');
// Users
Route::resource('users', 'UserController');
// Roles
Route::resource('roles', 'RoleController');
// Permissions
Route::resource('permissions', 'PermissionController');
// Parametres
Route::resource('parametres', 'ParametreController');
// Valeurs
Route::resource('valeurs', 'ValeurController');
// Exercices
Route::resource('exercices', 'ExerciceController');

// Selection
Route::get('/selection', 'HomeController@selection')->name('root.selection');

// Payment creante - dette
Route::get('/creancedette/{id}', 'CreanceDetteController@payment')->name('creancedette.payment');
// Payment creante - dette
Route::post('/creancedette/{id}', 'CreanceDetteController@payer')->name('creancedette.payer');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
