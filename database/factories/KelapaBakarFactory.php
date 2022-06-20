<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KelapaBakar>
 */
class KelapaBakarFactory extends Factory
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
        $faker = Faker::create('id_ID');
        $type = $faker->randomElement(['Masuk', 'Keluar']);
        $type2 = $faker->randomElement(['Biasa', 'Bakar']);
        $qty = $faker->numberBetween(1, 20);
        $price = $faker->numberBetween(50, 65) * 100;
        $totalamount = $qty * $price;
        $dt = $faker->dateTimeBetween($startDate = '-50 days', $endDate = '-20 days');
        $date = $dt->format("Y-m-d");

        return [
            'uid' => $uuid,
            'created_at' => $now,
            'date' => $date,
            'type' => $type,
            'type2' => $type2,
            'quantity' => $qty,
            'price' => $price,
            'totalamount' => $totalamount,
        ];
    }
}
