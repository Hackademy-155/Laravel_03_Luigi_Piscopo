<?php

use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\ControllerProdotti;
use Illuminate\Support\Facades\Route;


// home-page //
Route::get('/',[ControllerHome::class, 'home'])->name('home');


// prodotti //

Route::get('home-page/prodotti',[ControllerProdotti::class, 'prodotti'])->name('prodotti'); 

Route::get('home-page/prodotti/{id}', [ControllerProdotti::class, 'dettaglio'])->name('dettaglio');