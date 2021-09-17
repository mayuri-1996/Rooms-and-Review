<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserPreferenceCity extends Model
{
    public function user_preference_cities_to_zone_cities(){
        return $this->hasOne('App\Model\ZoneCity', 'id', 'city_id');
    }
}
