<?php
use Illuminate\Support\Facades\Route;
Route::prefix('api')->group(function () {
    Route::get('/', function() {
        return 'API route for Shop';
    });
});