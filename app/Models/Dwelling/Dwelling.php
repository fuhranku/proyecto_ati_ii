<?php

namespace App\Models\Dwelling;

use Illuminate\Database\Eloquent\Model;


class Dwelling extends Model
{
    public function images(){
        return $this->hasMany('App\Models\Dwelling\Image');
    }

    public function videos(){
        return $this->hasMany('App\Models\Dwelling\Video');
    }

    protected $casts = [
        'comforts' => 'array',
        'services' => 'array',
        'contact_days' => 'array',
        'contact_days' => 'array',
    ];

    public $timestamps = false;

    protected $fillable = [
        // Foreign key
        'continent_id',
        'country_id',
        'state_id',
        'city_id',
        // Value cols
        'user_id',
        'enable',
        'status',
        'property_type',
        'rooms',
        'bathrooms',
        'parking',
        'comforts',
        'services',
        'details',
        'transport_details',
        'location_details',
        'price',
        'currency_id',
        'currency_name',
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
