<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


//class Cart extends Model
//{
//    public $products = [];
//    public $count = 0;
//    public $price = 0;
//    public $address = null;
//
//    public function __construct($cart = null)
//    {
//        if ($cart) {
//            $this->products = $cart->products;
//            $this->count = $cart->count;
//            $this->price = $cart->price;
//            $this->address = $cart->address;
//        }
//    }
//
//    public function add($product)
//    {
////        if (array_key_exists($product->id, $this->products)) {
////            $this->products[$product->id]['count'] += 1;
////        } else {
////            $this->products[$product->id] = [
////                "product" => $product,
////                "count" => 1,
////            ];
//
////        }
////
////        $this->price += $product->price;
////        $this->count += 1;
//        $cart=[
//            'products' => $product,
//            'count' => $this->count,
//            'price' => $this->price,
//        ];
//        if(isset($this->products[$product->id])){
//            $cart = $this->products[$product->id];
//        }
//        $cart['count']+=$cart->count;
//        $cart['price'] = $this->price * $cart['count'];
//        $this->products[$product->id] = $cart;
//        $this->count++;
//        $this->price = $cart->count*$cart['price'];
//    }
//
//}
class Cart extends Model
{
    public $products = [];
    public $count = 0;
    public $price = 0;
    public $address=null;

    public function __construct($cart = null)
    {
        if ($cart) {
            $this->products = $cart->products;
            $this->count = $cart->count;
            $this->price = $cart->price;
            $this->address = $cart->address;
        }
    }

    public function addToCart($product)
    {
        // اگر محصول در سبد خرید وجود داشت
        if (isset($this->products[$product->id])) {
            $this->products[$product->id]['count'] += 1;
            $this->products[$product->id]['price'] += $product->price;
            $this->products[$product->id]['address'] = $product->address;
        } else {
            // اگر محصول جدید بود
            $this->products[$product->id] = [
                "product" => $product,
                "count" => 1,
                "price" => $product->price,
                'address' => $product->address,
            ];
        }

        // به‌روزرسانی قیمت کل و تعداد کل محصولات
        $this->count += 1;
        $this->price += $product->price;
        $this->address = $product->address;
    }
    public function products(){
        return $this->hasMany(product::class);
    }
}
