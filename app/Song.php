<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    protected $guarded = [];

    public function album()
    {
        return $this->belongsTo(Album::class, 'album_id');
    }
}
