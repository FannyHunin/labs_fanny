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
        DB::table('testimonials')->insert(
            [
                ["text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "name"=>"Michael Smith",
                "function"=>"CEO Company",
                "src"=>"1.jpg"],
                ["text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "name"=>"Michael Smith",
                "function"=>"CEO Company",
                "src"=>"2.jpg"],
                ["text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "name"=>"Michael Smith",
                "function"=>"CEO Company",
                "src"=>"1.jpg"],
                ["text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "name"=>"Michael Smith",
                "function"=>"CEO Company",
                "src"=>"2.jpg"],
                ["text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "name"=>"Michael Smith",
                "function"=>"CEO Company",
                "src"=>"1.jpg"],
                ["text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "name"=>"Michael Smith",
                "function"=>"CEO Company",
                "src"=>"2.jpg"],
            ]
        );
    }
}
