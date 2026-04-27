<?php
use Illuminate\Support\Facades\Route;
Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('/foods', [App\Http\Controllers\FoodController::class, 'food']);
Route::get('/food/show/{id}', [App\Http\Controllers\FoodController::class, 'foodShow']);
Route::get('/restaurants', [App\Http\Controllers\RestaurantController::class, 'restaurant']);
Route::get('/restaurant/show/{id}', [App\Http\Controllers\RestaurantController::class, 'restaurantShow']);
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'category']);
Route::get('/category/show/{id}', [App\Http\Controllers\CategoryController::class, 'categoryShow']);