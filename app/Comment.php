<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['email','comment_content','comment_name'];
    public function post()
    {
        return $this->belongsTo('App\Post','post_id');
    }
}
