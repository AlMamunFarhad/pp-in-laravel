<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public $timestamps = false;

    protected $fillable = ['name','title','description','image'];
}
