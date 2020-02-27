<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // To put a custom table name use this
    // protected $table = 'my_flights';

    public function socialMedias(){
        return $this->belongsToMany('App\Models\Sign_up\SocialMedia');
    }

    public function naturalPerson(){
        return $this->hasOne('App\Models\Sign_up\NaturalPerson');
    }
    
    public function legalPerson(){
        return $this->hasOne('App\Models\Sign_up\LegalPerson');
    }
    
    protected $fillable = [
        "natPerID-FK",
        "legPerID-FK",
        "foundUsSM-FK",
        "dateReg",
        "role",
        "foundUsCheckbox",
        "foundUsOther",
        "lang",
        "email",
        "password",
        "infoFreq",
        "daysFreq",
        "emailFreq",
        "socialFreq",
        "phoneFreq",
        "otherFreq",
        "profileFBFreq",
        "bank",
        "bankCountry",
        "bankDest",
    ];
}
