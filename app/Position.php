<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function employments()
    {
        return $this->hasMany('App\Employment');
    }
}
