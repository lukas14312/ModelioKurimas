<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
use Faker\Factory as Faker;



class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $faker = Faker::create();
    for ($i = 0; $i < 40; $i++) {
        Company::create([
            'name' => $faker->company,
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'email' => $faker->companyEmail,
        ]);
    }
}
}
