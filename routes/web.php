<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\LogoutController;

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

// Route::get('/', 'pages.auth.login');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
Route::post('/logout',[LogoutController::class, 'logout'])->name('logout');


Route::get('/produits',[ProduitController::class, 'index'])->name('produits');
Route::get('/addProduits', [ProduitController::class, 'create'])->name('produits.create');
Route::post('/save', [ProduitController::class, 'store'])->name('save');
Route::get('/showProduits', [ProduitController::class, 'show'])->name('produits.show');
Route::get('/editProduits', [ProduitController::class, 'edit'])->name('produits.edit');
Route::get('/updateProduits', [ProduitController::class, 'update'])->name('produits.update');
Route::get('/delProduits', [ProduitController::class, 'delete'])->name('produits.destroy');

//-------------------------------------------------------------------------------------------
use App\Http\Controllers\CategorieController;
Route::get('categories', [CategorieController::class,'index'])->name('categories');
