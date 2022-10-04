<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $guarded = ['director'];

    protected $fillable = 
    [
        'genre',
        'title',
        'year_produced',
        'storyline'
    ];
}

$movies = Movie::all();
return $movies->toArray();