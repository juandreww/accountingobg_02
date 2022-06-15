<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsingMoney>
 */
class UsingMoneyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $now = now()->addHours(7)->toDateTimeString();
        $uuid = Str::uuid()->toString();
        $amount = rand(1,10) * 100000;

        return [
            'uid' => $uuid,
            'created_at' => $now,
            'date' => '2022-01-16',
            'amount' => $amount,
            'note'=> 'amount is ' . $amount
        ];
    }
}
