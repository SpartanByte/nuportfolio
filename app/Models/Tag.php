<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    //
    use SoftDeletes;

    protected $table = 'tags';

    protected $fillable = [
        'tag'
    ];

    public function categories(){
        return $this->hasMany('App\Models\Post', 'tag_id', 'id');
    }
}
