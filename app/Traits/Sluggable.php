<?php

namespace App\Traits;

trait Sluggable
{
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = str_slug($model->name);
        });
    }
}
