<?php

namespace App\Http\Controllers\Song;

use App\Band;
use App\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $bands = Band::latest()->paginate(10);
        return \view('bands.index', compact('bands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bands = Band::latest()->paginate(10);
        $genres = Genre::latest()->get();
        return \view('bands.create', compact('genres', 'bands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        request()->validate([
            'name' => 'required|min:1',
            // 'genres' => 'required',
            'poster' => 'required'
        ]);

        // $slug = str_slug(request('name'));
        $poster = request()->file('poster')->store('poster');

        $band = Band::create([
            'name' => request('name'),
            // 'slug' => $slug,
            'poster' => $poster
        ]);

        $band->genres()->sync(request('genres'), false);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Band $band)
    {

        return view('bands.show', compact('band'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Band $band)
    {
        $genres = Genre::latest()->get();
        return view('bands.edit', compact('band', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Band $band)
    {
        // request()->validate([
        //     'name' => 'required|min:1',
        //     // 'genres' => 'required',
        //     'poster' => 'required'
        // ]);

        if (request('poster')) {
            if ($band->poster) {
                Storage::delete($band->poster);
            }
            $poster = request()->file('poster')->store('poster');
        } else {
            $poster = $band->poster;
        }

        $band->update([
            'name' => request('name'),
            'poster' => $poster,

        ]);

        if (request('genres')) {
            $band->genres()->sync(request('genres', false));
        } else {
            $band->genres()->sync([]);
        }
        \session()->flash('success', 'your band was updated.');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
