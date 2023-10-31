<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/**
 * routes de la partie cliente
 */
Route::get('/home', [ClientController::class, 'home'])->name('client.home');
Route::get('/' ,function(){ return view('welcome'); });

/**
 * route de la partie login/administration
 */
