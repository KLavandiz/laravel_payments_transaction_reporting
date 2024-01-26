<?php

namespace App\Providers;

use App\Interfaces\ITransaction;
use App\Repositories\TransactionRepository;
use Illuminate\Support\ServiceProvider;

class TransactionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register():void
    {
        // Bind the transaction repo
        $this->app->bind(ITransaction::class, TransactionRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
