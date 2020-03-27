<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectDetail extends Model
{
    protected $guarded = [];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
