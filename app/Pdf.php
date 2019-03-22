<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    protected $fillable = ['name','concept','file_name','file_size'];
}
