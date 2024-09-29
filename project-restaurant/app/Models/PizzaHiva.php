<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PizzaHiva extends Model
{
    use HasFactory;
    protected $fillable=['name','description','price','image','discount_id'];
    public function discount() : BelongsTo
    {
        return $this->belongsTo(Discount::class,'discount_id');

    }
}
