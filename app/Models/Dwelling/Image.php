<?php

namespace App\Models\Dwelling;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = false;

    protected $fillable = [
        // Foreign key
        'dwelling_id',
        // Model cols
        'name',
        'url',
        'format',
    ];
}
