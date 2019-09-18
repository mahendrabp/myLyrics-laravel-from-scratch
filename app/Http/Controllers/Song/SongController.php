<?php

namespace App\Http\Controllers\Song;

use App\Album;
use App\Band;
use App\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bands = Band::latest()->get();

        $albums = Album::latest()->get();
        return view('songs.create', compact('bands', 'albums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title' => 'required|min:2',
            'lyric' => 'required',
            'band' => 'required',
            'album' => 'required',
        ]);

        $band = Band::find(request('band'));
        $attributes['slug'] = str_slug(\request('title')) . "-" . str_random(3);
        $attributes['album_id'] = \request('album');
        $band->songs()->create($attributes);

        return \back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Band $band, Song $song)
    {
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        $bands = Band::latest()->get();
        $albums = Album::latest()->get();
        return view('songs.edit', compact('song', 'bands', 'albums'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Song $song)
    {
        request()->validate([
            'title' => 'required|min:2',
            'lyric' => 'required',

        ]);

        // $band = Band::find(request('band'));
        // $attributes['slug'] = str_slug(\request('title')) . "-" . str_random(3);
        // $attributes['album_id'] = \request('album');

        $song->update([
            'title' => request('title'),
            'lyric' => request('lyric'),
            'album_id' => \request('album'),
            'band_id' => \request('band'),
            'slug' => str_slug(\request('title')) . "-" . str_random(3)
        ]);

        return redirect()->route('songs.show', [$song->band, $song]);
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
