<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['name','price','count','user_id'];
    public  function user()
    {
        return $this->belongsTo(User::class);
    }
    public function products(){
        return $this->belongsToMany(product::class)->withPivot('price','count');
    }

}
