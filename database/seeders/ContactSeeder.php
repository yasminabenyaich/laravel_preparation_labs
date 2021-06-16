<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'icone'=> "bx bx-map",
            'titleTxt'=>"Our Address",
            'text'=> "A108 Adam Street, New York, NY 535022",
        ]);
        DB::table('contacts')->insert([
            'icone'=> "bx bx-envelope",
            'titleTxt'=>"Email Us",
            'text'=> "info@example.com<br>contact@example.com",
        ]);
        DB::table('contacts')->insert([
            'icone'=> "bx bx-phone-call",
            'titleTxt'=>"Call Us",
            'phone'=> "155895548855",
        ]);
    }
}
