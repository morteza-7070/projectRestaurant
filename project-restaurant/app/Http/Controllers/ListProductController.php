<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\PizzaHiva;
use App\Models\product;
use Illuminate\Http\Request;

class ListProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showOrder(Request $request)
    {
        $products=product::where('name_restaurant','پیتزا هیوا')->get();
        $cart = $request->session()->get('cart', new Cart());
        $totalCount = 0;

        if (isset($cart->products)) {
            foreach ($cart->products as $item) {
                $totalCount += $item['count'];
            }
        }
        view()->share('cart', $cart);
        view()->share('totalCount', $totalCount);
        return view('orderProducts.order-hiva',compact('products'));
    }
    public function showOrderAtavich(Request $request)
    {
        $products=product::where('name_restaurant','عطاویچ')->get();
        $cart = $request->session()->get('cart', new Cart());
        $totalCount = 0;

        if (isset($cart->products)) {
            foreach ($cart->products as $item) {
                $totalCount += $item['count'];
            }
        }
        view()->share('cart', $cart);
        view()->share('totalCount', $totalCount);
        return view('orderProducts.order-hiva',compact('products'));
    }
    public function orderMorsel(Request $request)
    {
        $products=product::where('name_restaurant','فست فود لقمه کش')->get();
        $cart = $request->session()->get('cart', new Cart());
        $totalCount = 0;

        if (isset($cart->products)) {
            foreach ($cart->products as $item) {
                $totalCount += $item['count'];
            }
        }
        view()->share('cart', $cart);
        view()->share('totalCount', $totalCount);
        return view('orderProducts.Morsel',compact('products'));
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
