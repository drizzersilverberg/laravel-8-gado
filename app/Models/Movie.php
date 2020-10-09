<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function actors()
    {
        return $this->hasManyThrough(
            // required
            'App\Models\Actor', // the related model
            'App\Models\MovieActor', // the pivot model

            // optional
            'movie_id', // the current model id in the pivot
            'id', // the id of related model
            'id', // the id of current model
            'actor_id', // the related model id in the pivot
        );
    }
}
