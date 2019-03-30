<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    protected $fillable = ['title','body','content','image_name'];
    use SoftDeletes;

    public function comment()
    {
        return $this->hasMany('App\Comment','post_id');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tags','post_tag','post_id','tag_id')->
        withTimestamps();
    }
    public function User()
    {
        return $this->belongsTo('App\User','user_id');
    }

}