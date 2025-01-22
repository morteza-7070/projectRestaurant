<?php

namespace App\Policies;

use App\Models\product;
use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
//    public function view(User $user, Product $product) {
//        return $user->role == 'restaurant-owner' && $product->restaurant_id == $user->restaurant_id;
//    }
}
