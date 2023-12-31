<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [HomeController::class,'about']);
Route::get('/service', [HomeController::class,'service']);
Route::get('/why', [HomeController::class,'why']);
Route::get('/product', [HomeController::class,'product']);