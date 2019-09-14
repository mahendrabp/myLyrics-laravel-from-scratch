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
        \request()->validate([
            'name' => 'required|min:2',
            'slug' => 'unique',
        ]);

        Genre::create([
            'name' => \request('name'),
            'slug' => str_slug(\request('name'))
        ]);
        return \back();
    }
}
