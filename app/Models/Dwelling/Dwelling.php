<?php

namespace App\Models\Dwelling;

use Illuminate\Database\Eloquent\Model;

class Dwelling extends Model
{
    //

    public $timestamps = false;

    protected $fillable = [
        
        'continent_id',
        'country_id',
        'state_id',
        'city_id',
        'user_id',
        'enable',
        'status',
        'property_type',
        'rooms',
        'bathrooms',
        'parking',
        'comforts',
        'services',
        'images',
        'videos',
        'details',
        'transport_details',
        'location_details',
        'price',
        'currency_id',

        //Contact Data
        'contact_name',
        'contact_lastname',
        'contact_email',
        'contact_mobilenumber',
        'contact_landlinenumber',
        'contact_landlinenumberEXT',
        'contact_days',
        'contact_hourfrom',
        'contact_hourto',

    ];
}
