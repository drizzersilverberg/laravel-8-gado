<?php

namespace Database\Factories;

use App\Models\MovieActor;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieActorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MovieActor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'movie_id' => function () {
                return MovieFactory::times(1)->create()->id,
            },
            'actor_id' => function () {
                return ActorFactory::times(1)->create()->id,
            }
        ];
    }
}
