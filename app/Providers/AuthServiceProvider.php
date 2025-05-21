<?php

namespace App\Providers;

use App\Models\BusinessProfile;
use App\Models\IndividualProfile;
use App\Policies\BusinessProfilePolicy;
use App\Policies\IndividualProfilePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        IndividualProfile::class => IndividualProfilePolicy::class,
        BusinessProfile::class => BusinessProfilePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
} 