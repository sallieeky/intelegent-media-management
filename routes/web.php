<?php

use App\Http\Controllers\LandingController;
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

Route::get('/', [LandingController::class, 'index']);
Route::get('/berita-nasional', [LandingController::class, 'nasional']);
Route::get('/berita-internasional', [LandingController::class, 'internasional']);

Route::get('/kategori/{kategori}', [LandingController::class, 'kategori']);
