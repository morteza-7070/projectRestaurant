<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mokhosh\Jarbon\Jarbon;
use \Morilog\Jalali\Jalalian;

class discount extends Model
{
    use HasFactory;
    protected $fillable=['name','image','percentage','start_date','end_date'];
    public function shamsi(): Attribute
    {
        return Attribute::make(
            get: fn () => Jalalian::fromDateTime($this->updated_at)->format('l, y/m/d ')
        );
    }
    public function startShamsi() :Attribute
    {
        return Attribute::make(
            get: fn () => Jalalian::fromDateTime($this->start_date)->format('l, y/m/d ')
        );

    }
    public function endShamsi() :Attribute
    {
        return Attribute::make(
            get: fn () => Jalalian::fromDateTime($this->end_date)->format('l, y/m/d ')
        );

    }
}
