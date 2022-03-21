<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [ArticlesController::class,'index']);
Route::get('/create', [ArticlesController::class,'create']);
Route::post('/add', [ArticlesController::class,'add']);
Route::get('/edit/{id}', [ArticlesController::class,'edit']);
Route::post('/update', [ArticlesController::class,'update']);
Route::post('/delete', [ArticlesController::class,'delete']);
