<?php

namespace App\Providers;

use App\Interfaces\IClient;
use App\Repositories\ClientRepository;
use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register():void
    {
        // Bind the client repo
        $this->app->bind(IClient::class, ClientRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
