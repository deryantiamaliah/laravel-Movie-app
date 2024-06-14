<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('movies.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'genre_id' => 'required',
            'poster' => 'required',
            'synopsis' => 'required',
        ]);
    
        Movie::create($validatedData);
    
        return redirect('/movies')->with('success', 'Movie added successfully!');
    }

    public function edit(Movie $movie)
    {
        $genres = Genre::all();
        return view('movies.edit', compact('movie', 'genres'));
    }

    public function update(Request $request, Movie $movie)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'genre_id' => 'required',
            'poster' => 'required',
            'synopsis' => 'required',
        ]);

        $movie->update($validatedData);

        return redirect('/movies')->with('success', 'Movie updated successfully!');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect('/movies')->with('success', 'Movie deleted successfully!');
    }
}