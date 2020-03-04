<?php

namespace App\Models\Sign_up;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function legalPeople(){
        return $this->hasMany('App\Models\Sign_up\LegalPerson');
    }

    protected $table = 'cities';
    protected $fillable = [
        // Foreign keys
        'country_id',
        // Data
        'name',
    ];
}