<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Cart
{

    public $products = [];
    public $count = 0;
    public $price = 0;


    public function __construct($cart = null)
    {
        if ($cart) {
            $this->products = $cart->products;
            $this->count = $cart->count;
            $this->price = $cart->price;

        }
    }
    protected $fillable=['name','name_restaurant','type','image','discount_id'];

//    public function addToCart($product)
//    {
//        $discount=$product->discount->percentage ?? $product->price;
//        if (isset($this->products[$product->id])) {
//            $this->products[$product->id]['count'] += 1;
//            $this->products[$product->id]['price'] += $discount;
//
//        } else {
//            $this->products[$product->id] = [
//                "product" => $product,
//                "count" => 1,
//                "price" => $discount,
//
//            ];
//        }
//
//        $this->price += $discount;
//        $this->count++;
//
//    }
    public function addToCart($product)
    {
        $discount = isset($product->discount->percentage)
            ? $product->price - ($product->price * $product->discount->percentage / 100)
            : $product->price;

        if (isset($this->products[$product->id])) {
            $this->products[$product->id]['count'] += 1;
            $this->products[$product->id]['price'] += $discount;
        } else {
            $this->products[$product->id] = [
                "product" => $product,
                "count" => 1,
                "price" => $discount,
            ];
        }

        $this->price += $discount;
        $this->count++;
    }

    public function removeFromCart($id)
    {
        if (isset($this->products[$id])) {
            $this->count -= $this->products[$id]['count'];
            $this->price -= $this->products[$id]['price'];

            unset($this->products[$id]);

            // اطمینان از اینکه مقادیر به صفر بازنشانی شوند
            if (empty($this->products)) {
                $this->count = 0;
                $this->price = 0;
            }
        }
    }

    public function update($id, $count)
    {
        if (isset($this->products[$id])) {
            // قیمت واحد محصول
            $unitPrice = $this->products[$id]['product']->price;
            // به‌روزرسانی تعداد و قیمت محصول
            $this->products[$id]['count'] = $count;
            $this->products[$id]['price'] = round($count * $unitPrice, 2);

            // محاسبه مجدد تعداد و قیمت کل سبد
            $this->count = array_sum(array_column($this->products, 'count'));
            $this->price = array_sum(array_column($this->products, 'price'));
        }
    }




}

