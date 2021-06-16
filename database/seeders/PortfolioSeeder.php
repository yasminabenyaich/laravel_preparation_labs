<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("portfolios")->insert([
            "photo"=>"img/portfolio/portfolio-1.jpg",
            "category"=>"filter-app",

     
        ]);
        DB::table("portfolios")->insert([

            "photo"=>"img/portfolio/portfolio-2.jpg",
            "category"=>"filter-web",

        
        ]);
        DB::table("portfolios")->insert([
            
            "photo"=>"img/portfolio/portfolio-3.jpg",
            "category"=>"filter-app",

          
        ]);
        DB::table("portfolios")->insert([
            
            "photo"=>"img/portfolio/portfolio-4.jpg",
            "category"=>"filter-card",

           
        ]);
        DB::table("portfolios")->insert([
            
            "photo"=>"img/portfolio/portfolio-5.jpg",
            "category"=>"filter-web",

            
        ]);
        DB::table("portfolios")->insert([
            
            "photo"=>"img/portfolio/portfolio-6.jpg",
            "category"=>"filter-app",

          
        ]);
      
        DB::table("portfolios")->insert([
            
            "photo"=>"img/portfolio/portfolio-7.jpg",
            "category"=>"filter-card",

          
        ]);
        DB::table("portfolios")->insert([
            
            "photo"=>"img/portfolio/portfolio-8.jpg",
            "category"=>"filter-card",

          
        ]);
        DB::table("portfolios")->insert([
            
            "photo"=>"img/portfolio/portfolio-9.jpg",
            "category"=>"filter-web",

           

        ]);
    
    }

}
