<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCourse extends Model
{
    protected $fillable= ['course_name','course_title','course_content','course_image_name'];
    public function course()
    {
        return $this->belongsTo('App\Courses','courses_id');
    }
}
