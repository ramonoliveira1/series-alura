<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Autenticador;
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

Route::resource('/series', SeriesController::class)
    ->except(['show']);
Route::middleware('autenticador')->group(function () {
    Route::get('/', function () {
        return redirect('/series');
    })->middleware(Autenticador::class);

    Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');

    Route::get('/seasons/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');
    Route::post('/seasons/{season}/episodes', [EpisodesController::class, 'watch'])->name('episodes.index');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('signin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [UsersController::class, 'create'])->name('register.form');
Route::post('/register', [UsersController::class, 'store'])->name('register');
