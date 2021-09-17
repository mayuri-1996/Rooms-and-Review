<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ZoneCity extends Model
{
    public function zone_cities_to_property_addresses(){
        return $this->hasOne('App\Model\PropertyAddress', 'city', 'id');
    }

    public function zone_cities_to_zones(){
        return $this->hasOne('App\Model\Zone','id','zone_id');
    }

    public function zone_cities_to_user_preference_cities(){
        return $this->hasOne('App\Model\UserPreferenceCity', 'city_id', 'id');
    }

    public function zone_cities_to_post_property_requests(){
        return $this->hasMany('App\Model\PostPropertyRequest', 'city', 'id');
    }
}
