<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $fillable=[''];
    public function discount(){
        return $this->belongsTo(discount::class,'discount_id');
    }
}
