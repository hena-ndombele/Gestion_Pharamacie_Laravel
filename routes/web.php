<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntreeController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\SortieController;
use App\Http\Controllers\CategorieController;

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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/entree', [EntreeController::class,'index'])->name('entrees.index');
Route::get('/fournisseur', [FournisseurController::class,'index'])->name('fournisseurs.index');
Route::get('/fournisseur-delete/{id}', [FournisseurController::class,'destroy'])->name('fournisseurs.destroy');
Route::get('/sortie', [SortieController::class,'index'])->name('sorties.index');
Route::get('/categorie', [CategorieController::class,'index'])->name('categories.index');
Route::post('/store', [FournisseurController::class,'store'])->name('store');

//Route::get('/sortie', [SortieController::class,'index'])->name('entrees.index');

Route::post('/logout', 'Auth\AuthenticatedSessionController@logout')->name('logout');

require __DIR__.'/auth.php';
