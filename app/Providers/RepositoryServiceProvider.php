<?php

namespace App\Providers;

use App\Interfaces\IAuth;
use App\Interfaces\IClient;
use App\Interfaces\ITransaction;
use App\Repositories\AuthRepository;
use App\Repositories\ClientRepository;
use App\Repositories\TransactionRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register():void
    {
        // Bind the transaction repo
        $this->app->bind(ITransaction::class, TransactionRepository::class);
        $this->app->bind(IClient::class, ClientRepository::class);
        // Bind AuthRepository to service container for dependency injection.
        $this->app->bind(IAuth::class, AuthRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
