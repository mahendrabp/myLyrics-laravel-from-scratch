<?php

namespace App;

use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use Sluggable;
    protected $guarded = [];

    public function album()
    {
        return $this->belongsTo(Album::class, 'album_id');
    }
}
