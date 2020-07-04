<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageDescription extends Model
{
    protected $guarded = [];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
