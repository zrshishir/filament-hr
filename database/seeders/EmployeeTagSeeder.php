<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee_tags = [
            ['employee_id' => 1, 'tag_id' => 1],
            ['employee_id' => 2, 'tag_id' => 1],
            ['employee_id' => 3, 'tag_id' => 1],
            ['employee_id' => 1, 'tag_id' => 2],
            ['employee_id' => 2, 'tag_id' => 2],
            ['employee_id' => 3, 'tag_id' => 2],
            ['employee_id' => 1, 'tag_id' => 3],
            ['employee_id' => 2, 'tag_id' => 3],
            ['employee_id' => 3, 'tag_id' => 3],
            ['employee_id' => 1, 'tag_id' => 4],
            ['employee_id' => 2, 'tag_id' => 4],
            ['employee_id' => 3, 'tag_id' => 4],
        ];

        DB::collection('employee_tags')->insert($employee_tags);
        
    }
}
