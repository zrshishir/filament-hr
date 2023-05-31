<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Test User', 'phone' => '1232343', 'email' => 'test_user@gmail.com', 'password' => bcrypt('12345678'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Test User 2', 'phone' => '1232344', 'email' => 'test_user2@gmail.com', 'password' => bcrypt('12345678'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Test User 3', 'phone' => '1232345', 'email' => 'test_user3@gmail.com', 'password' => bcrypt('12345678'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Test User 4', 'phone' => '1232346', 'email' => 'test_user4@gmail.com', 'password' =>bcrypt('12345678'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Test User 5', 'phone' => '1232347', 'email' => 'test_user5@gmail.com', 'password' => bcrypt('12345678'), 'created_at' => now(), 'updated_at' => now()],
        ];
        
        DB::table('users')->insert($users);
    }
}
