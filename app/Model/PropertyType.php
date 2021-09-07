<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    public function property_types_to_properties(){
        return $this->hasMany('App\Model\Property', 'property_type_id', 'id');
    }
}
