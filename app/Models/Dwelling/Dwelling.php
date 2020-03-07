<?php

namespace App\Models\Dwelling;

use Illuminate\Database\Eloquent\Model;
use app\Patterns\Dao as DAO;

class Dwelling extends Model implements DAO
{
    //

    public $timestamps = false;

    protected $fillable = [
        'id_dwelling',
        'continentID',
        'countryID',
        'stateID',
        'cityID',
        'zoneID',
        'dwellingState',
        'propertyState',
        'propertyType',
        'rooms',
        'bathrooms',
        'parking',
        'extraDetails',
        'serviceTransportDetails',
        'exactLocation',
        'id_currency',
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
