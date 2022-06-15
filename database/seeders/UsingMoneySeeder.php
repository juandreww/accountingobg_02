<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\UsingMoney;

class UsingMoneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new UsingMoney();
        $now = now()->addHours(7)->toDateTimeString();
        $uuid = Str::uuid()->toString();

        $data->uid = $uuid;
        $data->created_at = $now;
        $data->date = '2022-01-15';
        $data->amount = rand(1,10) * 100000;
        $data->note = 'amount is ' . $data->amount;
        $data->save();
    }
}
