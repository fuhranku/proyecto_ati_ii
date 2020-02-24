<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

/*
* Model for mongo
*/
use Jenssegers\Mongodb\Eloquent\Model as Model;

class User extends Model
{
    //

    protected $connection = 'mongodb';
	protected $collection = 'books';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password'
    ];
}
