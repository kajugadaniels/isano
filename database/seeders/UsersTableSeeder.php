<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "role_id" => "1",
            "name" => "Admin",
            "email" => "admin@test.com",
            "password" => bcrypt("123"),
        ]);

        DB::table("users")->insert([
            "role_id" => "2",
            "name" => "Patient",
            "email" => "patient@test.com",
            "password" => bcrypt("123"),
        ]);

        DB::table("users")->insert([
            "role_id" => "3",
            "name" => "Receptionist",
            "email" => "receptionist@test.com",
            "password" => bcrypt("123"),
        ]);
    }
}
