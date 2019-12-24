<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Log;

class Position extends Model
{
    public function employments()
    {
        return $this->hasMany('App\Employment');
    }
}
