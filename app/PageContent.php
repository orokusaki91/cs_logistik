<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    public function page()
    {
    	return $this->belongsTo(Page::class);
    }

    public function page_codes()
    {
    	return $this->hasMany(PageCode::class);
    }
}
