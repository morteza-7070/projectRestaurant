<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class fastfoodCretishing extends Model
{
    use HasFactory;
    protected $fillable=['name',"description",'price','image','mime','discount_id','type'];
    public function discount() : BelongsTo
    {
        return $this->belongsTo(Discount::class,'discount_id');

    }
}
