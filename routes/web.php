<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GenresController;

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

Route::get('/movies',[MovieController::class, 'index']);
Route::get('/movies/create',[MovieController::class, 'create']);
Route::get('/movies/{id}',[MovieController::class, 'show'])->name('single-movie-route');
Route::post('/movies', [MovieController::class, 'store']);

Route::post('/movies/{id}/comments', [CommentController::class, 'store']);

Route::get('/genre/:{genre}', [GenresController::class, 'show'])->name('genre-route');



