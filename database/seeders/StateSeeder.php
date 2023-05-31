<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            ['name' => 'Dhaka', 'country_id' => 1],
            ['name' => 'Rajshahi', 'country_id', 1]
        ];

        DB::table('states')->insert($states);
    }
}
