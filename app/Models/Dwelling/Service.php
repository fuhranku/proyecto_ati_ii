<?php

namespace App\Models\Dwelling;

use Illuminate\Database\Eloquent\Model;
use app\Patterns\Dao as DAO;

class Service extends Model implements DAO
{
    //
    public $timestamps = false;

    protected $fillable = [
        'id_service',
        'name_service',
    ];

    public function remove($id){
        $this->find($id)->delete();
    }
    public function edit($data){
        
        // $this->Nombre=$data->input("Nombre");
        
        // $this->create();
    }
    
    public function find($property){
        return $this->where('id_service', $property)->first();
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
