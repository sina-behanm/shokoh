<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'name','family_name','city','email','SSN','phone','s_phone','age','gender'
    ];
}
