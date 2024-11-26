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

    public function addToCart($product)
    {
        if (isset($this->products[$product->id])) {
            $this->products[$product->id]['count'] += 1;
            $this->products[$product->id]['price'] += $product->price;

        } else {
            $this->products[$product->id] = [
                "product" => $product,
                "count" => 1,
                "price" => $product->price,

            ];
        }

        $this->price += $product->price;
        $this->count++;

    }
    public function removeFromCart($id)
    {

        if (isset($this->products[$id])) {

            $this->count -= $this->products[$id]['count'];
            $this->price -= $this->products[$id]['price'];


            unset($this->products[$id]);
        }
    }
    public function updateCart($id, $count){
        if(isset($this->products[$id])) {
            $this->products[$id]['count'] = $count;
            $this->products[$id]['price'] = $count*$this->products[$id]['price'];
            $this->count+=$this->products[$id]['count'];
            $this->price+=$this->$this->products[$id]['count']*$this->products[$id]['price'];
        }
    }


}

