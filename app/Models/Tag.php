<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
