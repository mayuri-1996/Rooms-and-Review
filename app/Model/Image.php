<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function images_to_properties(){
        return $this->hasOne('App\Model\Property', 'id', 'property_id');
    }
}
