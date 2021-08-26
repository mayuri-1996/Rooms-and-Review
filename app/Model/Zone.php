<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    public function zones_to_property_addresses(){
        return $this->hasOne('App\Model\PropertyAddress', 'state', 'id');
    }
}
