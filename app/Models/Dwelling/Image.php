<?php

namespace App\Models\Dwelling;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'name',
        'format'
    ];
}
