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
        $this->call([
            NavlinkSeeder::class,
            MotoSeeder::class,
            ServiceSeeder::class,
            PresentationSeeder::class,
            VideoSeeder::class, 
            TestimonialSeeder::class,
            ContactFormSeeder::class,
            TeamTitleSeeder::class,
            TeamSeeder::class,
            PrimeServiceSeeder::class,
            CenterTeamSeeder::class,
            ServiceTitleSeeder::class,
            TagSeeder::class
        ]);
    }
}
