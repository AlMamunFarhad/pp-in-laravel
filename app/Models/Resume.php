<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = ['name','title','image','summary','experiences','projects','skills','educations','interests'];
}
