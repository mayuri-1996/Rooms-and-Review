<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SearchHistory extends Model
{
    public function search_histories_to_properties(){
        return $this->hasOne('App\Model\Property','id','property_id');
    }
}
