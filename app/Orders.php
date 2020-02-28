<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //

    protected $fillable = [
      'register_user_id', 
      'servicio_id', 
      'marca_id', 
      'estado_tenis_id', 
      'estado_pedido_id',
      'abono',
      'numero_order',
      'reference',
      'fecha_entrega'
  ];

  public $timestamps = false;

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
