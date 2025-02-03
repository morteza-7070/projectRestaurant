<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\FastfoodCretishingController;
use App\Http\Controllers\FastfoodAtavichController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PizzaHivaController;
use App\Http\Controllers\ProductController;









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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/home',[Controller::class,'PageHome'])->name('homePage');
Route::prefix('/')->group(function () {
    Route::get('/',[GuestController::class,'index'])->name('guest.index');
    Route::get('/search', [GuestController::class, 'search'])->name('guest.search');
    Route::post('/',[GuestController::class,'store'])->name('guest.store');
    Route::post('/logout',function ()
    {
        \Illuminate\Support\Facades\Auth::logout();
        return redirect('/');
    })->name('logout');

});

Route::prefix('/')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/dashboard')->middleware(['auth','Role:مشتری,رستوران دار,ادمین'])->group(function(){
    Route::get('index',[Controller::class,'index'])->name('index');
    Route::get('/',[Controller::class,'home'])->name('home');
    Route::get('articles',[Controller::class,'article'])->name('article');
    Route::post('/',[IndexController::class,'store'])->name('store');

});
Route::prefix('/discount')->middleware(['auth','Role:ادمین,رستوران دار'])->group(function () {
    Route::get('/',[DiscountController::class,'index'])->name('discount');
    Route::get('/create',[DiscountController::class,'create'])->name('discount.create');
    Route::post('/store',[DiscountController::class,'store'])->name('discount.store');
    Route::get('/edit/{id}',[DiscountController::class,'edit'])->name('discount.edit');
    Route::put('update/{id}/update',[DiscountController::class,'update'])->name('discount.update');
    Route::delete('/discounts/{id}', [DiscountController::class, 'destroy'])->name('discount.destroy');
});
Route::prefix('/Heeva')->middleware(['auth','Role:ادمین,رستوران دار'])->group(function () {
    Route::get('/',[PizzaHivaController::class,'index'])->name('FastFoodHiva');
    Route::get('/create',[PizzaHivaController::class,'create'])->name('restaurant.create');
    Route::post('/store',[PizzaHivaController::class,'store'])->name('restaurant.store');
    Route::post('/edit/{id}',[PizzaHivaController::class,'edit'])->name('restaurant.edit');
    Route::put('update/{id}/update',[PizzaHivaController::class,'update'])->name('restaurant.update');
    Route::delete('/restaurants/{id}', [PizzaHivaController::class, 'destroy'])->name('restaurant.destroy');

});
Route::prefix('/Atavich')->middleware(['auth','Role:ادمین,رستوران دار'])->group(function () {
    Route::get('/',[FastfoodAtavichController::class,'index'])->name('FastFoodAtavich');
    Route::get('/create',[FastfoodAtavichController::class,'create'])->name('fastfood.create');
    Route::post('/store',[FastfoodAtavichController::class,'store'])->name('fastfood.store');
    Route::get('/edit/{id}',[FastfoodAtavichController::class,'edit'])->name('fastfood.edit');
    Route::put('update/{id}/update',[FastfoodAtavichController::class,'update'])->name('fastfood.update');
    Route::delete('fastfoods/{id}', [FastfoodAtavichController::class, 'destroy'])->name('fastfood.destroy');
});
Route::prefix('/bite')->middleware(['auth','Role:ادمین,رستوران دار'])->group(function () {
    Route::get('/',[FastfoodCretishingController::class,'index'])->name('FastFoodBoof');
    Route::get('/create',[FastfoodCretishingController::class,'create'])->name('Boof.create');
    Route::post('/store',[FastfoodCretishingController::class,'store'])->name('Boof.store');
    Route::get('/edit/{id}',[FastfoodCretishingController::class,'edit'])->name('Boof.edit');
    Route::put('update/{id}/update',[FastfoodCretishingController::class,'update'])->name('Boof.update');
    Route::delete('Boof/{id}', [FastfoodCretishingController::class, 'destroy'])->name('Boof.destroy');
});
Route::prefix('cart')->middleware(['auth','Role:ادمین,رستوران دار,مشتری'])->group(function () {

    Route::post('/add/{id}',[ProductController::class,'addToCart'])->name('cart');
    Route::get('/show',[productController::class,'showCart'])->name('cart.show');
    Route::post('/cart/update/{id}', [ProductController::class, 'UpdateToCart'])->name('cart.update');
    Route::post('/cart/remove/{id}', [ProductController::class, 'remove'])->name('cart.remove');
    Route::post('/clear', [ProductController::class, 'clearCart'])->name('cart.clear');
    Route::post('/order', [ProductController::class, 'storeProduct'])->name('cart.store');
});
Route::prefix('/products')->middleware(['auth','Role:مشتری,رستوران دار,ادمین'])->group(function () {
    Route::get('/',[ListProductController::class,'AllProducts'])->name('products');
    Route::get('/hiva',[ListProductController::class,'showOrder'])->name('hiva');
    Route::get('/Atavich',[ListProductController::class,'showOrderAtavich'])->name('Atavitch');
    Route::get('/Morsel',[ListProductController::class,'orderMorsel'])->name('Morsel');
});

Route::get('/article',function (){
    return view('Article.aboute2');
});

Route::fallback(function (){
    return view('Errors.errors');
});

require __DIR__.'/auth.php';
