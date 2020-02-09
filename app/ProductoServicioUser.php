<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoServicioUser extends Model
{
    //

    protected $fillable = [
        'cedula_id', 
        'servicio_id', 
        'marcas_id', 
        'estado_tenis_id', 
        'estado_pedido_id',
        'abono',
        'numero_order',
        'referencia',
        'fecha_entrega'
    ];

    public $timestamps = false;
 
}
