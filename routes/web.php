<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
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

//! ROTTE HOME PAGE
Route::get('/',[HomeController::class, 'index'])->name('home');

//!ROTTE POSTS
Route::get('/articoli/aggiungi',[ArticleController::class, 'create'])->name('aggiungiArticolo');
Route::post('/articoli/aggiungi',[ArticleController::class, 'store'])->name('salvaArticolo');


Route::delete('/articoli/elimina/{id}',[ArticleController::class, 'destroy'])->name('eliminaArticolo');


Route::get('/articoli/modifica/{id}',[ArticleController::class, 'edit'])->name('modificaArticolo');
Route::put('/articoli/salva/{id}',[ArticleController::class, 'update'])->name('salvaModificheArticolo');

