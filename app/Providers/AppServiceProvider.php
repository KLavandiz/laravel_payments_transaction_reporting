<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        Passport::personalAccessTokensExpireIn(now()->addMinutes(10)); // Set the expiration time to 10 minutes


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        //
    }
}
