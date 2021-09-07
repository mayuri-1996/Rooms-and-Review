<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ApplyForRent extends Model
{
    public function apply_for_rent_to_buyers(){
        return $this->hasOne('App\Model\Buyer', 'id', 'user_id');
    }
}
