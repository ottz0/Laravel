<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CategoryController::class, 'index']);

Route::get('/marketplace', [CategoryController::class, 'index']);
Route::get('/marketplace/{categories}', [CategoryController::class, 'show']);
Route::get('/marketplace/{categories}/{subCategory}', [CategoryController::class, 'subCategory']);
Route::get('/marketplace/{categories}/{subCategory}/{article}', [ArticleController::class, 'show']);
