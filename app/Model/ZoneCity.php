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
}
