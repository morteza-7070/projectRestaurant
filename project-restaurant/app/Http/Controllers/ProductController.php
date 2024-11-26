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


    public function addToCart(Product $product, Request $request, string $id)
    {
        $products = Product::findOrFail($id);
        $cart = $request->session()->has('cart') ? $request->session()->get('cart') : new Cart();
        $cart->addToCart($products);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }
    public function showCart(Request $request)
    {
        $cart = $request->session()->get('cart', new Cart());
        return view('cart.showCart', compact('cart'));
    }

    public function remove(Request $request, $id)
    {

        $cart = $request->session()->get('cart', new Cart());


        $cart->removeFromCart($id);


        $request->session()->put('cart', $cart);

        return redirect()->back()->with('success', 'محصول با موفقیت حذف شد');
    }
    public function clearCart(Request $request)
    {
        $request->session()->forget('cart');
        return redirect()->route('index')->with('success','سبد خرید شما خالی است');
    }
    public function UpdateToCart(Request $request, $id)
    {
        $count=$request->input('count');
        $cart=$request->session()->get('cart',new cart());
       if($count>0)
           $cart->update($count,$id);
       else
           $cart->removeFromCart($id);
       $request->session()->put('cart',$cart);
       return redirect()->back();
    }






    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */

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
