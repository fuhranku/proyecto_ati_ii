<?php

namespace App\Models\Sign_up;

use Illuminate\Database\Eloquent\Model;

class NaturalPerson extends Model
{
    public function country(){
        $this->hasOne('App\Models\Sign_up\Country');
    }

    protected $table = 'naturalPeople';
    protected $fillable = [
        'user_id',
        'name',
        'lastName',
        'personID',
        'email',
        'countryID-FK',
        'mobileNumber',
        'landlineNumber',
        'landlineNumberExt',
    ];
}