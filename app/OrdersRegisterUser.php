<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdersRegisterUser extends Model
{
    //
    protected $fillable = ['register_user_id', 'orders_id'];


    public function  marca()
  {
 
     return $this->belongsTo(Marca::class);

  }

  public function  productos()
  {
 
     return $this->belongsTo(TiposServicio::class);

  }

  public function  user()
  {
 
     return $this->belongsTo(RegisterUser::class);

  }
}
