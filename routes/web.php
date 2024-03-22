<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ServiceController::class,'index']);
Route::get('/add-service',[ServiceController::class,'addService']);
Route::post('/store/service',[ServiceController::class,'storeService']);
Route::get('/service/{service}',[ServiceController::class,'show']);
Route::get('/service/delete/{service}',[ServiceController::class,'destroy']);
Route::get('/service/edit/{service}',[ServiceController::class,'edit']);
Route::post('/service/update/{service}',[ServiceController::class,'storeUpdate']);
Route::get('/show-service',[ServiceController::class,'showService']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout','\App\Http\Controllers\Auth\AuthenticatedSessionController@destroy');

});

