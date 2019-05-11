<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    Public function user()
    {
        return $this->belongsTo('App\User');
    }
}
