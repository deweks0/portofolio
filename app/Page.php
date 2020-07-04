<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = [];

    public function images()
    {
        return $this->morphToMany(Image::class, 'imageable');
    }

    public function projectDetails()
    {
        return $this->hasMany(ProjectDetail::class);
    }

    public function pageDescriptions()
    {
        return $this->hasMany(PageDescription::class);
    }
}
