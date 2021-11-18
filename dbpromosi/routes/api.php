<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromosiApiController;
use App\Http\Controllers\UserApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/promosis',[PromosiApiController::class,'index']);
Route::get('/promosis/abc',[PromosiApiController::class,'abc']);
Route::get('/promosis/untuk',[PromosiApiController::class,'untuk']);
Route::get('/promosis/jenis',[PromosiApiController::class,'jenis']);
Route::get('/promosis/expired',[PromosiApiController::class,'expired']);
Route::get('/users',[UserApiController::class,'index']);
Route::post('/promosis',[PromosiApiController::class,'store']);
Route::get('/promosis/{id}',[PromosiApiController::class,'show']);
Route::put('/promosis/{id}',[PromosiApiController::class,'update']);
Route::delete('/promosis/{id}',[PromosiApiController::class,'destroy']);

