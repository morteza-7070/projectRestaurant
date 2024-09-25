<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PizzaHiva extends Model
{
    use HasFactory;
    protected $fillable=['name','description','price','image','discount_id'];
    public function Discount() : BelongsToMany
    {
        return $this->belongsToMany(Discount::class,'discount_id');

    }
}
