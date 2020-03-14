<?php

namespace App\Models\Sign_up;

use Illuminate\Database\Eloquent\Model;

class NaturalPerson extends Model
{
    public function country(){
        $this->hasOne('App\Models\Location\Country');
    }
    
    protected $table = 'naturalPeople';
    public $timestamps = false;
    protected $fillable = [
        // Foreign Keys
        'user_id',
        'country_id',
        // Data
        'name',
        'last_name',
        'person_id',  // This id refers to user country data identification (La cédula)
        'email',
        'mobile_number',
        'landline_number',
        'landline_number_ext',
    ];
}