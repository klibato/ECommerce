<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;




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


// Connexion //

Route::middleware('auth')->group(function () {
    Route::get('/panier', [PanierController::class, 'panier']);
    Route::get('/deconnexion', [LoginController::class, 'deconnexion']);

    Route::middleware('admin')->group(function (){
        Route::get('/admin', [AdminController::class, 'admin']);
        Route::post('/admin', [ProduitController::class, 'add']);
    });
});


// Création d'un compte // 
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'register']);
    Route::post('register', [RegisterController::class, 'save']);
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

});

// Affichage //

Route::get('/', [HomeController::class, 'home']);

Route::get('/catalogue', [CatalogueController::class, 'catalogue']);
Route::get('/produit/{id}', [ProduitController::class, 'produit']);
Route::post('/produit', [ProduitController::class, 'addtocart']);
Route::post('/deleteproduct', [ProduitController::class, 'deletefromcart']);
Route::get('/reset', [ResetController::class, 'reset']);
