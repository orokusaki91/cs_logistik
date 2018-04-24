<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageCode extends Model
{
    public $timestamps = false;

    public function page_contents()
    {
    	return $this->belongsTo(PageContent::class);
    }
}
