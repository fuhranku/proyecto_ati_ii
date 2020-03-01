<?php

namespace App\Models\Sign_up;

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
    
    protected $casts = [
        'found_us' => 'array',
        'interest_services' => 'array',
        'news_means' => 'array',
    ];

    protected $fillable = [
        "natPerID-FK",
        "legPerID-FK",
        "found_us",
        "dateReg",
        "user_unique_id",
        "role",
        "foundUsCheckbox",
        "foundUsOther",
        "lang",
        "email",
        "password",
        "interest_services",
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
