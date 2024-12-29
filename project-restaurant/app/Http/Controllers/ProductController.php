<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
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
//        $itemCount=count($cart->items);
        $totalCount = 0;

        if (isset($cart->products)) {
            foreach ($cart->products as $item) {
                $totalCount += $item['count'];
            }
        }
        view()->share('cart', $cart);
        view()->share('totalCount', $totalCount);
        return view('cart.showCart',);
    }
//    public function showOrder(Request $request)
//    {
//        $cart = $request->session()->get('cart', new Cart());
////        $itemCount=count($cart->items);
//        $totalCount = 0;
//
//        if (isset($cart->products)) {
//            foreach ($cart->products as $item) {
//                $totalCount += $item['count'];
//            }
//        }
//        view()->share('cart', $cart);
//        view()->share('totalCount', $totalCount);
//        return view('orderProducts.order-hiva',);
//    }

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

//    public function storeProduct(Request $request)
//    {
//        // دریافت سبد خرید از سشن
//        $cart = $request->session()->get('cart', new Cart());
//
//        // بررسی خالی بودن سبد خرید
//        if (!$cart || count($cart->products) === 0) {
//            return redirect()->back()->with('error', 'سبد خرید خالی است.');
//        }
//
//        // ایجاد سفارش جدید
//        $order = Order::create([
//            'user_id' => auth()->id(), // فرض می‌کنیم کاربر وارد شده است
//            'price' => $cart->price, // قیمت کل سبد خرید
//        ]);
//
//        // ارسال محصولات به جدول میانی order_product
//        foreach ($cart->products as $item) {
//            $order->products()->attach($item['product']->id, [
//                'count' => $item['count'],
//                'price' => $item['price'] / $item['count'], // قیمت هر واحد محصول
//            ]);
//        }
//
//        // پاک کردن سبد خرید از سشن
//        $request->session()->forget('cart');
//
//        return redirect()->route('order.success'); // به صفحه تایید سفارش منتقل می‌شود
//    }
//    public function storeProduct(Request $request)
//    {
//        // دریافت سبد خرید از سشن
//        $cart = $request->session()->get('cart', new Cart());
//
//        // بررسی خالی بودن سبد خرید
//        if (!$cart || count($cart->products) === 0) {
//            return redirect()->back()->with('error', 'سبد خرید خالی است.');
//        }
//
//        try {
//            // ایجاد سفارش جدید
//            $order = Order::create([
//                'user_id' => auth()->id(), // فرض می‌کنیم کاربر وارد شده است
//                'price' => $cart->price, // قیمت کل سبد خرید
//
//                'count' => array_sum(array_column($cart->products, 'count')), // محاسبه تعداد کل محصولات
//                'name' => $cart->name,
//                // سایر فیلدهای لازم مانند name و address را نیز می‌توانید اضافه کنید
//            ]);
//
//            // ارسال محصولات به جدول میانی order_product
//            foreach ($cart->products as $item) {
//                $order->products()->attach($item['product']->id, [
//                    'user_id'=> $item["user_id"],
//                    'name' => $item['product']->name,
//                    'count' => $item['count'],
//                    'price' => $item['price'] / $item['count'], // قیمت هر واحد محصول
////                    'name'=> $item['name'],  //نام غذا
//                ]);
//            }
//
//            // پاک کردن سبد خرید از سشن
//            $request->session()->forget('cart');
//
//            return redirect()->route('order.success'); // به صفحه تایید سفارش منتقل می‌شود
//        } catch (\Exception $e) {
//            return redirect()->back()->with('error', 'خطا در ثبت سفارش: ' . $e->getMessage());
//        }
//    }
    public function storeProduct(Request $request)
    {
        // دریافت سبد خرید از سشن
        $cart = $request->session()->get('cart', new Cart());

        // بررسی خالی بودن سبد خرید
        if (!$cart || count($cart->products) === 0) {
            return redirect()->back()->with('error', 'سبد خرید خالی است.');
        }

        try {
            // ایجاد سفارش جدید
            $order = Order::create([
                'user_id' => auth()->id(),
                'price' => $cart->price,
                'count' => array_sum(array_column($cart->products, 'count')),
                'name' => $cart->name ?? $request->input('name'), // مقداردهی صحیح
            ]);

            // ارسال محصولات به جدول میانی order_product
            foreach ($cart->products as $item) {
                $order->products()->attach($item['product']->id, [
                    'user_id' => auth()->id(),
                    'name' => $item['product']->name, // مقداردهی صحیح
                    'count' => $item['count'],
                    'price' => $item['price'] / $item['count'],
                ]);
            }

            // پاک کردن سبد خرید از سشن
            $request->session()->forget('cart');

            return redirect()->route('order.success')->with('success', 'سفارش شما با موفقیت ثبت شد.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'خطا در ثبت سفارش: ' . $e->getMessage());
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
