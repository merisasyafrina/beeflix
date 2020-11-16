<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Movie;

class Episode extends Model
{
    public function Movie()
    {
        return $this->belongsTo(Movie::class);
    }
    protected $table='episode';
}
