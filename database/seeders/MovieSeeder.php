<?php

namespace Database\Seeders;

use Database\Factories\MovieFactory;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MovieFactory::times(5)->create();
    }
}
