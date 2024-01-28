<?php

namespace Database\Factories;

use App\Enum\MessageEnum;
use App\Enum\OperationEnum;
use App\Enum\StatusEnum;
use App\Models\Acquirer;
use App\Models\Agent;
use App\Models\Client;
use App\Models\ForeignExchange;
use App\Models\Merchant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = [StatusEnum::APPROVED, StatusEnum::DECLINED, StatusEnum::ERROR, StatusEnum::WAITING];
        $operation = [OperationEnum::STORED, OperationEnum::DIRECT, OperationEnum::REFUND, OperationEnum::THREED];
        $message = [MessageEnum::INVALID_TRANSACTION, MessageEnum::INVALID_CARD, MessageEnum::DONT_HONOR, MessageEnum::NO_SUFFICIENT_BALANCE];
        return [
            'reference_no' => Str::random(10),
            'merchant_id' => Merchant::all('id')->random(1)->first(),
            'status' => fake()->randomElement($status),
            'channel' => 'API',
            'custom_data' => null,
            'chain_id' => Str::random(5),
            'agent_info_id' => Agent::all('id')->random(1)->first(),
            'operation' => fake()->randomElement($operation),
            'fx_transaction_id' => ForeignExchange::all('id')->random(1)->first(),
            'acquirer_transaction_id' => Acquirer::all('id')->random(1)->first(),
            'code' => '00',
            'message' => fake()->randomElement($message),
            'transaction_id' => Str::random(15),
            'refundable' => true,
            'client_id' => Client::all('id')->random(1)->first()
        ];
    }
}
