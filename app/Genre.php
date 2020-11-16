<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Movie;

class Genre extends Model
{
    public function Movie(){
        return $this->hasMany(Movie::class);
    }
    protected $table='genre';
}
