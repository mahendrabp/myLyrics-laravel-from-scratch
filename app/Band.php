<?php

namespace App;

use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use Sluggable;
    protected $guarded = [];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'band_genre');
    }

    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
