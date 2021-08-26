<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Buyer extends Authenticatable
{
    public function buyers_to_properties(){
        return $this->hasMany('App\Model\Property', 'user_id', 'id');
    }

    public function buyers_to_apply_for_rents(){
        return $this->hasMany('App\Model\ApplyForRent', 'user_id', 'id');
    }

    public function buyers_to_post_property_requests(){
        return $this->hasMany('App\Model\PostPropertyRequest', 'user_id', 'id');
    }
}
