<?php

use Domains\Shop\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;



Route::group( ['prefix' => 'shop' , 'as' => 'Shop::'] , function () {
    Route::get('', [CategoryController::class , 'index'])->name('module');
    Route::get('create', [CategoryController::class , 'create'])->name('create');
    Route::post('create', [CategoryController::class , 'createStore'])->name('create.store');
});
