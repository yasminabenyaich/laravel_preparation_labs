<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            "title" => "Build Better Websites With Bikin",
            "subtitle"=> "We are team of talented designers making websites with Bootstrap",
        ]);
        DB::table('titres')->insert([
            "title" => "Voluptatem dignissimos provident quasi",
            "subtitle"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
             labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit",
        ]);
        DB::table('titres')->insert([
            "title" => "Features",
            "subtitle"=> "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. 
            Quia fugiat sit in iste officiis commodi quidem hic quas.",
        ]);
        DB::table('titres')->insert([
            "title" => "Services",
            "subtitle"=> "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit 
            suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
        ]);
        DB::table('titres')->insert([
            "title" => "Portfolio",
            "subtitle"=> "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. 
            Quia fugiat sit in iste officiis commodi quidem hic quas.",
        ]);
        DB::table('titres')->insert([
            "title" => "Testimonials",
            "subtitle"=> "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit 
            suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
        ]);
        DB::table('titres')->insert([
            "title" => "Team",
            "subtitle"=> "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit 
            suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
        ]);
        DB::table('titres')->insert([
            "title" => "Contact",
            "subtitle"=> "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. 
            Quia fugiat sit in iste officiis commodi quidem hic quas.",
        ]);
        DB::table('titres')->insert([
            "title" => "Contact",
            "subtitle"=> "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. 
            Quia fugiat sit in iste officiis commodi quidem hic quas.",
        ]);
    }
}
