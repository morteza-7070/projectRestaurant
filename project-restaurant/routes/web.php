<?php

use App\Http\Controllers\DiscountController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PizzaHivaController;

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
    Route::get('/',[PizzaHivaController::class,'index'])->name('FastFoodHiva');
    Route::get('/create',[PizzaHivaController::class,'create'])->name('restaurant.create');
    Route::post('/store',[PizzaHivaController::class,'store'])->name('restaurant.store');
    Route::get('/edit/{id}',[PizzaHivaController::class,'edit'])->name('restaurant.edit');
    Route::put('update/{id}/update',[PizzaHivaController::class,'update'])->name('restaurant.update');
    Route::delete('/restaurants/{id}', [PizzaHivaController::class, 'destroy'])->name('restaurant.destroy');

});
