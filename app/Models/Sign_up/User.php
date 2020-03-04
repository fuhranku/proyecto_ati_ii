<?php

namespace App\Models\Sign_up;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // To put a custom table name use this
    // protected $table = 'my_flights';

    public function naturalPerson(){
        return $this->hasOne('App\Models\Sign_up\NaturalPerson', 'user_id');
    }
    
    public function legalPerson(){
        return $this->hasOne('App\Models\Sign_up\LegalPerson', 'user_id');
    }
    
    protected $casts = [
        'found_us' => 'array',
        'interest_services' => 'array',
        'news_means' => 'array',
    ];

    public $timestamps = false;

    protected $fillable = [
        'date_reg',
        'role',
        'found_us',
        'person_type',
        'lang',
        'email',
        'password',
        'days_freq',
        'interest_services',
        'news_means',
        'user_unique_id',
        'banco_origen',
        'banco_destino',
        'country_facturacion'
    ];
}
