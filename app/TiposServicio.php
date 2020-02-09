<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposServicio extends Model
{
    //
    protected $fillable = ['tipo_servicio'];


    public function  users()
    {
   
       return $this->belongsToMany(RegisterUser::class)->withTimestamps();
  
    }

    public function  marcas()
    {
   
       return $this->belongsToMany(Marca::class)->withTimestamps();
  
    }

    
    public function  tenis()
    {
   
       return $this->belongsToMany(EstadosTeni::class)->withTimestamps();
  
    }

    public function  estados()
    {
   
       return $this->belongsToMany(EstadosPedido::class)->withTimestamps();
  
    }

  

}
