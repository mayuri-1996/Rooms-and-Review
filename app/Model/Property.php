<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function properties_to_buyers(){
        return $this->hasOne('App\Model\Buyer', 'id', 'user_id');
    }

    public function properties_to_property_to_other_features(){
        return $this->hasMany('App\Model\PropertyToOtherFeature', 'property_id', 'id');
    }

    public function properties_to_property_addresses(){
        return $this->hasOne('App\Model\PropertyAddress', 'property_id', 'id');
    }

    public function properties_to_images(){
        return $this->hasMany('App\Model\Image', 'property_id', 'id');
    }

    public function properties_to_property_types(){
        return $this->hasOne('App\Model\PropertyType', 'id', 'property_type_id');
    }

    
}
