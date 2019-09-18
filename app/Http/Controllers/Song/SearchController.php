<?php

namespace App\Http\Controllers\Song;

use App\Band;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function band(Request $request)
    {

        $bands = Band::paginate(20);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword) {

            $bands = \App\Band::where('name', 'LIKE', "%$filterKeyword%")->paginate(10);
        }
        return view('home', compact('bands'));
    }
}
