<?php

use App\Http\Controllers\webCoffeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[webCoffeController::class , 'index']);
Route::get('/about',[webCoffeController::class, 'about']);
Route::get('/menu', [webCoffeController::class, 'menu']);
Route::get('/beanstory', [webCoffeController::class, 'beanstory']);
Route::get('/contact', [webCoffeController::class, 'contact']);
Route::get('/item/{id}', [webCoffeController::class, 'productDetail']);