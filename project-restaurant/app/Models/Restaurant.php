<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Facades\DB;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable=['name','address','longitude','latitude'];
    public static function findNearestRestaurants($latitude, $longitude, $radius = 10)
    {
        $haversine = "(6371 * acos(cos(radians($latitude)) * cos(radians(latitude)) * cos(radians(longitude) - radians($longitude)) + sin(radians($latitude)) * sin(radians(latitude))))";

        return self::select('*', DB::raw("$haversine AS distance"))
            ->having('distance', '<=', $radius)
            ->orderBy('distance')
            ->get();
    }

}
