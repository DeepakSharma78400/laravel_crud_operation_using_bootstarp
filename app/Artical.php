<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artical extends Model
{
    protected $fillable = ['id','title','description','author'];
}
