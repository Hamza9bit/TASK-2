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

Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('management', \App\Http\Controllers\ManagementController::class);
Route::get('management/evaluate', [\App\Http\Controllers\ManagementController::class, 'evaluate']);

Route::resource('management', 'App\Http\Controllers\ManagementController');

Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');

