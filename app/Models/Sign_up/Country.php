<?php

namespace App\Models\Sign_up;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function naturalPeople(){
        return $this->hasMany('App\Models\Sign_up\NaturalPerson');
    }
    
    public function legalPeople(){
        return $this->hasMany('App\Models\Sign_up\LegalPerson');
    }

    public function cities(){
        return $this->hasMany('App\Models\Sign_up\City');
    }

    protected $table = 'countries';
    protected $fillable = [
        'name',
    ];
}