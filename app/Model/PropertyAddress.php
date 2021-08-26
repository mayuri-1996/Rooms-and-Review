<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PropertyAddress extends Model
{
    public function property_addresses_to_properties(){
        return $this->hasMany('App\Model\Property', 'id', 'property_id');
    }

    public function property_addresses_to_zones(){
        return $this->hasOne('App\Model\Zone', 'id', 'state');
    }

    public function property_addresses_to_zone_cities(){
        return $this->hasOne('App\Model\ZoneCity', 'id', 'city');
    }
}
