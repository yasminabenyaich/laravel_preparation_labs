<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('informations')->insert([
            'img'=> "img/features-1.png",
            'titleTxt'=> "Voluptatem dignissimos provident
                quasi corporis voluptates sit assumenda.",
            'st' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua.",
            'textList1' =>" Ullamco laboris nisi ut aliquip ex ea commodo consequat",
            'textList2' => " Duis aute irure dolor in reprehenderit in voluptate velit",
            'textList3' => "Facilis ut et voluptatem aperiam. Autem soluta ad fugiat" ,
         ]);

        DB::table('informations')->insert([
            'img' => "img/features-2.png",
            'titleTxt' => "Corporis temporibus maiores provident",
            'st' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua.",
            'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            , sunt in culpa qui officia deserunt mollit anim id est laborum",
        ]);
        DB::table('informations')->insert([
            'img'=> "img/features-3.png",
            'titleTxt'=> "Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas.",
            'st' => "Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. 
                Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.",
            'textList1' =>" Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            'textList2' => " Duis aute irure dolor in reprehenderit in voluptate velit",
            'textList3' => "Facilis ut et voluptatem aperiam. Autem soluta ad fugiat" ,
         ]);
         DB::table('informations')->insert([
            'img' => "img/features-4.png",
            'titleTxt' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.",
            'st' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua.",
            'text' => "Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum",
        ]);
    }
}
