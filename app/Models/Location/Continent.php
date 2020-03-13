<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    public function countries(){
        return $this->hasMany('App\Models\Location\Country');
    }
}
