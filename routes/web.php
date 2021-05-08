<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecettesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RecipesController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);


Route::get('/recettes', [RecettesController::class, 'main' ]);
Route::get('/recipes/{url}',[RecettesController::class, 'show']);


Route::get('/contact', [ContactController::class, 'index' ]);

Route::post('/contact', [ContactController::class, 'store']);

Route::resource('/recipes', RecipesController::class);

