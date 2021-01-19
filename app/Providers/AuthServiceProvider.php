<?php

Namespace App\providers;

use Xcholars\Auth\AuthServiceProvider as ServiceProvider;

use Xcholars\Support\Proxies\Gate;

use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
   /**
    * The policy mappings for the application.
    *
    * @var array
    */
    protected $policies = [
        \App\Models\User::class => \App\Policies\UserPolicy::class,
    ];

   /**
    * register bindings with the service container.
    *
    * @return object
    */
    public function register()
    {
         Parent::register();
    }

   /**
    * Activities to be performed after bindings are registerd.
    *
    * @return void
    */
    public function boot()
    {
        Gate::define('show-admin', function (User $user)
        {
            return $user->isAdmin();
        });
    }
}
