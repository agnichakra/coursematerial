<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //

    public $timestamps = true;
    protected $fillable = ['filename', 'path'];

}
