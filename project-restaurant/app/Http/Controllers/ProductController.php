<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products= Product::all();
        return view('cart.showCart',compact('products'));


    }

//    public function addToCart(Product $product, Request $request,string $id)
//    {
//
//        $products = Product::FindOrFail($id);
//        $cart=session()->has('cart') ? session()->get('cart') : [];
//        $cart->addToCart($products);
//        session()->put('cart',$cart);
//        return redirect()->route('index');
//
//    }
    public function addToCart(Product $product, Request $request, string $id)
    {
        $products = Product::findOrFail($id);

        // اگر سشن کارتی ندارد، نمونه جدیدی از Cart ایجاد کنید
        $cart = $request->session()->has('cart') ? $request->session()->get('cart') : new Cart();

        // اضافه کردن محصول به سبد خرید
        $cart->addToCart($products);

        // ذخیره‌سازی کارت در سشن
        $request->session()->put('cart', $cart);

        return redirect()->back();
    }
    public function showCart(Request $request)
    {
        $cart = $request->session()->get('cart', new Cart());
        return view('cart.showCart', compact('cart'));
    }



//    public function showCart(Request $request,Product $products)
//    {
//        $cart = $request->session()->get('cart', new cart());
//        dd($cart);
////        return view('cart.showCart', ['cart' => $cart],compact("cart"));
////        return view('cart.showCart',compact('products'));
//    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
