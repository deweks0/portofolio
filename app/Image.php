<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    public function pages()
    {
        return $this->belongsToMany(Page::class);
    }
}
