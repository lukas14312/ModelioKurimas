<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $faker = Faker::create();
    for ($i = 0; $i < 350; $i++) {
        Client::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'phone' => $faker->phoneNumber,
            'company' => $faker->company,
        ]);
    }
}
}
