<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Genre;
use App\Episode;

class Movie extends Model
{
    public function Genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function Episode()
    {
        return $this->hasMany(Episode::class);
    }
    protected $table='movie';
}
