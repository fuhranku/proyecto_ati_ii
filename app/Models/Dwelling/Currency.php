<?php

namespace App\Models\Dwelling;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    //
    protected $table = 'currency';
    public $timestamps = false;

    
    protected $fillable = [
        'name',
    ];

}
