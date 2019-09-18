<?php

namespace App\Http\Controllers\Song;

use App\Album;
use App\Band;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
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
    { }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bands = Band::latest()->get();
        $albums = Album::latest()->get();
        return view('albums.create', compact('bands', 'albums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|min:2',

        ]);

        $cover = request()->file('cover')->store('cover');

        Album::create([
            'name' => \request('name'),
            'band_id' => request('band'),
            // ambil dari id di form dengan nama band
            'cover' => $cover,
        ]);

        return back();
        // atau bisa juga seperti ini
        // $band = Band::request('band');
        // $band->albums()->create($attributes);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Album $album)
    {

        if (request('cover')) {
            if ($album->cover) {
                Storage::delete($album->cover);
            }
            $cover = request()->file('cover')->store('cover');
        } else {
            $cover = $album->cover;
        }

        request()->validate([
            'name' => 'required|min:2',
            'cover' => 'required',
        ]);



        $album->update([
            'name' => \request('name'),
            'band_id' => request('band'),
            'cover' => $cover

        ]);

        // if (request('genres')) {
        //     $band->genres()->sync(request('genres', false));
        // } else {
        //     $band->genres()->sync([]);
        // }
        \session()->flash('success', 'your band was updated.');

        return \back();
    }

    public function get_all_albums($band_id)
    {
        $band = Band::findOrFail($band_id);
        return $band->albums;
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
