<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            "name" => "Admin",
            "slug" => "admin",
        ]);

        DB::table("roles")->insert([
            "name" => "Patient",
            "slug" => "patient",
        ]);

        DB::table("roles")->insert([
            "name" => "Receptionist",
            "slug" => "receptionist",
        ]);
    }
}
