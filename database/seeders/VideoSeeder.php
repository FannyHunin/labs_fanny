<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            "img"=>"images/video.jpg",
            "src"=>"https://www.youtube.com/watch?v=DLzxrzFCyOs"
        ]);
    }
}
