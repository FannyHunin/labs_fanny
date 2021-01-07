<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                "src"=>"1.jpg",
                "name"=>"Christinne Williams",
                "function"=>"PROJECT MANAGER"   
            ],
            [
                "src"=>"2.jpg",
                "name"=>"Enola Jones",
                "function"=>"JUNIOR DEV"   
            ],
            [
                "src"=>"3.jpg",
                "name"=>"Josh O'Bryan",
                "function"=>"ITAL DESIGNER"   
            ],
        ]);
    }
}
