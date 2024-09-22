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
    Route::get('/show/{customer}', [CustomerController::class, 'show'])->name('restaurants.show');
    Route::post('/store',[CustomerController::class,'store'])->name('restaurants.store');
    Route::put('/update/{customer}',[CustomerController::class,'update'])->name('restaurants.update');
    Route::delete('/delete/{customer}', [CustomerController::class, 'destroy'])->name('restaurants.delete');

});
