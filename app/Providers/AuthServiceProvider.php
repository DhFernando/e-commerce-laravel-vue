<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @param GateContract $gate
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin',function($user){
            return $user->state == 'Admin';
        });
        Gate::define('isUser',function($user){
            return $user->state == 'User';
        });
        Gate::define('isOwner',function($user , $advertisement){
            return $user->id == $advertisement->user_id;
        });

        Gate::define('isOwnerAccount',function($user,$accountOwner){
            return $user->id == $accountOwner->id;
        });
    }
}
