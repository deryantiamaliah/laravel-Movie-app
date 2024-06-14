<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('product', compact('movies'));
    }
}
