<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $guarded = [];

    public function images()
    {
        return $this->morphToMany(Image::class, 'imageable');
    }
}
