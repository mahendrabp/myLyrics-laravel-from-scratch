<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function album()
    {
        return $this->belongsTo(Album::class, 'album_id');
    }
    public function band()
    {
        return $this->belongsTo(Band::class, 'band_id');
    }
}
