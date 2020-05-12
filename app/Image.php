<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    public function pages()
    {
        return $this->morphedByMany(Page::class, 'imageable');
    }

    public function slides()
    {
        return $this->morphedByMany(Slide::class, 'imageable');
    }

    public function projectDetails()
    {
        return $this->hasMany(ProjectDetail::class);
    }
}
