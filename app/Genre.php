<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name', 'slug'];

    public function bands()
    {
        return $this->belongsToMany(Band::class, 'band_genre');
    }
}
