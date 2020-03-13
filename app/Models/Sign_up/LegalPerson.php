<?php

namespace App\Models\Sign_up;

use Illuminate\Database\Eloquent\Model;

class LegalPerson extends Model
{
    public function country(){
        $this->hasOne('App\Models\Location\Country');
    }

    public function city(){
        $this->hasOne('App\Models\Location\City');
    }
    
    public $timestamps = false;
    protected $table = 'legalPeople';
    protected $fillable = [
        // Foreign Keys
        'user_id',
        'country_id',
        'city_id',
        // Data
        'name_comp',
        'rif',
        'address_comp',
        'name_rep',
        'last_name_rep',
        'email_rep',
        'mobile_number',
        'landline_number',
        'landline_number_ext',
    ];
}