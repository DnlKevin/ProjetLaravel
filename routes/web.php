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
/*
Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\HomeController;
Route::get('/welcome', [HomeController::class, 'index']);

use App\Http\Controllers\RecettesController;
Route::get('/recettes', [RecettesController::class, 'index' ]);

use App\Http\Controllers\ContactController;
Route::get('/contact', [ContactController::class, 'index' ]);

