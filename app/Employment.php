<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Log;

class Employment extends Model
{
    /**
     * Use a mutator to format an attribute before it is set on this model.
     */
    public function setDobAttribute($value) {
        $this->attributes['dob'] = Carbon::createFromFormat('m/d/Y', $value, env('APP_TIMEZONE', 'UTC'));
        Log::debug('date transformed for Employment model: "' . $value . '"');
        Log::debug('date is valid: ' . ($this->attributes['dob']->isValid() === true ? 'true' : 'false'));
    }

    public function position()
    {
        return $this->belongsTo('App\Position');
    }

    public function state()
    {
        return $this->belongsTo('App\State');
    }
}
