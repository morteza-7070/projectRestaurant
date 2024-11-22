<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=['name','description','price','image','type','discount_id','mime','name_restaurant',];
    public function discount(){
        return $this->belongsTo(discount::class,'discount_id');
    }
    public function orders(){
        return $this->belongsToMany(order::class,'order_product')->withPivot('quantity','price');
    }
}
