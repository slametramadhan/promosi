<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromosiController;

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

Route::get('/promosis',[PromosiController::class,'index']);
Route::get('/promosis/create',[PromosiController::class,'create']);
Route::post('/promosis',[PromosiController::class,'store']);
Route::get('/promosis/{id}/edit',[PromosiController::class,'edit']);
Route::put('/promosis/{id}',[PromosiController::class,'update']);
Route::delete('/promosis/{id}',[PromosiController::class,'destroy']);