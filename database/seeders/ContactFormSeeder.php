<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_forms')->insert([
            "title" => "CONTACT US",
            "text" => "Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.",
            "adress" => "C/ Libertad, 34 05200 Arévalo",
            "phone" => "0034 37483 2445 322",
            "mail" => "hello@company.com",
        ]);
    }
}
