<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{

    public function cities(){
        return $this->hasMany('App\Models\Location\City');
    }

    protected $table = 'state';
    protected $fillable = [
        'country_id',
        'name'
    ];
}
