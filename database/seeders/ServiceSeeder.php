<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("services")->insert(
            [["icon"=>"flaticon-023-flask",
            "title"=>"GET IN THE LAB",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
            ],
            ["icon"=>"flaticon-011-compass",
            "title"=>"PROJECTS ONLINE",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
            ],
            ["icon"=>"flaticon-037-idea",
            "title"=>"SMART MARKETING",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
            ],
            ["icon"=>"flaticon-039-vector",
            "title"=>"SOCIAL MEDIA",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
            ],
            ["icon"=>"flaticon-036-brainstorming",
            "title"=>"BRAINSTORMING",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
            ],
            ["icon"=>"flaticon-026-search",
            "title"=>"DOCUMENTED",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
            ],
            ["icon"=>"flaticon-018-laptop-1",
            "title"=>"RESPONSIVE",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
            ],
            ["icon"=>"flaticon-043-sketch",
            "title"=>"RETINA READY",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
            ],
            ["icon"=>"flaticon-012-cube",
            "title"=>"ULTRA MODERN",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
            ]]
        );
    }
}
