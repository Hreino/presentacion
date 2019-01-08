<?php

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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/coaching', 'BudgetController@coaching')->name('coaching')->middleware('coach');

Route::resource('users', 'UserController');
Route::resource('budget', 'BudgetController'); 
Route::resource('income', 'IncomeController'); 
Route::resource('dwelling', 'DwellingController'); 
Route::resource('transport', 'TransportOrCarsController'); 
Route::resource('food', 'FoodController'); 
Route::resource('saving', 'SavingsController'); 
Route::resource('debts', 'DebtsController'); 
Route::resource('entertainment', 'EntertainmentController'); 
Route::resource('clothing', 'ClothingController'); 
Route::resource('health', 'HealthController'); 
Route::resource('insurances', 'InsurancesController'); 
Route::resource('education', 'EducationController'); 
Route::resource('other', 'MiscellaneousController'); 





