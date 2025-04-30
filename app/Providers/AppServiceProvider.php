<?php

namespace App\Providers;

use App\Models\BusinessProfile;
use App\Models\IndividualProfile;
use App\Observers\ProfilesObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        IndividualProfile::observe(ProfilesObserver::class);
        BusinessProfile::observe(ProfilesObserver::class);
    }
}
