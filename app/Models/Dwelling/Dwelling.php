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
        'zone_id',
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

        // //Contact Data
        // 'contactName',
        // 'contactLastName',
        // 'contactEmail',
        // 'contactMobileNumber',
        // 'contactLandlineNumber',
        // 'contactLandlineNumberEXT',
        // 'contactDays',
        // 'contactHourFrom',
        // 'contactHourTo',

    ];
}
