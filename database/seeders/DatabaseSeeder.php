<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\PersonFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Person::factory(10)->create();
    }
}
