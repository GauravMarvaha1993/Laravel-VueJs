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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// https://codesource.io/build-a-crud-application-using-laravel-and-vue/
Route::post('/storeCar','App\Http\Controllers\CarsController@storeCar');
Route::get('/getCars', 'App\Http\Controllers\CarsController@getCars');
Route::post('/deleteCar/{id}', 'App\Http\Controllers\CarsController@deleteCar');
Route::post('/editCars/{id}', 'App\Http\Controllers\CarsController@editCar');