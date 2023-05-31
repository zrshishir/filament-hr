<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['name' => 'mirpur', 'state_id' => 1],
            ['name' => 'Manikgong', 'state_id' => 1],
            ['name' => 'Rajshahi', 'state_id' => 2],
            ['name' => 'Bogra', 'state_id' => 2],
        ];

        DB::table('cities')->insert($cities);
    }
}
