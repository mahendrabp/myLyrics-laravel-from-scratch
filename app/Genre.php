<?php

namespace App;

use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use Sluggable;
    protected $fillable = ['name', 'slug'];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function bands()
    {
        return $this->belongsToMany(Band::class, 'band_genre');
    }
}
