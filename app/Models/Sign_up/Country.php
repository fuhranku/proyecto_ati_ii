<?php

namespace App\Models\Sign_up;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function naturalPeople(){
        return $this->hasMany('App\Models\Sign_up\NaturalPerson', 'countryID-FK');
    }
    
    public function legalPeople(){
        return $this->hasMany('App\Models\Sign_up\LegalPerson', 'countryID-FK');
    }

    public function cities(){
        return $this->hasMany('App\Models\Sign_up\City', 'countryID-FK');
    }

    protected $table = 'countries';
    protected $fillable = [
        'naturalPerson_id',
        'legalPerson_id',
        'name',
    ];
}