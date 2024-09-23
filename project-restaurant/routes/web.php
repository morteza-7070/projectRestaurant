<?php

use App\Http\Controllers\DiscountController;
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

Route::get('/', function () {
    return view('index');
});
Route::prefix('/')->group(function(){
    Route::get('index',[App\Http\Controllers\Controller::class,'index'])->name('index');
});
Route::prefix('/discount')->group(function () {
    Route::get('/',[DiscountController::class,'index'])->name('discount');
    Route::get('/create',[DiscountController::class,'create'])->name('discount.create');
    Route::post('/store',[DiscountController::class,'store'])->name('discount.store');
    Route::get('/edit/{id}',[DiscountController::class,'edit'])->name('discount.edit');
    Route::put('update/{id}/update',[DiscountController::class,'update'])->name('discount.update');
    Route::delete('/discounts/{id}', [DiscountController::class, 'destroy'])->name('discount.destroy');
});
Route::prefix('/restaurant')->group(function () {
    Route::get('/',[\App\Http\Controllers\PizzaHivaController::class,'index'])->name('FastFoodHiva');
});
