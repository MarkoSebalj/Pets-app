<?php

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
    return view('welcome');
});

Route::resource('countries', CountryController::class);
Route::resource('users', UserController::class);
Route::resource('allergies', AllergyController::class);
Route::resource('calendars', CalendarController::class);
Route::resource('images', ImageController::class);
Route::resource('medical_conditions', Medical_ConditionController::class);
Route::resource('pet_types', Pet_TypeController::class);
Route::resource('pets', PetController::class);
Route::resource('veterinarian_visits', Veterinarian_VisitController::class);
