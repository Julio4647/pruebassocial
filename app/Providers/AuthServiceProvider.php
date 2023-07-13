<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Policies\MasterPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
   * @var array<class-string, class-string>
     */
    protected $policies = [
        Master::class => MasterPolicy::class,
        Coordinador::class => MasterPolicy::class,
        Community::class => MasterPolicy::class,
        Cliente::class => MasterPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
