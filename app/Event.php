<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    public $table = 'events';

    public $fillable = ['title','body','image'];
}
