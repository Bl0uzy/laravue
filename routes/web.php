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
    return view('home');
});
Route::get('/login', function () {
    return view('layouts/app');
});

Route::get('/tasksList', 'App\Http\Controllers\TaskController@index');
Route::get('/tasks/edit/{id}', 'App\Http\Controllers\TaskController@edit');
Route::patch('/tasks/edit/{id}', 'App\Http\Controllers\TaskController@update');
Route::post('/tasksList', 'App\Http\Controllers\TaskController@store');
Route::delete('/tasks/{id}', 'App\Http\Controllers\TaskController@destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
