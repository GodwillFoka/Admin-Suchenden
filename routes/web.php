<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\KlasseController;
use App\Http\Controllers\RentreeController;
use App\Http\Controllers\TrancheController;
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

Route::get('/', function () {
    return view('home');
    // return view('welcome');
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('rentree')->name('rentree.')->group(function () {
        Route::get('/', [RentreeController::class, 'index'])->name('index');
        Route::get('/create', [RentreeController::class, 'create'])->name('create');
        Route::get('/{rentree}/edit', [RentreeController::class, 'edit'])->name('edit');
        Route::post('/{rentree}', [RentreeController::class, 'update'])->name('update');
        Route::delete('/{rentree}', [RentreeController::class, 'destroy'])->name('delete');
        Route::post('/', [RentreeController::class, 'store'])->name('store');
    });
    Route::prefix('etudiant')->name('etudiant.')->group(function () {
        Route::get('/', [EtudiantController::class, 'index'])->name('index');
        Route::get('/create', [EtudiantController::class, 'create'])->name('create');
        Route::get('/{etudiant}/edit', [EtudiantController::class, 'edit'])->name('edit');
        Route::post('/{etudiant}', [EtudiantController::class, 'update'])->name('update');
        Route::get('/{etudiant}', [EtudiantController::class, 'show'])->name('show');
        Route::delete('/{etudiant}', [EtudiantController::class, 'destroy'])->name('delete');
        Route::post('/', [EtudiantController::class, 'store'])->name('store');
    });

    Route::prefix('klasse')->name('klasse')->group(function () {
        Route::get('/', [KlasseController::class, 'index'])->name('index');
        Route::get('/create', [KlasseController::class, 'create'])->name('create');
        Route::get('/{klasse}/edit', [KlasseController::class, 'edit'])->name('edit');
        Route::post('/{klasse}', [KlasseController::class, 'update'])->name('update');
        Route::delete('/{klasse}', [KlasseController::class, 'destroy'])->name('delete');
        Route::post('/', [KlasseController::class, 'store'])->name('store');
    });

    Route::prefix('formation')->name('formation.')->group(function () {
        Route::get('/', [FormationController::class, 'index'])->name('index');
        Route::get('/create', [FormationController::class, 'create'])->name('create');
        Route::get('/{formation}/edit', [FormationController::class, 'edit'])->name('edit');
        Route::post('/{formation}', [FormationController::class, 'update'])->name('update');
        Route::delete('/{formation}', [FormationController::class, 'destroy'])->name('delete');
        Route::post('/', [FormationController::class, 'store'])->name('store');
    });

    Route::prefix('tranche')->name('tranche.')->group(function () {
        Route::get('/', [TrancheController::class, 'index'])->name('index');
        Route::get('/create', [TrancheController::class, 'create'])->name('create');
        Route::get('/{tranche}/edit', [TrancheController::class, 'edit'])->name('edit');
        Route::post('/{tranche}', [TrancheController::class, 'update'])->name('update');
        Route::delete('/{tranche}', [TrancheController::class, 'destroy'])->name('delete');
        Route::post('/', [TrancheController::class, 'store'])->name('store');
    });
});
