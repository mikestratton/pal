<?php

namespace PhotosAfterLife\Providers;

use PhotosAfterLife\PhotoMemory;
use PhotosAfterLife\Policies\PhotoMemoryPolicy;
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
        // 'PhotosAfterLife\Model' => 'PhotosAfterLife\Policies\ModelPolicy',
        PhotoMemory::class => PhotoMemoryPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
