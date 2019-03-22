<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = ['name','grade'];
    public function Sub_Course()
    {
        return $this->hasMany('App\SubCourse','courses_id');
    }
}
