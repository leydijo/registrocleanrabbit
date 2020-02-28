<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadosPedido extends Model
{
    //

     protected $fillable = ['status'];


       
    public function usuarios()
    {
   
       return $this->belongsToMany(RegisterUser::class)->withTimestamps();
  
    }

    public function productos()
    {
   
       return $this->belongsToMany(TiposServicio::class)->withTimestamps();
  
    }

    public function marcas()
    {
   
       return $this->belongsToMany(Marca::class)->withTimestamps();
  
    }

    public function tenis()
    {
   
       return $this->belongsToMany(EstadosTeni::class)->withTimestamps();
  
    }
}


