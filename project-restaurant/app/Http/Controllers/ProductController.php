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
        return redirect()->back();
    }
    public function UpdateToCart(Request $request, $id)
    {
        $count = $request->input('count');

        if ($count < 0) {
            return redirect()->back()->with('error', 'تعداد نمی‌تواند منفی باشد');
        }

        $cart = $request->session()->get('cart', new Cart());

        if ($count > 0) {
            $cart->update($id, $count);
            $message = 'سبد خرید با موفقیت به‌روزرسانی شد.';
        } else {
            $cart->removeFromCart($id);
            $message = 'محصول با موفقیت از سبد خرید حذف شد.';
        }

        $request->session()->put('cart', $cart);

        return redirect()->back()->with('success', $message);
    }
//public function storeProduct(Request $request)
//{
//    $cart = $request->session()->get('cart', new Cart());
//    $request->validate([]);
//    $order=product::create([
//        'name'=>$request->name,
//        'product_id'=>$request->product_id,
//        'count'=>$request->count,
//        'price'=>$request->input('price','null'),
//    ]);
//    foreach ($cart->products as $item) {
//        $order->products()->attach($item['product']->id, [
//            'count' => $item['count'],
//            'price' => $item['price'] / $item['count'],
//        ]);
//    }
    public function storeProduct(Request $request)
    {
        $cart = $request->session()->get('cart', new Cart());

        // بررسی خالی بودن سبد خرید
        if (!$cart || count($cart->products) === 0) {
            return redirect()->back()->with('error', 'سبد خرید خالی است.');
        }
        $request->validate([
//            'name' => 'required',
            'price' => 'required',
            'count' => 'required',
        ]);


        $order = product::create([
//            'user_id' => auth()->id(), // در صورت نیاز
            'name' => $request->input('name'),
            'price' => $cart->price,
            'count' => $cart->count,
        ]);

        foreach ($cart->products as $item) {
            $order->products()->attach($item['product']->id, [
                'count' => $item['count'],
                'price' => $item['price'] / $item['count'],
            ]);
        }

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
