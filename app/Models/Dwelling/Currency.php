<?php

namespace App\Models\Dwelling;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    //

    public $timestamps = false;

    protected $fillable = [
        'id_currency',
        'name_currency',
    ];

    public function remove($id){
        $this->find($id)->delete();
    }
    public function edit($data){
        
        // $this->name_currency=$data->input("name_currency");
        
        // $this->create();
    }
    
    public function find($property){
        return $this->where('id_currency', $property)->first();
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
