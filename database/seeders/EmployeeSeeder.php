<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            ['country_id' => 1, 'state_id' => 1, 'city_id' => 1, 'department_id' => 1, 'first_name' => 'John', 'last_name' => 'Doe', 'zip_code' => '1216', 'birst_date' => '1990-01-01', 'date_hired' => '2010-01-01'],
            ['country_id' => 1, 'state_id' => 1, 'city_id' => 1, 'department_id' => 1, 'first_name' => 'Jane', 'last_name' => 'Doe', 'zip_code' => '1216', 'birst_date' => '1990-01-01', 'date_hired' => '2010-01-01'],
            ['country_id' => 1, 'state_id' => 1, 'city_id' => 1, 'department_id' => 1, 'first_name' => 'Mark', 'last_name' => 'Doe', 'zip_code' => '1216', 'birst_date' => '1990-01-01', 'date_hired' => '2010-01-01'],
            ['country_id' => 1, 'state_id' => 1, 'city_id' => 1, 'department_id' => 1, 'first_name' => 'Sara', 'last_name' => 'Doe', 'zip_code' => '1216', 'birst_date' => '1990-01-01', 'date_hired' => '2010-01-01'],
        ];

        DB::collection('employees')->insert($employees);
    }
}
