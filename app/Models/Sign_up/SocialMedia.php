<?php

namespace App\Models\Sign_up;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $table = 'socialMedias';
    protected $fillable = [
        'name',
        'link',
    ];
}