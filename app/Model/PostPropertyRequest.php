<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostPropertyRequest extends Model
{
    public function post_property_requests_to_buyers(){
        return $this->hasOne('App\Model\Buyer', 'id', 'user_id');
    }

    public function post_property_requests_to_zone_cities(){
        return $this->hasOne('App\Model\ZoneCity','id', 'city');
    }
    
}
