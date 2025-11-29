<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('customers', CustomerController::class);
Route::resource('customers', ActivityController::class);
Route::resource('customers', ExerciseController::class);
Route::resource('customers', FoodController::class);
Route::resource('customers', MealController::class);
