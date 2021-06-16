<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'btnTxt'=> "Abouts us",
            'icone'=>"bx bx-receipt",
            'st'=> 'Corporis voluptates sit',
            'description'=> "Consequuntur sunt 
            aut quasi enim aliquam quae harum pariatur laboris nisi ut 
            aliqui",
        ]);
        DB::table('abouts')->insert([
            
            'icone'=>"bx bx-cube-alt",
            'st'=> 'Ullamco laboris nisi',
            'description'=> " Excepteur sint occaecat cupidatat non proident,
             sunt in culpa qui officia deserunt",
        ]);
        DB::table('abouts')->insert([
         
            'icone'=>"bx bx-images",
            'st'=> 'Labore consequatur',
            'description'=> "ut suscipit aut cum nemo deleniti aut omnis. 
            Doloribus ut maiores omnis facere",
        ]);
        DB::table('abouts')->insert([
        
            'icone'=>"bbx bx-shield",
            'st'=> 'Beatae veritatis',
            'description'=> "Expedita veritatis consequuntur 
            nihil tempore laudantium vitae denat pact",
        ]);
    }
}
