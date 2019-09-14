<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $guarded = [];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'band_genre');
    }
}
