<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Acquirer;
use App\Models\Agent;
use App\Models\Client;
use App\Models\ForeignExchange;
use App\Models\Merchant;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();
        Client::factory(10)->create();
        Acquirer::factory(10)->create();
        Agent::factory(2)->create();
        ForeignExchange::factory(4)->create();
        Merchant::factory(1)->create();
        Transaction::factory(5)->create();
    }
}
