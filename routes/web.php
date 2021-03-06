<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Projet;
use App\Tache;

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

Route::get('/', function(){
    return redirect('/users');
});

Route::resource('/users', 'UserController');

Route::resource('/projets', 'ProjetController');

Route::resource('/taches', 'TacheController');