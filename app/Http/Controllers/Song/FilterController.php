<?php

namespace App\Http\Controllers\Song;

use App\Band;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilterController extends Controller
{
    public function show($alphabet)
    {
        $bands = Band::where('name', "LIKE", "{$alphabet}%")->paginate(12);
        return view('home', compact('bands'));
    }
}
