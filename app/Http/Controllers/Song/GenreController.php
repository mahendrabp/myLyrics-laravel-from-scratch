<?php

namespace App\Http\Controllers\Song;

use App\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $genres = Genre::latest()->get();
        return view('genres.create', compact('genres'));
    }


    public function store()
    {
        $attributes = \request()->validate([
            'name' => 'required|min:2',
            'slug' => 'unique',
        ]);

        Genre::create($attributes);
        return \back();
    }

    public function show(Genre $genre)
    {
        $bands = $genre->bands;
        return view('home', compact('bands'));
    }
}
