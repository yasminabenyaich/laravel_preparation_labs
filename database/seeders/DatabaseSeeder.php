<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this-> call(AboutSeeder::class);
        $this->call(HeroSeeder::class);
        $this->call(InformationSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TitreSeeder::class);


    }
}
