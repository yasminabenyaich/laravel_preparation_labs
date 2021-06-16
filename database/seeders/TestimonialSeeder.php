<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            "pdp"=>"img/testimonials/testimonials-1.jpg",
            "name"=>"Saul Goodman",
            "description" =>"Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.",
            "role" => "Ceo",
        ]);
        DB::table('testimonials')->insert([
            "pdp"=>"img/testimonials/testimonials-2.jpg",
            "name"=>"Sara Wilsson",
            "description" =>"Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.",
            "role" => "Designer",
        ]);
        DB::table('testimonials')->insert([
            "pdp"=>"img/testimonials/testimonials-3.jpg",
            "name"=>"Jena Karlis",
            "description" =>"Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.",
            "role" => "Store Owner",
        ]);
        DB::table('testimonials')->insert([
            "pdp"=>"img/testimonials/testimonials-4.jpg",
            "name"=>"Matt Brandon",
            "description" =>"Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.",
            "role" => "Freelancer",
        ]);
        DB::table('testimonials')->insert([
            "pdp"=>"img/testimonials/testimonials-5.jpg",
            "description" =>"Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.",
            "name"=>"John Larson",
            "role" => "Entrepreneur",
        ]);
  
    }
}
