<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movie = new Movie();
        $movies = $movie->getAllMovies();

        return view('movies.index', ['movies' => $movies]);
    }
}
