<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('welcome');
});

/*Getters project*/
Route::get( '/categories', [ CategoryController::class, 'index' ] );
Route::get( '/categories/create', [ CategoryController::class, 'create' ] );

/*Posts project*/
Route::post( '/categories', [ CategoryController::class, 'store' ] );

/*Deletes project*/
Route::delete( '/categories', [ CategoryController::class, 'destroy' ] );

