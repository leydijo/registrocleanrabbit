<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $fillable = [ 'marcas'];


    public function  usuarios()
    {
   
       return $this->belongsToMany(RegisterUser::class)->withTimestamps();
  
    }

    public function  productos()
    {
   
       return $this->belongsToMany(TiposServicio::class)->withTimestamps();
  
    }

    public function estado()
    {
   
       return $this->belongsToMany(EstadosPedido::class)->withTimestamps();
  
    }

    public function tenis()
    {
   
       return $this->belongsToMany(EstadosTeni::class)->withTimestamps();
  
    }



   
    
}
