<?php

use App\Http\Controllers\DiscountController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\type\SandwichController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PizzaHivaController;
use \App\Http\Controllers\FastfoodAtavichController;
use \App\Http\Controllers\type\ListFoodsController;

use \App\Http\Controllers\FastfoodCretishingController;


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
Route::group(['middleware' => 'user.type:مشتری'], function () {
    Route::get('/customer/dashboard', [App\Http\Controllers\Controller::class, 'dashboard'])->name('customer.dashboard');
});
Route::prefix('/')->group(function(){
    Route::get('index',[App\Http\Controllers\Controller::class,'index'])->name('index');
    Route::get('',[App\Http\Controllers\Controller::class,'home'])->name('home');


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
    Route::post('/edit/{id}',[PizzaHivaController::class,'edit'])->name('restaurant.edit');
    Route::put('update/{id}/update',[PizzaHivaController::class,'update'])->name('restaurant.update');
    Route::delete('/restaurants/{id}', [PizzaHivaController::class, 'destroy'])->name('restaurant.destroy');

});
Route::prefix('/fastfood')->group(function () {
    Route::get('/',[FastfoodAtavichController::class,'index'])->name('FastFoodAtavich');
    Route::get('/create',[FastfoodAtavichController::class,'create'])->name('fastfood.create');
    Route::post('/store',[FastfoodAtavichController::class,'store'])->name('fastfood.store');
    Route::get('/edit/{id}',[FastfoodAtavichController::class,'edit'])->name('fastfood.edit');
    Route::put('update/{id}/update',[FastfoodAtavichController::class,'update'])->name('fastfood.update');
    Route::delete('fastfoods/{id}', [FastfoodAtavichController::class, 'destroy'])->name('fastfood.destroy');
});
//Route::prefix('/Boof')->middleware("CheckRole:admin")->group(function () {
//    Route::get('/',[FastfoodCretishingController::class,'index'])->name('FastFoodBoof');
//    Route::get('/create',[FastfoodCretishingController::class,'create'])->name('Boof.create');
//    Route::post('/store',[FastfoodCretishingController::class,'store'])->name('Boof.store');
//    Route::get('/edit/{id}',[FastfoodCretishingController::class,'edit'])->name('Boof.edit');
//    Route::put('update/{id}/update',[FastfoodCretishingController::class,'update'])->name('Boof.update');
//    Route::delete('Boof/{id}', [FastfoodCretishingController::class, 'destroy'])->name('Boof.destroy');
//});
Route::prefix('/Boof')->middleware("checkRole:مشتری")->group(function () {
    Route::get('/', [FastfoodCretishingController::class, 'index'])->name('FastFoodBoof');
    Route::get('/create', [FastfoodCretishingController::class, 'create'])->name('Boof.create');
    Route::post('/store', [FastfoodCretishingController::class, 'store'])->name('Boof.store');
    Route::get('/edit/{id}', [FastfoodCretishingController::class, 'edit'])->name('Boof.edit');
    Route::put('/update/{id}', [FastfoodCretishingController::class, 'update'])->name('Boof.update');
    Route::delete('/{id}', [FastfoodCretishingController::class, 'destroy'])->name('Boof.destroy');
});

//Route::prefix('/ListFoods')->group(function () {
//    Route::get('/pizza',[ListFoodsController::class,'pizza'])->name('Pizza');
//    Route::get('/sandwich',[ListFoodsController::class,'sandwich'])->name('Sandwich');
//});

Route::prefix('cart')->group(function () {

    Route::post('/add/{id}',[ProductController::class,'addToCart'])->name('cart');
    Route::get('/show',[productController::class,'showCart'])->name('cart.show');
});
