<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = [];

    public function images()
    {
        return $this->belongsToMany(Image::class);
    }

    public function projectDetails()
    {
        return $this->hasMany(ProjectDetail::class);
    }
}
