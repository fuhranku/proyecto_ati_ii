<?php

namespace App\Models\Dwelling;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}
