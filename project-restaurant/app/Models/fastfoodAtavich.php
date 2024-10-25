<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class fastfoodAtavich extends Model
{
    use HasFactory;
    protected $fillable=['name','price','discount_id','description','image','type'];
    public function discount() : BelongsTo
    {
        return $this->belongsTo(Discount::class,'discount_id');

    }
}
