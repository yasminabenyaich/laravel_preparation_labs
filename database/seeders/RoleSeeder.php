<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("roles")->insert([
            "role"=>"admin",
         ]);
        DB::table("roles")->insert([
           "role"=>"Executive Officer",
        ]);
        DB::table("roles")->insert([
            "role"=>"Accountant",
        ]);
        DB::table("roles")->insert([
            "role"=>"Product Manager",
        ]);
        DB::table("roles")->insert([
            "role"=>"CTO",
        ]); 
    }
}
