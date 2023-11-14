<?php


use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;


Route::controller(ProduitController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/produit/create', 'create');
    Route::get('/produit/{id}', 'show');
    Route::get('/produit/{id}/edit', 'edit');


    Route::post('/produit', 'store');
    Route::patch('/produit/{id}', 'update');
    Route::delete('/produit/{id}', 'destroy');

});
