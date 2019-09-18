<?php

namespace App\Http\Controllers;

use App\Band;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $bands = Band::paginate(20);
        $filterKeyword = $request->get('keyword');
        // if ($filterKeyword) {

        $bands = \App\Band::where('name', 'LIKE', "%$filterKeyword%")->paginate(10);
        // }
        return view('home', compact('bands'));
    }

    public function ajaxSearch(Request $request)
    {
        $keyword = $request->get('keyword');
        $bands = \App\Band::where("name", "LIKE", "%$keyword%")->get();
        return $bands;
    }
}
