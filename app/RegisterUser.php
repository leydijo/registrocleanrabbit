<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterUser extends Model
{
  
   protected $fillable = ['cedula', 'nombres', 'direccion','cumpleanos', 'telefono'];





   public function  productos()
    {
   
       return $this->belongsToMany(TiposServicio::class)->withTimestamps();
  
    }


    public function  tenis()
    {
   
       return $this->belongsToMany(EstadosTeni::class)->withTimestamps();
  
    }


    public function  marcas()
    {
   
       return $this->belongsToMany(Marca::class)->withTimestamps();
  
    }

    
    public function  estados()
    {
   
       return $this->belongsToMany(EstadosPedido::class)->withTimestamps();
  
    }

    public function  orders()
    {
   
       return $this->belongsToMany(Orders::class)->with("marca")->with("user");
  
    }

    public function getUserById($user_id)
    {
      return $this->where("id",$user_id)->with("orders")->first();
    }
   
   
}


