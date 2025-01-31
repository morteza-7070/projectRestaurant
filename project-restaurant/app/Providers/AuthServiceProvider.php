<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * auth any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
       Gate::define('access-admin', function ($user) {
           return $user->isAdmin();
       });
       Gate::define('access-customer', function ($user) {
           return $user->isCustomer();
       });
       Gate::define('access-restaurant', function ($user) {
           return $user->isRestaurantOwner();
       });
       Gate::define('access-guest', function ($user) {
           return $user->isGuest();
       });
    }
}
