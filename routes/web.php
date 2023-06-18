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

// Parametres
Route::resource('parametres', 'ParametreController');
// Valeurs
Route::resource('valeurs', 'ValeurController');
// Comptes
Route::resource('comptes', 'CompteController');
// DetailTransactions
Route::resource('detailTransactions', 'DetailTransactionController');
// Livres
Route::resource('livres', 'LivreController');
// Structures
Route::resource('structures', 'StructureController');
// Transactions
Route::resource('Transactions', 'TransactionController');
// Users
Route::resource('users', 'UserController');
// Users
Route::resource('users', 'UserController');
// Permissions
Route::resource('permissions', 'PermissionController');
// Roles
Route::resource('roles', 'RoleController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
