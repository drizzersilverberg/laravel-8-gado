<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    public function movies()
    {
        return $this->hasManyThrough(
            // required
            'App\Models\Movie', // the related model
            'App\Models\MovieActor', // the pivot model

            // optional
            'actor_id', // the current model id in the pivot
            'id', // the id of related model
            'id', // the id of current model
            'movie_id', // the related model id in the pivot
        );
    }
}
