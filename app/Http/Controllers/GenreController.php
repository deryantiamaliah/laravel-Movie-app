<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        return view ('genres.index', compact('genres'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('genres.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        Genre::create($validatedData);

        return redirect('/genres')->with('success', 'Genre added successfully!');
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        
        return redirect('/genres')->with('success', 'Genre deleted successfully!');
    }
}