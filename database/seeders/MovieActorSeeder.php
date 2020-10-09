<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actor;
use App\Models\Movie;
use App\Models\MovieActor;

class MovieActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actors = Actor::paginate(5);
        $movies = Movie::paginate(5);

        foreach ($movies as $movie) {
            foreach ($actors as $actor) {
                MovieActor::firstOrCreate([
                    'movie_id' => $movie->id,
                    'actor_id' => $actor->id,
                ]);
            }
        }
    }
}
