<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;

class MovieController extends Controller
{
    public function toHome(){
        $genres = Genre::all();
        $movies = Movie::all();
        return view('home', ['genres' => $genres, 'movies' => $movies]);
    }
    public function detail($id){
        $movies = Movie::find($id);
        $episodes = $movies->episode()->paginate(3);
        return view('detail', ['movies' => $movies, 'episodes' => $episodes]);
    }
    public function genreDetail($id){
        $genres = Genre::find($id);
        return view('category', ['genres' => $genres]);
    }
}
