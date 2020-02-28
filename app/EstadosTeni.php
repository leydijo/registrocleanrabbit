<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadosTeni extends Model
{
    //
    protected $fillable = [ 'estado_tenis'];


    
    public function  users()
    {
   
       return $this->belongsToMany(RegisterUser::class)->withTimestamps();
  
    }


    public function  tenis()
    {
   
       return $this->belongsToMany(EstadosTeni::class)->withTimestamps();
  

    }


    public function  productos()
    {
   
       return $this->belongsToMany(TiposServicio::class)->withTimestamps();
  
    }

    public function  estados()
    {
   
       return $this->belongsToMany(EstadosPedido::class)->withTimestamps();
  
    }


    
}
