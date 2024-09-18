<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=['name','email','phone','address'.'birthday','password'];
    public function startShamsi() :Attribute
    {
        return Attribute::make(
            get: fn () => Jalalian::fromDateTime($this->birthday)->format('l, y/m/d ')
        );

    }
}
