<?php

namespace Database\Factories;

use App\Enum\MethodEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Acquirer>
 */
class AcquirerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = strtoupper(fake()->word)." BANK";
        $code = substr($name,0,1)."B";
        $type = [MethodEnum::CEPBANK,MethodEnum::CITADEL,MethodEnum::CUP,MethodEnum::CREDITCARD,MethodEnum::IDEAL];
        return [
            'name'=>$name,
            'code'=>$code,
            'type'=>fake()->randomElement($type),
        ];
    }
}
