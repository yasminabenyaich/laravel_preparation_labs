<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "role_id"=> 1,
            "pdp" => "img/team/team-1.jpg",
            "name" => "Walter White",
            "role" => "Chief Executive Officer",
            "email" => "Walterwhite@hotmail.com", 
            "password"=> Hash::make("test1"),
        ]);
        DB::table("users")->insert([
            "role_id"=> 2,
            "name" => "Sarah Jhonson",
            "pdp" => "img/team/team-2.jpg",
            "role" => "Product Manager",
            "email" => "Sarahjhonson@hotmail.com", 
            "password"=> Hash::make("test2"),
        ]);
        DB::table("users")->insert([
            "role_id"=> 3,
            "pdp" => "img/team/team-3.jpg",
            "name" => "William Anderson",
            "role" => "CTO",
            "email" => "Williamanderson@hotmail.com", 
            "password"=> Hash::make("test3"),
        ]);
        DB::table("users")->insert([
            "role_id"=> 4,
            "pdp" => "img/team/team-4.jpg",
            "name" => "Amanda Jepson",
            "role" => "Accountant",
            "email" => "Amandajepson@hotmail.com", 
            "password"=> Hash::make("test4"),
        ]);
    }
}
