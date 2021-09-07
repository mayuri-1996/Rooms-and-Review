<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OtherFeature extends Model
{
    public function other_features_to_property_to_other_features(){
        return $this->hasMany('App\Model\PropertyToOtherFeature', 'other_feature_id', 'id');
    }
}
