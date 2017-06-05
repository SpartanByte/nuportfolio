<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryManager extends Model
{
    //
    public function images(){
    	return $this->hasMany('/uploads');
    }
}
