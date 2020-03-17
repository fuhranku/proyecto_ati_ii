<?php

namespace App\Models\Dwelling;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        //Foreign Key
        'dwelling_id',
        // cols values
        'name',
        'url',
        'format'
    ];
}
