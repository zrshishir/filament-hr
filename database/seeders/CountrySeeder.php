<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['name' => 'Bangladesh', 'country_code' => 'BD', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'India', 'country_code' => 'IN', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pakistan', 'country_code' => 'PK', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sri Lanka', 'country_code' => 'SL', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nepal', 'country_code' => 'NP', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('countries')->insert($countries);
    }
}
