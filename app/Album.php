<?php

namespace App;

use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use Sluggable;
    protected $guarded = [];

    public function band()
    {
        return $this->belongsTo(Band::class, 'band_id');
    }
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
