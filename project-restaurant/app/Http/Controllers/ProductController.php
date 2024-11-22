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
        return view('product.index',compact('products'));
//        $pastaItems = product::where('type', 'پاستا')->get();
//
//        $sandwiches = product::where('type', 'ساندویچ')->get();
//
//        $friedItems = product::where('type', 'سوخاری')->get();
//
//        $pizzas = product::where('type', 'پیتزا')->get();
//
//
//        return view('index', compact('pastaItems', 'pizzas', 'sandwiches', 'friedItems'));

    }

    public function addToCart(Product $product, Request $request,string $id)
    {
//        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
//        $cart = new Cart($oldCart);
//        $cart->addToCart($product);
//        $request->session()->put('cart', $cart);
//        return redirect()->back();
        $products = Product::FindOrFail($id);
        $cart=session()->has('cart') ? session()->get('cart') : [];
        $cart->addToCart($products);
        session()->put('cart',$cart);
        return redirect()->back();

    }


    public function showCart(Request $request,Product $product)
    {
        $cart = $request->session()->get('cart', new cart());
        dd($cart);
//        return view('cart.show', ['cart' => $cart]);
    }

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
