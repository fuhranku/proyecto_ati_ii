<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalPerson extends Model
{
    protected $table = 'legalPeople';
    protected $fillable = [
        'user_id',
        'nameComp',
        'nameRep',
        'RIF',
        'countryID-FK',
        'cityID-FK',
        'mobileNumber',
        'landlineNumber',
        'landlineNumberExt',
        'emailRep',
        'addressComp',
    ];
}