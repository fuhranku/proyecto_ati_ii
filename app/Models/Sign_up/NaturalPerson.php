<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NaturalPerson extends Model
{
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