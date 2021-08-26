<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PropertyToOtherFeature extends Model
{
    public function property_to_other_features_to_properties(){
        return $this->hasOne('App\Model\Property', 'id', 'property_id');
    }

    public function property_to_other_features_to_other_features(){
        return $this->hasOne('App\Model\OtherFeature', 'id', 'other_feature_id');
    }
}
