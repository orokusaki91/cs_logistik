<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	public $timestamps = false;
	
	public function page_contents()
    {
    	return $this->hasMany(PageContent::class);
    }
}
