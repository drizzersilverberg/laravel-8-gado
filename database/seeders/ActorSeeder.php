<?php

namespace Database\Seeders;

use Database\Factories\ActorFactory;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActorFactory::times(5)->create();
    }
}
