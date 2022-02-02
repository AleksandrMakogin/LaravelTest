<?php

namespace Database\Seeders;

use App\Models\Books;
use App\Models\Gener;
use App\Models\MainTabel;
use Database\Factories\MainTabelFactory;
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
        // \App\Models\User::factory(10)->create();
        Books::factory(20)->create();
        Gener::factory(5)->create();
        MainTabel::factory(20)->create();
    }
}
