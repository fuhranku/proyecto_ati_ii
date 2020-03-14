<?php

namespace App\Models\Dwelling;

use Illuminate\Database\Eloquent\Model;

class Dwelling extends Model
{
    //

    public $timestamps = false;

    protected $fillable = [
        'continent_id',
        'country_id',
        'state_id',
        'city_id',
        'zone_id',
        'status',
        'property_status',
        'property_type',
        'rooms',
        'bathrooms',
        'parking',
        'details',
        'service_details',
        'location',
        'currency_id',
        'price',

        //Contact Data
        'contactName',
        'contactLastName',
        'contactEmail',
        'contactMobileNumber',
        'contactLandlineNumber',
        'contactLandlineNumberEXT',
        'contactDays',
        'contactHourFrom',
        'contactHourTo',

    ];

    public function remove($id){
        $this->find($id)->delete();
    }
    public function edit($data){
        
        // $this->name_curr=$data->input("name_curr");

        // $this->create();
    }
    
    public function find($property){
        return $this->where('id_curr', $property)->first();
    }
    
    public function create(){
        $this->save();
    }
    
    public function isEmpty(){
        if($this->count()==0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function findAll(){
        return $this->all();
    }
}
