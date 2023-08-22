<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiteController::class, 'index'])->name('homepage');

Route::prefix('movies/')
    ->controller(MoviesController::class, 'index')
    ->name('movies.')
    ->group(
        function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{movie}', 'show')->name('show');
        }
    );
