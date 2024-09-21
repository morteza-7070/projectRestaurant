<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 use \App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/customers')->group(function(){
    Route::get('/', [CustomerController::class,'index'])->name('restaurants.index');
    Route::get('/create',[CustomerController::class,'create'])->name('restaurants.create');
    Route::post('/store',[CustomerController::class,'store'])->name('restaurants.store');

});
